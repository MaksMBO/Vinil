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
        return view("turntables", ['turntables' => Turntables::paginate(3)]);
    }

    public function turntablesSearch(Request $request) {
        $turntable = $request->search__turntables;
        return view("turntables", ['turntables' => Turntables::whereRaw("`brend` LIKE '$turntable' OR `subText` LIKE '$turntable'")->get()]);
    }

    public function page($id){
        return view("information_page-turnt", ['turntable' => Turntables::where('id', '=', $id)
            ->get(),
            'anothers' => Turntables::where('id', '<>', $id)
                ->inRandomOrder()
                ->take(3)
                ->get()]);

    }
}
