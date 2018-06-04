<?php

namespace App\Http\Controllers;

use App\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulum = Kurikulum::all();
        return view('kurikulum.index',compact('kurikulums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurikulum.create');
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
            'pembelajaran' => 'required|unique:kurikulums|max:255',
            'jurusan' => 'required|min:6',
            'struktur_organisasi' => 'required|min:6',
            
        ]);

        $kurikulum = new Kurikulum;
        $kurikulum->pembelajaran = $request->pembelajaran;
        $kurikulum->jurusan = $request->jurusan;
        $kurikulum->struktur_organisasi = $request->struktur_organisasi;
        $kurikulum->save();
        return redirect()->route('kurikulum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(Kurikulum $kurikulum)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        return view('kurikulum.show',compact('kurikulums'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurikulum $kurikulum)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        return view('kurikulum.edit',compact('kurikulums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurikulum $kurikulum)
    {
        $this->validate($request,[
            'pembelajaran' => 'required|unique:kurikulums|max:255',
            'jurusan' => 'required|min:6',
            'struktur_organisasi' => 'required|min:6',
        ]);

        // update data berdasarkan id
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->pembelajaran = $request->pembelajaran;
        $kurikulum->jurusan = $request->jurusan;
        $kurikulum->struktur_organisasi = $request->struktur_organisasi;
        $kurikulum->save();
        return redirect()->route('kurikulum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurikulum $kurikulum)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->delete();
        return redirect()->route('kurikulum.index');
    }
}
