<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Turntables;

class turntablesController extends Controller
{
    public function turntablesForLending() {
        return view("lending", ['turntables' => Turntables::inRandomOrder()->take(3)->get()]);
    }

    public function turntablesAll() {
        return view("turntables", ['turntables' => Turntables::take(9)->get()]);
    }

    public function turntablesSearch(Request $request) {
        $turntable = $request->search__turntables;
        return view("turntables", ['turntables' => Turntables::whereRaw("`brend` LIKE '$turntable' OR `subText` LIKE '$turntable'")->get()]);
    }
}
