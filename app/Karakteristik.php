<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karakteristik extends Model
{
    protected $table = 'karakteristik';
    protected $fillable = ['id','id_users','lulus_tepat_waktu','tempat_tinggal_kuliah','anggota_organisasi','pendidikan_tambahan'
    ,'b8_perkuliahan','b8_demonstrasi','b8_partisipasi','b8_magang','b8_pratikum','b8_diskusi',
    'b9_kesempatan_interaksi','b9_pembimbing_akademik','b9_kondisi_mengajar','b9_kesempatan_jejaring_ilmiah','b10_perpustakaan','b10_tik',
    'b10_modul_belajar','b10_ruang_belajar','b10_laboratorium','b10_variasi_matakuliah','b10_akomodasi','b10_kantin','b10_pkm',
    'b10_fasilitas_kesehatan','b11_pembelajaran','b11_magang','b11_pengabdian_masyarakat','b11_pelaksanaa_riset','b11_organisasi_kemahasiswaan',
    'b11_kegiatan_ekstra_kurikuler','b11_rekreasi_olahraga'
    ];

    public function user()
	{
		return $this->belongsTo('App\User','id_users');
	}

}
