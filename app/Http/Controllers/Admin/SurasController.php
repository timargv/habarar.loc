<?php

namespace App\Http\Controllers\Admin;

use App\Sura;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suras = Sura::paginate(114);
        $title = 'Суры';
        return view('admin.kuran.index', compact('suras', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kuran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'                  => 'required',
            'name_original'         => 'required',
            'name_transcription_ru' => 'required',
            'number'                => 'required|numeric'
        ]);
        Sura::create($request->all());
        return redirect()->route('kuran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $sura = Sura::where('slug', $slug)->firstOrFail();
        $ayats = $sura->ayats()->paginate(15);
        return view('admin.kuran.show', ['sura' => $sura, 'ayats'  =>  $ayats, 'title' => 'Сура']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sura = Sura::find($id);

        return view('admin.kuran.edit', compact('sura'));
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
            'name'                  => 'required',
            'name_original'         => 'required',
            'name_transcription_ru' => 'required',
            'number'                => 'required|numeric'
        ]);

        $sura = Sura::find($id);
        $sura->update($request->all());

        return redirect()->route('kuran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sura::find($id)->delete();
        return redirect()->back();
    }
}
