<?php

namespace App\Http\Controllers;
use Alert;

use App\Models\DataDosbing;
use Illuminate\Http\Request;

class DataDosBingController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function datadosbing()
    {
        $datadosbing =  DataDosbing::latest();
        if(request('search')){
            $datadosbing->where('nama', 'like', '%'. request('search') . '%');
        }
        
        return view('koorprodi.data_dosbing')->with([

            'datadosbing' => $datadosbing->paginate(5)
            
        ]);
    }

    public function createdatadosbing()
    {
        return view('koorprodi.createdatadosbing');
    }
    public function edit($id){
        $datadosbing = DataDosbing::findorfail($id);
        return view('koorprodi.editdatadosbing', compact('datadosbing'));
        
    }

    public function update(Request $request,$id){
        $datadosbing = DataDosbing::findorfail($id);
        $datadosbing->update($request->all());
        return redirect('/datadosbing');

    }


    public function store(Request $request)
    {
        // dd($request->all());
        DataDosbing::create([
            'nama'=> $request->nama,
            'nik' => $request->nik,
            'email'=> $request->email,
            'telepon'=> $request->telepon,
            
        ]);
        Alert::success('Data berhasil disimpan', 'Success Message');
        return redirect('/datadosbing');

    }

    public function editdatadosbing()
    {
        return view('koorprodi.editdatadosbing');
    }

    public function destroy($id){
        $datadosbing = DataDosbing::find($id);
        $datadosbing->delete();
        return back();
    }

}
