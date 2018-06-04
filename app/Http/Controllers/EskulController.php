<?php

namespace App\Http\Controllers;

use App\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskul = Eskul::all();
        return view('eskul.index',compact('eskuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eskul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'eskul' => 'required|unique:eskuls|max:255',
            'hari' => 'required|min:10',
            'keterangan' => 'required|min:255',
            
        ]);

        $eskul = new Eskul;
        $eskul->eskul = $request->eskul;
        $eskul->hari = $request->hari;
        $eskul->keterangan = $request->keterangan;
        $eskul->save();
        return redirect()->route('eskul.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function show(Eskul $eskul)
    {
        $eskul = Eskul::findOrFail($id);
        return view('eskul.show',compact('eskuls'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function edit(Eskul $eskul)
    {
        $eskul = Eskul::findOrFail($id);
        return view('eskul.edit',compact('eskuls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eskul $eskul)
    {
        $this->validate($request,[
            'eskul' => 'required|unique:eskuls|max:255',
            'hari' => 'required|min:10',
            'keterangan' => 'required|min:255',
        ]);

        // update data berdasarkan id
        $eskul = Kurikulum::findOrFail($id);
        $eskul->eskul = $request->eskul;
        $eskul->hari = $request->hari;
        $eskul->keterangan = $request->keterangan;
        $eskul->save();
        return redirect()->route('eskul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eskul $eskul)
    {
        $eskul = Eksul::findOrFail($id);
        $eskul->delete();
        return redirect()->route('eskul.index');
    }
}
