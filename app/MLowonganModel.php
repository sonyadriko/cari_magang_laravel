<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MLowonganModel extends Model
{
    protected $primaryKey = 'id_lowongan';
    protected $table = "tb_lowongan";
    protected $fillable = ["id_bos","judul","jurusan","detail","alamat","kota","tanggal","kuota","bukti_transfer","status","exp"];
}
