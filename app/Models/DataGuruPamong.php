<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGuruPamong extends Model
{
    protected $fillable = [
        'nama',
        'nik',
        'email',
        'telepongurupamong',
    ];
}
