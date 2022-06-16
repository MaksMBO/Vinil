<?php

namespace App\Http\Controllers;

use App\Models\Turntables;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Record;
use function Symfony\Component\String\s;


class basketController extends Controller
{
    public function basket()
    {

        return view("basket");
    }

    public function add($id)
    {
//        return dd(session('id'));
        if (session('buy') == null or !in_array($id, session('id')) ) {

            session()->push("id", $id);
            $record = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('id', '=', $id)->get();

            $thisPrice = Record::select('price')->where('id', '=', $id)->get()[0]["price"];

            session()->push("buy", $record[0]);

            $result = [];
            $ids = [];


            foreach (session('buy') as $buy) {
                if (!in_array($buy->id, $ids)) {
                    $ids[] = $buy->id;
                    $result[] = $buy;
                }
            }
            session(['buy' => null]);


            foreach ($result as $res) {
                session()->push("buy", $res);
            }


            if (session('price') !== null) {
                $price = session('price')[0];
            } else {
                $price = 0;
            }
            $price += $thisPrice;
            session(['price' => null]);
            session()->push('price', $price);
        }

        return view('basket');
    }

    public function dellBuy()
    {

        session(['buy' => null]);
        session(['price' => null]);
        session(["countRecord" => null]);
        session(['id' => null]);
        return view('lending', ['turntables' => Turntables::inRandomOrder()->take(3)->get()]);
    }

    public function dellOne($id)
    {
        $result = [];
        $price = 0;
        foreach (session('buy') as $buy) {
            if ($buy->id != $id) {
                $result[] = $buy;
                $price += $buy->price;
            }
        }

        session(['price' => null]);
        session()->push('price', $price);


        session(['buy' => null]);

        foreach ($result as $res) {
            session()->push("buy", $res);
        }

        session(['countRecord' =>
            [
                "$id" => null
            ]]);


        foreach(session('id') as $key => $item){

            if ($item == $id){
                session()->forget("id.$key");
            }
        }

        return view('basket');
    }

    public function numberBasket($id, Request $request)
    {
        $count = $request->input('user_profile_color_1');
        $record = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
            ->join('albums', 'records.album', '=', 'albums.id_albums')
            ->where('id', '=', $id)->get()[0];

        $priceRecord = $record->price;

        $price = session('price')[0];

        if (session("countRecord.$id") == null) {
            $price -= $priceRecord;
        } else {
            $price -= $priceRecord * session("countRecord.$id")[0];
        }
        $price += $priceRecord * $count;

        session(['price' => null]);
        session()->push('price', $price);

        session(["countRecord.$id" => $count]);

        return view('basket');
    }
}
