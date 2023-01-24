<?php

namespace App\Http\Controllers;

use App\Models\DataSMK;
use Illuminate\Http\Request;

class DataSMKController extends Controller
{
    public function index()
    {
        $data_smk =  DataSMK::latest();
        if(request('search')){
            $data_smk->where('nama', 'like', '%'. request('search') . '%');
        }
        
        return view('admin.datasmk')->with([

            'data_smk' => $data_smk->paginate(10)
            
        ]);
    }

  

    public function createdatasmk()
    {
        return view('admin.createdatasmk');
    }

    public function edit($id){
        $data_smk = DataSMK::findorfail($id);
        return view('admin.editdatasmk', compact('data_smk'));
        
    }

    public function update(Request $request,$id){
        $data_smk = DataSMK::findorfail($id);
        $data_smk->update($request->all());
        return redirect('/datasmk');

    }


    public function store(Request $request)
    {
        // dd($request->all());
        DataSMK::create([
            'namasmk'=> $request->namasmk,
            'npsn' => $request->npsn,
            'akreditasi'=> $request->akreditasi,
            'jurusan'=> $request->jurusan,
            'alamat' => $request->alamat,
            
        ]);
        return redirect('/datasmk');
    }

    public function editdatasmk()
    {
        return view('admin.editdatasmk');
    }

    public function destroy($id){
        $data_smk = DataSMK::find($id);
        $data_smk->delete();
        return back();
    }
}
