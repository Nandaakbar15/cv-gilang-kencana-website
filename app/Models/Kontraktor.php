<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontraktor extends Model
{
    protected $table = 'tbl_kontraktor';
    protected $primaryKey = "id_kontraktor";
    protected $fillable = ["nama", "alamat", "no_telp", "email","specialist", "foto"];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    use HasFactory;
}
