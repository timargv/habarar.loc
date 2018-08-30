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

    public function show($slug) {
        $suras = Sura::all();
        $sura = Sura::where('slug', $slug)->firstOrFail();
        return view('quran.show', compact('sura', 'suras'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ayat($slug) {
        $suras = Sura::all();
        $ayat = Ayat::where('slug', $slug)->firstOrFail();
        $sura = Sura::find($ayat->sura_id);

        return view('quran.ayat.show', compact('suras','ayat', 'sura'));

    }


}























