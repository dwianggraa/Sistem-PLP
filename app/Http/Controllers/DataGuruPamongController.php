<?php

namespace App\Http\Controllers;

use Alert;

use App\Models\DataGuruPamong;
use Illuminate\Http\Request;

class DataGuruPamongController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function datagurupamong()
    {
        $datagurupamong = DataGuruPamong::latest();
        if (request('search')) {
            $datagurupamong->where('nama', 'like', '%' . request('search') . '%');
        }

        return view('koorsmk.data_gurupamong')->with([

            'datagurupamong' => $datagurupamong->paginate(5)

        ]);
    }

    public function createdatagurupamong()
    {
        return view('koorsmk.createdatagurupamong');
    }
    public function edit($id)
    {
        $datagurupamong = DataGuruPamong::findorfail($id);
        return view('koorsmk.editdatagurupamong', compact('datagurupamong'));
    }

    public function update(Request $request, $id)
    {
        $datagurupamong = DataGuruPamong::findorfail($id);
        $datagurupamong->update($request->all());
        return redirect('/datagurupamong');
    }


    public function store(Request $request)
    {
        DataGuruPamong::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'email' => $request->email,
            'telepongurupamong' => $request->telepongurupamong,

        ]);
        Alert::success('Data berhasil disimpan');
        return redirect('/datagurupamong');
    }

    public function editdatagurupamong()
    {
        return view('koorsmk.editdatagurupamong');
    }

    public function destroy($id)
    {
        $datagurupamong = DataGuruPamong::find($id);
        $datagurupamong->delete();
        return back();
    }
}
