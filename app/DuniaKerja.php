<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DuniaKerja extends Model
{
     protected $table = 'dunia_kerja';
    protected $fillable = ['id','id_users','kapan_mencari_pekerjaan','pekerjaan_setelah_lulus','persepsi_perusahaan',
    'perusahaan_dilamar','waktu_pekerjaan_pertama','banyak_perusahaan_merespon','pernah_mengambil_kursus','jenis_kursus_diambil'
    'alasan_tidak_bekerja','c12_memulai_pekerjaan','c12_mendapatkan_pekerjaan','c12_memenuhi_persyaratan',
    'c12_meningkatkan_keterampilan','c12_pengembangan_diri','c12_karier_masadepan','meningkatkan_kompetensi'];

    public function user()
	{
		return $this->belongsTo('App\User','id_users');
	}
}
