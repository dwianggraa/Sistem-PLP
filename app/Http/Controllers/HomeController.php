<?php

namespace App\Http\Controllers;
use App\Models\DataSiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $datamhs =  DataSiswa::latest();
               // return view('mahasiswa.infopenerimaan', compact('datamhs'));
        if(request('search')){
            $datamhs->where('nama', 'like', '%'. request('search') . '%');
        }
        
        return view('dashboard', compact('datamhs'))->with([

            'datamhs' => $datamhs->paginate(5)
            
        ]);
    }
}
