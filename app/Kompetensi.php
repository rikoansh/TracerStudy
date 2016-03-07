<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $table = 'kompetensi';
    protected $fillable = ['id','id_users','e1_a_pengetahuan_dalam_bidang','e1_a_pengetahuan_luar_bidang','e1_a_pengetahuan_umum',
    'e1_a_keterampilan_internet',    'e1_a_keterampilan_komputer','e1_a_berpikir_kritis','e1_a_keterampilan_riset',
    'e1_a_keterampilan_berkomunikasi','e1_a_kemampuan_belajar','e1_a_kemampuan_berkomunikasi','e1_a_bekerja_tekanan','e1_a_manajemen_waktu',
    'e1_a_bekerja_mandiri','e1_a_bekerja_tim','e1_a_pecah_masalah','e1_a_negosiasi','e1_a_kemampuan_analisis','e1_a_toleransi','e1_a_adaptasi',
    'e1_a_integritas','e1_a_bekerja_orang_berbeda','e1_a_kepemimpinan','e1_a_kemampuan_tanggungjawab','e1_a_inisiatif','e1_a_manajemen_proyek',
    'e1_a_kemampuan_presentasi','e1_a_kemampuan_menulis','e1_a_kemampuan_inggris','e1_a_berpikir_kreatif',
    'e1_b_pengetahuan_dalam_bidang','e1_b_pengetahuan_luar_bidang','e1_b_pengetahuan_umum',
    'e1_b_keterampilan_internet',    'e1_b_keterampilan_komputer','e1_b_berpikir_kritis','e1_b_keterampilan_riset',
    'e1_b_keterampilan_berkomunikasi','e1_b_kemampuan_belajar','e1_b_kemampuan_berkomunikasi','e1_b_bekerja_tekanan','e1_b_manajemen_waktu',
    'e1_b_bekerja_mandiri','e1_b_bekerja_tim','e1_b_pecah_masalah','e1_b_negosiasi','e1_b_kemampuan_analisis','e1_b_toleransi','e1_b_adaptasi',
    'e1_b_integritas','e1_b_bekerja_orang_berbeda','e1_b_kepemimpinan','e1_b_kemampuan_tanggungjawab','e1_b_inisiatif','e1_b_manajemen_proyek',
    'e1_b_kemampuan_presentasi','e1_b_kemampuan_menulis','e1_b_kemampuan_inggris','e1_b_berpikir_kreatif',
    'e2_bahasa_inggris','e2_bahasa_jepang','e2_bahasa_mandarin','e2_bahasa_arab','kontribusi_bahasa_asing','e4_mulai_pekerjaan',
    'e4_pembelajaran_lanjut','e4_kinerja_tugas','e4_karier_masa_depan','e4_pengembangan_diri','e4_meningkatkan_keterampilan','e5_pengetahuan_bidang',
    'e5_pengetahuan_umum','e5_keterampilan_internal','e5_keterampilan_komputer','e5_berpikir_kritis','e5_keterampilan_riset','e5_kemampuan_belajar',
    'e5_kemampuan_berkomunikasi','e5_bekerja_di_bawah_tekanan','e5_manajemen_waktu','e5_belajar_mandiri','e5_bekerja_tim',
    'e5_kemampuan_memecahkan_masalah','e5_berpikir_kreatif'
    ];


    public function user()
	{
		return $this->belongsTo('App\User','id_users');
	}
}
