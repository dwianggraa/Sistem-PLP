<?php

namespace App\Http\Controllers;

use App\Models\DataDosbing;
use App\Models\DataSiswa;
use Illuminate\Http\ResponseTrait;
use Illuminate\RESTful\Resiurce;


class Dospim extends Controller
{
    use ResponseTrait;

    public function show($id = null){
        $datadospim = new DataSiswa();
        $data = $datadospim->find($id);

        return $this->respond($data);
    }
}
