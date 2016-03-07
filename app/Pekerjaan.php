<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
	protected $table = 'pekerjaan';
    protected $fillable = ['id','id_users','bekerja_tidak','aktif_mencari_pekerjaan','perusahaan_tempat_bekerja',
    'alasan_tidak_bekerja',    'tingkat_kiprat_perusahaan','bidang_pekerjaan','hubungan_studi_dengan_pekerjaan','tingkat_pendidikan'
    'pendidikan_tidak_sesuai_pekerjaan','perjalanan_luar_negeri'];


    public function user()
	{
		return $this->belongsTo('App\User','id_users');
	}
}
