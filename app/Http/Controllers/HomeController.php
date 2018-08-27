<?php

namespace App\Http\Controllers;

use App\Ayat;
use App\Sura;
use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function index()
    {
        $ayats = Ayat::where('sura_id', '=', 1)->get();
        $suras = Sura::all();
        $list_ayats = Ayat::all();
        return view('quran.index', compact('suras', 'ayats', 'list_ayats'));
    }

    public function sura($id)
    {
        $suras = Sura::all();

        $sura = Sura::where('id', $id)->firstOrFail();
        $ayats = $sura->ayats();
        return view('quran.show', ['sura' => $sura, 'ayats' => $ayats,  'title' => 'Сура', 'suras' => $suras]);
    }

    public function show($id) {
        $suras = Sura::all();
        $ayat = Ayat::where('id', $id)->firstOrFail();
        $sura = Sura::where('id', $id)->firstOrFail();
        $ayats = $sura->ayats()->paginate(15);

        return view('quran.ayat.show', ['sura' => $sura, 'suras' => $suras, 'ayats' => $ayats, 'ayat' => $ayat, 'title' => 'Аят' ]);
    }
}























