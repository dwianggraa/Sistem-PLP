<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'smk',
        'keminatan',
        'dospim',
        'telepon',
        'gurupamong',
        'telepongurupamong',
        'verifikasi'
    ];

    public function getdata(){
        $query = $this->db->query("SELECT * FROM data_s_m_k_s ORDER BY namasmk ASC");

        return $query->result();
    }
}
