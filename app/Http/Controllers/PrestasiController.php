<?php

namespace App\Http\Controllers;
Use App\Prestasi;
Use App\Eskul;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index',compact('prestasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');
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
            'bidang_eskul' => 'required|max:255',
            'prestasi' => 'required|max:255',
            'tgl_perolehan' => 'required|min:10',
            
        ]);

        $prestasi = new Pretasi;
        $prestasi->bidang_eskul = $request->bidang_eskul;
        $prestasi->hari = $request->prestasi;
        $prestasi->tgl_perolehan = $request->tgl_perolehan;
        $prestasi->save();
        return redirect()->route('prestasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show',compact('prestasis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit',compact('prestasis'));
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
        $this->validate($request,[
            'bidang_eskul' => 'required|max:255',
            'prestasi' => 'required|min:255',
            'tgl_perolehan' => 'required|min:10',
        ]);

        // update data berdasarkan id
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->bidang_eskul = $request->bidang_eskul;
        $prestasi->prestasi = $request->prestasi;
        $prestassi->tgl_perolehan = $request->tgl_perolehan;
        $prestasi->save();
        return redirect()->route('prestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index');
    }
}
