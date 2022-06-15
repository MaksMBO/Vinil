<?php

namespace App\Http\Controllers;

use App\Models\Turntables;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Record;
use function Symfony\Component\String\s;


class basketController extends Controller
{
    public function basket() {

        return view("basket");
    }

    public function add($id) {
        $record = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
            ->join('albums', 'records.album', '=', 'albums.id_albums')
            ->where('id', '=', $id)->get();

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


        $price = 0;
        foreach ($result as $res) {
            session()->push("buy", $res);
            $price += $res->price;
        }

//        return dd($price, session('buy'));
        session(['price' => null]);
        session()->push('price', $price);




        return view('basket');
    }

    public function dellBuy() {
        session(['buy' => null]);
        session(['price' => null]);
        return view('lending', ['turntables' => Turntables::inRandomOrder()->take(3)->get()]);
    }

    public function dellOne($id){
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

        return view('basket');
    }
}
