<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['id','id_users','lulus_tepat_waktu','jenis_sekolah','nama_sma','lokasi_sma','jurusan_waktu_sma','tahun_lulus_sma',
    'status_pernikahan','bekerja_sebelum_kuliah','jenis_pekerjaan','lama_bekerja','aktivitas_setelah_sma','pendidikan_ayah','pendidikan_ibu'];

    public function user()
	{
		return $this->belongsTo('App\User','id_users');
	}
}
