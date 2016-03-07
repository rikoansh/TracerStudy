<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelKarakteristik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karakteristik', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->enum('lulus_tepat_waktu',array('ya','tidak'));
            $table->string('tempat_tinggal_kuliah');
            $table->enum('anggota_organisasi',array('ya','tidak'));
            $table->enum('aktif_organisasi',array('1','2','3','4','5'));
            $table->enum('pendidikan_tambahan',array('ya','tidak'));
            $table->enum('b8_perkuliahan',array('1','2','3','4','5'));
            $table->enum('b8_demonstrasi',array('1','2','3','4','5'));
            $table->enum('b8_partisipasi',array('1','2','3','4','5'));
            $table->enum('b8_magang',array('1','2','3','4','5'));         
            $table->enum('b8_pratikum',array('1','2','3','4','5'));
            $table->enum('b8_diskusi',array('1','2','3','4','5'));
            $table->enum('b9_kesempatan_interaksi',array('1','2','3','4','5'));
            $table->enum('b9_pembimbing_akademik',array('1','2','3','4','5'));
            $table->enum('b9_kondisi_mengajar',array('1','2','3','4','5'));
            $table->enum('b9_kesempatan_jejaring_ilmiah',array('1','2','3','4','5'));
            $table->enum('b10_perpustakaan',array('1','2','3','4','5'));
            $table->enum('b10_tik',array('1','2','3','4','5'));
            $table->enum('b10_modul_belajar',array('1','2','3','4','5'));
            $table->enum('b10_ruang_belajar',array('1','2','3','4','5'));
            $table->enum('b10_laboratorium',array('1','2','3','4','5'));
            $table->enum('b10_variasi_matakuliah',array('1','2','3','4','5'));
            $table->enum('b10_akomodasi',array('1','2','3','4','5'));
            $table->enum('b10_kantin',array('1','2','3','4','5'));
            $table->enum('b10_pkm',array('1','2','3','4','5'));
            $table->enum('b10_fasilitas_kesehatan',array('1','2','3','4','5'));
            $table->enum('b11_pembelajaran',array('1','2','3','4','5'));
            $table->enum('b11_magang',array('1','2','3','4','5'));
            $table->enum('b11_pengabdian_masyarakat',array('1','2','3','4','5'));
            $table->enum('b11_pelaksanaa_riset',array('1','2','3','4','5'));
            $table->enum('b11_organisasi_kemahasiswaan',array('1','2','3','4','5'));
            $table->enum('b11_kegiatan_ekstra_kurikuler',array('1','2','3','4','5'));
            $table->enum('b11_rekreasi_olahraga',array('1','2','3','4','5'));

            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('karakteristik');
    }
}
