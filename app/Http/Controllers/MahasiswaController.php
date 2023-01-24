<?php

namespace App\Http\Controllers;

use App\Models\DataDosbing;
use App\Models\DataSiswa;
use App\Models\DataSMK;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

   
    
    public function formPLP()
    {
        // $data['datasmk'] = $this->DataSiswa->getdata();
        $datasmk = DataSMK::all();
       
        return view('mahasiswa.createplp', compact('datasmk'));
    }
    public function infopenerimaan()
    {
        $datamhs = DataSiswa::all();
        $datadosbing = DataDosbing::all();
        return view('mahasiswa.infopenerimaan',compact('datamhs','datadosbing'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        DataSiswa::create([
            'namasmk'=> $request->namasmk,
            'npsn' => $request->npsn,
            'akreditasi'=> $request->akreditasi,
            'jurusan'=> $request->jurusan,
            'alamat' => $request->alamat,
            
        ]);
        return redirect('/datasmk');

    }



    public function index()
    {
        $datamhs =  DataSiswa::where('verifikasi', 'verifikasi')->paginate(5);
        // return view('dashboard', compact('datamhs'));
        return view('mahasiswa.infopenerimaan', compact('datamhs'));

    }
}
