<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelDuniaKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dunia_kerja', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->string('kapan_mencari_pekerjaan');
            $table->enum('pekerjaan_setelah_lulus',array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'));
            $table->enum('persepsi_perusahaan',array('1','2','3','4','5','6','7','8','9','10','11','12','13'));
            $table->string('perusahaan_dilamar');
            $table->string('waktu_pekerjaan_pertama');
            $table->string('banyak_perusahaan_merespon');
            $table->string('alasan_tidak_bekerja');
            $table->enum('pernah_mengambil_kursus',array('ya','tidak'));
            $table->enum('jenis_kursus_diambil',array('1','2','3','4','5','6','7','8'));
            $table->enum('c12_memulai_pekerjaan',array('1','2','3','4','5'));   
            $table->enum('c12_mendapatkan_pekerjaan',array('1','2','3','4','5'));   
            $table->enum('c12_memenuhi_persyaratan',array('1','2','3','4','5')); 
            $table->enum('c12_meningkatkan_keterampilan',array('1','2','3','4','5')); 
            $table->enum('c12_pengembangan_diri',array('1','2','3','4','5')); 
            $table->enum('c12_karier_masadepan',array('1','2','3','4','5'));           
            $table->enum('meningkatkan_kompetensi',array('1','2','3','4','5')); 
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
        Schema::drop('dunia_kerja');
    }
}
