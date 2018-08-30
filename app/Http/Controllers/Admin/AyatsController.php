<?php

namespace App\Http\Controllers\Admin;

use App\Sura;
use App\Ayat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AyatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ayats = Ayat::paginate(21);
        $title = 'Аяты';
        return view('admin.kuran.ayats.index', compact('ayats', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suras = Sura::pluck('name', 'id')->all();
        return view('admin.kuran.ayats.create', compact('suras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'text'                  => 'required',
            'text_original'         => 'required',
            'text_transcription_ru' => 'required',
            'number'                => 'required|numeric',
            'sura_id'               => 'required',
        ]);


        $ayat = Ayat::add($request->all());
        $ayat->setSura($request->get('sura_id'));
        return redirect()->route('ayats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ayat = Ayat::find($id);
        $suras = Sura::pluck('name', 'id')->all();
        return view('admin.kuran.ayats.edit', compact('ayat', 'suras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'text'                  => 'required',
            'text_original'         => 'required',
            'text_transcription_ru' => 'required',
            'number'                => 'required|numeric',
            'sura_id'               => 'required',
        ]);


        $ayat = Ayat::find($id);
        $ayat->edit($request->all());
        $ayat->setSura($request->get('sura_id'));


        return redirect()->route('ayats.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Ayat::find($id)->delete();
        return redirect()->back();
    }
}
