<?php

namespace App\Http\Controllers;
use \App\Models\DataSiswa;
use App\Models\DataSMK;
use Illuminate\Http\Request;
use Alert;
use App\Models\DataDosbing;
use App\Models\DataGuruPamong;

class DataSiswaController extends Controller
{


    public function formPLP()
    {
        
        $datasmk = DataSMK::all();
        return view('mahasiswa.createplp', compact('datasmk'));
    }

    public function store(Request $request)
    {
        DataSiswa::create([
            'nama'=> $request->nama,
            'nim' => $request->nim,
            'smk'=> $request->smk,
            'keminatan'=> $request->keminatan,
            'dospim'=> $request->dospim,
            'telepon'=> $request->telepon,
            'verifikasi'=> $request->verifikasi,
            
        ]);
        Alert::success('Data berhasil disimpan');
        return redirect('/dashboard');
        ;
    }

    public function index()
    {
        $datamhs =  DataSiswa::latest();
        
        if(request('search')){
            $datamhs->where('nama', 'like', '%'. request('search') . '%');
        }
        
        return view('admin.data_mhs')->with([

            'datamhs' => $datamhs->paginate(5)
            
        ]);
    }
    //koorprodi

    public function editKoorProdi($id){
        $datamhs = DataSiswa::findorfail($id);
        $datadosbing = DataDosbing::all();
        return view('koorprodi.edit_formplp', compact('datamhs','datadosbing'));
        
    }

    public function updateKoorProdi(Request $request,$id){
        $datamhs = DataSiswa::findorfail($id);
        $datamhs->update($request->all());
        //dd($datamhs);
        return redirect('/datamhs');      
    }

    public function destroyKoorProdi($id){
        $datamhs = DataSiswa::find($id);
        $datamhs->delete();
        return back();
    }
  
    public function indexKoorSMK()
    {
        //'table'=>'value','table'=>'value']
        $datamhs =  DataSiswa::where([
            'smk' => 'SMKN 4 Malang',
            'verifikasi' => 'Verifikasi'])->paginate(5);
        // return view('dashboard', compact('datamhs'));
        return view('koorsmk.infodatasiswa', compact('datamhs'));

    }

    public function editkoorsmk($id){
        $datamhs = DataSiswa::findorfail($id);
        $datagurupamong = DataGuruPamong::all();
        return view('koorsmk.edit_infodatasiswa', compact('datamhs','datagurupamong'));
        
    }

    public function updatekoorsmk(Request $request,$id){
        $datamhs = DataSiswa::findorfail($id);
        $datamhs->update($request->all());
        //dd($datamhs);
        return redirect('/datamahasiswa');      
    }

    public function indexpimpinanSMK()
    {
        //'table'=>'value','table'=>'value']
        $datamhs =  DataSiswa::where([
            'smk'=>'SMKN 4 Malang'])->paginate(5);
        return view('pimpinansmk.dashboardpimpinan', compact('datamhs'));

    }
}

    
    
    
