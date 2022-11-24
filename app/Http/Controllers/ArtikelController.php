<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Artikel::all();
        return view('artikel.view', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Artikel::all();
        $kategori = Kategori::all();
        return view('artikel.create', compact('data', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $file = $request->file('foto')->store('artikel/foto');
        Artikel::create([
            'judul' => $request->judul,
            'foto' => $file,
            'isi' => $request->isi,
            'kategori_id' => $request->kategori_id,
            'tanggal' => $request->tanggal,
            'user_id' => $user,

        ]);
         
        return redirect('artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Artikel ::findOrFail($id);
        $kategori = Kategori::all();
        return view('artikel.edit', compact('data', 'kategori'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userid = Auth::user()->id;
        $data = Artikel::find($id);
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('artikel/foto');
            $data->update([
                'judul' => $request->judul,
                'foto' => $file,
                'isi' => $request->isi,
                'kategori_id' => $request->kategori_id,
                'tanggal' => $request->tanggal,
                'user_id' => $userid,
            ]);
        }else {
            $data->update([
                'judul' => $request->judul,
                'foto' => $data->foto,
                'isi' => $request->isi,
                'kategori_id' => $request->kategori_id,
                'tanggal' => $request->tanggal,
                'user_id' => $userid,
            ]);
        }
        return redirect('artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Artikel::findOrfail($id);
        $data->delete();
        return redirect('artikel');
    }

    public function dashboard()
    {
        $data = Artikel::all();
        return view('dashboard', compact('data'));
    }
}
