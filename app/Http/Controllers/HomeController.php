<?php

namespace App\Http\Controllers;

use App\Ayat;
use App\Sura;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $suras = Sura::all();
        return view('quran.index', compact('suras'));
    }

    public function quranShow($slug) {
        $sura = Sura::where('slug', $slug)->firstOrFail();
        $ayats = $sura->ayats()->get();
//        $ayats = Ayat::all();


        return view('quran.show', compact('ayats', 'sura'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ayatShow($slug) {
        $ayat = Ayat::where('slug', $slug)->firstOrFail();
        $sura = Sura::where('id', $ayat->sura_id)->firstOrFail();
        $ayats = $sura->ayats()->get();

//        if($ayat->sura_id == $sura->id) {
//            $activeSura = 'active';
//        }
        return view('quran.ayat.show', compact( 'ayat','ayats', 'sura'));
    }

}























