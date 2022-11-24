<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('bmi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = new konsul($request->berat, $request->tinggi, $request->tahun);
        $data = [
            'nama' => $request->nama,
            'bmi' => $a->hitungbmi(),
            'status' => $a->status(),
            'hobi' => $request->hobi1,
            'umur' => $a->hitungUmur(),
            'konsul' => $a->konsul(),
        ];
        return view('bmi', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

class BMI{
    public function __construct($berat, $tinggi, $tahun)
    {
        $this->berat=$berat;
        $this->tinggi=$tinggi / 100;
        $this->tahun=$tahun;
    }
    public function hitungbmi()
    {
        return $this->berat / ($this->tinggi*$this->tinggi);
    }
    public function status()
    {
        $bmip = $this->hitungbmi();
        if ($bmip < 18) {
            return "Kurus";
        }else if($this->hitungbmi() > 30){
            return "Obesitas";
        }else{
            return "Tidak Terdaftar";
        }
    }
    public function hitungUmur()
    {
        return 2022 - $this->tahun;
    }
}

class konsul extends BMI{
    public function cekstt()
    {
        $stt= $this->hitungUmur();
        if ($stt >= 17){
            return "Dewasa";
        }else{
            return "Belum Dewasa";
        }
    }
    public function konsul ()
    {
        if ($this->status() == 'Obesitas' && $this->cekstt() == 'Dewasa'){
            return "Anda Mendapatkan Konsultasi Gratis";
        }else {
            return "Anda Tidak Mendapatkan Konsultasi Gratis";
        }
    }
}