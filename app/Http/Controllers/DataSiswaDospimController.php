<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use \App\Models\DataSiswaPembimbing;
use \App\Models\DataDosbing;
use App\Models\DataGuruPamong;
use Illuminate\Http\Request;

class DataSiswaDospimController extends Controller
{
    public function formPLP()
    {
        $datamhs = DataSiswa::all();
        $datadosbing = DataDosbing::findorfail($id);
        return view('koorprodi.edit_formplp', compact('datadospim'));
    }

    public function edit($id)
    {
        $datamhs = DataSiswa::findorfail($id);
        $datadosbing = DataDosbing::findorfail($id);
        return view('koorprodi.edit_formplp', compact('datadospim'));
    }

    public function update(Request $request, $id)
    {
        $datamhs = DataSiswa::findorfail($id);
        $datamhs->update($request->all());
        return redirect('/datadospim');
    }



    public function indexKoorProdi()
    {
        $datamhs =  DataSiswa::latest();
        if(request('search')){
            $datamhs->where('nama', 'like', '%'. request('search') . '%');
        }
        
        return view('koorprodi.form_plp')->with([

            'datamhs' => $datamhs->paginate(5)
            
        ]);
    }

    //verifikasi pimpinan smk
    public function editDataMHSPLP($id)
    {
        $datamhs = DataSiswa::findorfail($id);
        $datagurupamong = DataGuruPamong::all();
        return view('pimpinansmk.edit-datamhsplp', compact('datamhs', 'datagurupamong'));
    }

    public function updateDataMHSPLP(Request $request, $id)
    {
        $datamhs = DataSiswa::findorfail($id);
        $datamhs->update($request->all());
        // dd($datamhs);
        return redirect('/verifikasidataplp');
    }

    //verifikasi pimpinan prodi
    public function updateData(Request $request, $id)
    {
        $datamhs = DataSiswa::find($id);
        $datamhs->update($request->all());
        // dd($datamhs);
        return redirect('/dashboard');
    }

    public function editData($id)
    {
        $datamhs = DataSiswa::findorfail($id);
        $datadosbing = DataDosbing::all();
        return view('pimpinanprodi.edit-formplp', compact('datamhs', 'datadosbing'));
    }

    public function storeData(Request $request)
    {
        DataSiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'smk' => $request->smk,
            'keminatan' => $request->keminatan,
            'dospim' => $request->dospim,
            'telepon' => $request->telepon,
            'verifikasi' => $request->verifikasi,

        ]);
    }
}
