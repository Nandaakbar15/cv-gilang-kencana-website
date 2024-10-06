<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'tbl_contact';
    protected $primaryKey = 'id_kontak';
    protected $fillable = ['nama', 'alamat', 'email', 'no_telp', 'gambar', 'pekerjaan'];

}
