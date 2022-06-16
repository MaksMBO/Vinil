<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Turntables;

class turntablesController extends Controller
{
    public function turntablesForLending() {
        return view("lending", ['turntables' => Turntables::inRandomOrder()->take(3)->get(),
            'records' => Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')->take(8)->get()]);
    }

    public function turntablesAll() {
        return view("turntables", ['turntables' => Turntables::paginate(3),
            'checkGenre' => array(),
            'start' =>  NULL,
            'end' =>  NULL,
            'amount' => array()]);
    }

    public function turntablesSearchss(Request $request) {
        $turntable = $request->input('search__turntables');
        return view("turntables", ['turntables' => Turntables::whereRaw("`brend` LIKE '$turntable' OR `subText` LIKE '$turntable'")->paginate(3),
            'checkGenre' => array(),
            'start' =>  NULL,
            'end' =>  NULL,
            'amount' => array()]);
    }

    public function page($id){
        return view("information_page-turnt", ['turntable' => Turntables::where('id', '=', $id)
            ->get(),
            'anothers' => Turntables::where('id', '<>', $id)
                ->inRandomOrder()
                ->take(3)
                ->get()]);

    }

    public function checkboxesTurn(Request $request)
    {
        $genre = $request->input("genre");

        $amount = $request->input("amount");

        $start = $request->input("start");

        $end = $request->input("end");


        if(isset($genre)) {
            $idGenreTable = Turntables::whereIn('brend', $genre)->get();

            $idGenre = array();
            foreach ($idGenreTable as $item) {
                $idGenre[] = $item->id;
            }
        }

        if (isset($start) and isset($end) and isset($genre) and isset($amount)){
            $result = Turntables::
                whereIn("id", $idGenre)
                ->where('price', '<', $end)
                ->where('price', '>', $start)
                ->where('amount', '>=', $amount)
                ->paginate(3);
        }

        elseif (isset($start) and isset($end) and isset($genre)){
            $result = Turntables::
                whereIn("id", $idGenre)
                ->where('price', '<', $end)
                ->where('price', '>', $start)
                ->paginate(3);
        }

        elseif (isset($start) and isset($end) and isset($amount)){
            $result = Turntables::where('amount', '>=', $amount)
                ->where('price', '<', $end)
                ->where('price', '>', $start)
                ->paginate(3);
        }

        elseif (isset($start) and isset($amount) and isset($genre)){
            $result = Turntables::
                whereIn("id", $idGenre)
                ->where('price', '>', $start)
                ->where('amount', '>=', $amount)
                ->paginate(3);
        }

        elseif (isset($amount) and isset($end) and isset($genre)){
            $result = Turntables::
                whereIn("id", $idGenre)
                ->where('amount', '>=', $amount)
                ->where('price', '<', $end)

                ->paginate(3);
        }

        elseif (isset($start) and isset($genre)) {
            $result = Turntables::
                whereIn("id", $idGenre)
                ->where('price', '>', $start)
                ->paginate(3);
        }

        elseif (isset($end) and isset($genre)) {
            $result = Turntables::
                whereIn("id", $idGenre)
                ->where('price', '<', $end)
                ->paginate(3);
        }

        elseif (isset($start) and isset($end)){
            $result = Turntables::where('price', '<', $end)
                ->where('price', '>', $start)
                ->paginate(3);
        }

        elseif (isset($end) and isset($amount)) {
            $result = Turntables::where('amount', '>=', $amount)
                ->where('price', '<', $end)
                ->paginate(3);
        }

        elseif (isset($start) and isset($amount)) {
            $result = Turntables::where('amount', '>=', $amount)
                ->where('price', '>', $start)
                ->paginate(3);
        }

        elseif (isset($genre) and isset($amount)) {
            $result = Turntables::
                whereIn("id", $idGenre)
                ->where('amount', '>=', $amount)
                ->paginate(3);
        }

        elseif (isset($genre)) {
            $result = Turntables::
                whereIn("id", $idGenre)
                ->paginate(3);
        }

        elseif (isset($start)) {
            $result = Turntables::
                where('price', '>', $start)
                ->paginate(3);
        }

        elseif (isset($end)) {
            $result = Turntables::where('price', '<', $end)
                ->paginate(3);
        }

        elseif (isset($amount)) {
            $result = Turntables::where('amount', '>=', $amount)
                ->paginate(3);
        }

        else {
            $result = Turntables::take(3)->paginate(3);
        }


        return view("turntables", ['turntables' => $result,
            'checkGenre' => ($genre == NULL) ? array() : $genre,
            'start' => (isset($start)) ? $start : NULL,
            'end' => (isset($end)) ? $end : NULL,
            'amount' => ($amount == NULL) ? array() : $amount
        ]);
    }
}
