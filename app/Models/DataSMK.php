<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSMK extends Model
{
    protected $fillable = [
        'namasmk',
        'npsn',
        'akreditasi',
        'alamat',
        'jurusan'
    ];
}
