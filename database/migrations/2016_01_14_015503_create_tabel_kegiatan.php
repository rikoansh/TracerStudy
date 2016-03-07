<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->enum('lulus_tepat_waktu',array('ya','tidak'));
            $table->string('jenis_sekolah');
            $table->string('nama_sma');
            $table->string('lokasi_sma');
            $table->string('jurusan_waktu_sma');
            $table->string('tahun_lulus_sma');
            $table->enum('status_pernikahan',array('wni','wna'));
            $table->enum('bekerja_sebelum_kuliah',array('ya','tidak'));
            $table->string('jenis_pekerjaan');           
            $table->string('lama_bekerja');
            $table->string('aktivitas_setelah_sma');
            $table->string('pendidikan_ayah');
            $table->string('pendidikan_ibu');

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
        Schema::drop('kegiatan');
    }
}
