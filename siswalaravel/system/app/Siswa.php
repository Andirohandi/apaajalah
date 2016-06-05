<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id_siswa";
    protected $fillable = ['nama','alamat','id_kelas','nama'];
}
