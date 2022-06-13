<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Record;
use App\Models\Genre;
use App\Models\AlbumGenre;

class recordsController extends Controller
{
    public function recordsAll()
    {
        return view("records", ['records' => Record::join('artists', 'records.artist', '=', 'artists.id_artist')
            ->join('albums', 'records.album', '=', 'albums.id_albums')->take(16)->get(),
            'checkGenre' => array(),
            'start' =>  NULL,
            'end' =>  NULL,
            'amount' => array()]
        );
    }

    public function checkboxes(Request $request)
    {
        $genre = $request->input("genre");

        $amount = $request->input("amount");

        $start = $request->input("start");

        $end = $request->input("end");


        if(isset($genre)) {
            $idGenreTable = Genre::whereIn('genreName', $genre)->get();

            $idGenre = array();
            foreach ($idGenreTable as $item) {
                $idGenre[] = $item->id;
            }

            $idAlbumTable = AlbumGenre::select('albumId')->whereIn('genreId', $idGenre)->get();

            $idAlbum = array();
            foreach ($idAlbumTable as $item) {
                $idAlbum[] = $item->albumId;
            }
        }




        if (isset($start) and isset($end) and isset($genre) and isset($amount)){
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->whereIn("records.album", $idAlbum)
                ->where('price', '<', $end)
                ->where('price', '>', $start)
                ->where('amount', '>=', $amount)
                ->get();
        }

        elseif (isset($start) and isset($end) and isset($genre)){
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->whereIn("records.album", $idAlbum)
                ->where('price', '<', $end)
                ->where('price', '>', $start)
                ->get();
        }

        elseif (isset($start) and isset($end) and isset($amount)){
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('amount', '>=', $amount)
                ->where('price', '<', $end)
                ->where('price', '>', $start)
                ->get();
        }

        elseif (isset($start) and isset($amount) and isset($genre)){
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->whereIn("records.album", $idAlbum)
                ->where('price', '>', $start)
                ->where('amount', '>=', $amount)
                ->get();
        }

        elseif (isset($amount) and isset($end) and isset($genre)){
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('amount', '>=', $amount)
                ->where('price', '<', $end)
                ->whereIn("records.album", $idAlbum)
                ->get();
        }

        elseif (isset($start) and isset($genre)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->whereIn("records.album", $idAlbum)
                ->where('price', '>', $start)
                ->get();
        }

        elseif (isset($end) and isset($genre)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->whereIn("records.album", $idAlbum)
                ->where('price', '<', $end)
                ->get();
        }

        elseif (isset($start) and isset($end)){
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('price', '<', $end)
                ->where('price', '>', $start)
                ->get();
        }

        elseif (isset($end) and isset($amount)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('amount', '>=', $amount)
                ->where('price', '<', $end)
                ->get();
        }

        elseif (isset($start) and isset($amount)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('amount', '>=', $amount)
                ->where('price', '>', $start)
                ->get();
        }

        elseif (isset($genre) and isset($amount)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('amount', '>=', $amount)
                ->whereIn("records.album", $idAlbum)
                ->get();
        }

        elseif (isset($genre)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->whereIn("records.album", $idAlbum)
                ->get();
        }

        elseif (isset($start)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('price', '>', $start)
                ->get();
        }

        elseif (isset($end)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('price', '<', $end)
                ->get();
        }

        elseif (isset($amount)) {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')
                ->where('amount', '>=', $amount)
                ->get();
        }

        else {
            $result = Record::join('artists', 'records.artist', '=', 'artists.id_artist')
                ->join('albums', 'records.album', '=', 'albums.id_albums')->take(16)->get();
        }


        return view("records", ['records' => $result,
            'checkGenre' => ($genre == NULL) ? array() : $genre,
            'start' => (isset($start)) ? $start : NULL,
            'end' => (isset($end)) ? $end : NULL,
            'amount' => ($amount == NULL) ? array() : $amount
        ]);
    }

    public function page($id) {
        return view("information_page", ['record' => Record::join('artists', 'records.artist', '=', 'artists.id_artist')
            ->join('albums', 'records.album', '=', 'albums.id_albums')
            ->where('id', '=', $id)
            ->get(),
            'anothers' => Record::join('artists', 'records.artist', '=', 'artists.id_artist')
            ->join('albums', 'records.album', '=', 'albums.id_albums')
            ->where('id', '<>', $id)
            ->inRandomOrder()
            ->take(4)
            ->get()]);
    }

    public function search(Request $request){
        $search = $request->input('search');

        return view("records", ['records' => Record::join('artists', 'records.artist', '=', 'artists.id_artist')
            ->join('albums', 'records.album', '=', 'albums.id_albums')
            ->whereRaw("`title` LIKE '$search' OR `name` LIKE '$search'")->get(),
            'checkGenre' => array(),
            'start' =>  NULL,
            'end' =>  NULL,
            'amount' => array()]);
    }
}
