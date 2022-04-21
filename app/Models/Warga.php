<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'warga';
    // fillable berguna ketika ada fill yang tidak harus diisi dan menyertakan pengecualian di controller dengan except
    // protected $fillable = [
    //     'nama',
    //     'nik',
    //     'no_kk',
    //     'jenis_kelamin',
    //     'alamat'

    // ];

    //ini berfungsi ketika semua fil harus di isi 
    protected $guarded = [];
}