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
        if (session('buy') == null or !in_array($id, session('id'))) {

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

    public function addTurn($id)
    {
        if (session('buyTurn') == null or session('idTurn') == null or !in_array($id, session('idTurn'))) {

            session()->push("idTurn", $id);
            $record = Turntables::where('id', '=', $id)->get();

            $thisPrice = Turntables::select('price')->where('id', '=', $id)->get()[0]["price"];


            session()->push("buyTurn", $record[0]);

            $result = [];
            $ids = [];


            foreach (session('buyTurn') as $buy) {
                if (!in_array($buy->id, $ids)) {
                    $ids[] = $buy->id;
                    $result[] = $buy;
                }
            }
            session(['buyTurn' => null]);


            foreach ($result as $res) {
                session()->push("buyTurn", $res);
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
        session(['buyTurn' => null]);
        session(["countTurn" => null]);
        session(['idTurn' => null]);
        session(['id' => null]);
        return redirect()->route('great');

    }

    public function dellOne($id)
    {
        $result = [];
        foreach (session('buy') as $buy) {
            if ($buy->id != $id) {
                $result[] = $buy;
            }
        }

        if (session('price') != null) {
            $price = session('price')[0];
        } else {
            $price = 0;
        }

        if(session("countRecord.$id") == null) {
            $temp = 1;
        }
        else{
            $temp = session("countRecord.$id");
        }


        $price -= $temp * Record::select('price')->where('id', '=', $id)->get()[0]["price"];


        session(['price' => null]);
        session()->push('price', $price);


        session(['buy' => null]);

        foreach ($result as $res) {
            session()->push("buy", $res);
        }

        session(["countRecord.$id" => null]);

        foreach (session('id') as $key => $item) {

            if ($item == $id) {
                session()->forget("id.$key");
            }
        }

        return view('basket');
    }

    public function dellOneTurn($id)
    {
        $result = [];
        $price = 0;
        foreach (session('buyTurn') as $buy) {
            if ($buy->id != $id) {
                $result[] = $buy;
                $price += $buy->price;
            }
        }

        if (session('price') !== null) {
            $price = session('price')[0];
        } else {
            $price = 0;
        }

        if (session("countTurn.$id") == null){
            $temp = 1;
        }
        else {
            $temp = session("countTurn.$id");
        }

//        return dd(session("countTurn.$id"));

        $price -= $temp * Turntables::select('price')->where('id', '=', $id)->get()[0]["price"];


        session(['price' => null]);
        session()->push('price', $price);


        session(['buyTurn' => null]);

        foreach ($result as $res) {
            session()->push("buyTurn", $res);
        }

        session(["countTurn.$id" => null]);


        foreach (session('idTurn') as $key => $item) {

            if ($item == $id) {
                session()->forget("idTurn.$key");
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
            $price -= $priceRecord * session("countRecord.$id");
        }
        $price += $priceRecord * $count;

        session(['price' => null]);
        session()->push('price', $price);

        session(["countRecord.$id" => $count]);

        return view('basket');
    }

    public function numberBasketTurn($id, Request $request)
    {
        $count = $request->input('user_profile_color_2');
        $record = Turntables::where('id', '=', $id)->get()[0];

        $priceRecord = $record->price;

        $price = session('price')[0];

        if (session("countTurn.$id") == null) {
            $price -= $priceRecord;
        } else {
            $price -= $priceRecord * session("countTurn.$id");
        }

        $price += $priceRecord * $count;

        session(['price' => null]);
        session()->push('price', $price);

        session(["countTurn.$id" => $count]);

        return view('basket');
    }
}
