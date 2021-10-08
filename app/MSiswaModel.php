<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSiswaModel extends Model
{
    //
    protected $primaryKey = 'id_siswa';
    protected $table = "user_siswa";
    protected $fillable = ["nama","jenis_kelamin","sekolah","jurusan","alamat","nisn","kota","no_telp","email","password","hak_akses"];
    // protected $guarded = ['usrid','created_at','updated_at'];

    public function getAuthPassword() {
       return $this->user_siswa;
    }
}
