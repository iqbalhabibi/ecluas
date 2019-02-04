<?php

namespace Ibay;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
  protected $table = 'tabel_siswa';
  protected $primaryKey = 'id_siswa';
  public $timestamps = true;
  protected $fillable = [
    'nama_lengkap','foto','jk','id_kelas'
  ];
  public function kelas()
  {
    return $this->hasOne('\Ibay\KelasModel','id_kelas','id_kelas');
  }
}
