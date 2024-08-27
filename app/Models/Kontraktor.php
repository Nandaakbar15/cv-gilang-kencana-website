<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontraktor extends Model
{
    protected $table = 'tbl_kontraktor';
    protected $fillable = ["nama", "alamat", "no_telp", "specialist", "foto"];
    use HasFactory;
}
