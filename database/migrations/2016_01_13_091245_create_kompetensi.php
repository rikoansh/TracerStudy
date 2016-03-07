<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKompetensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->enum('e1_a_pengetahuan_dalam_bidang',array('1','2','3','4','5'));  
            $table->enum('e1_a_pengetahuan_luar_bidang',array('1','2','3','4','5'));  
            $table->enum('e1_a_pengetahuan_umum',array('1','2','3','4','5'));  
            $table->enum('e1_a_keterampilan_internet',array('1','2','3','4','5')); 
            $table->enum('e1_a_keterampilan_komputer',array('1','2','3','4','5')); 
            $table->enum('e1_a_berpikir_kritis',array('1','2','3','4','5'));
            $table->enum('e1_a_keterampilan_riset',array('1','2','3','4','5'));
            $table->enum('e1_a_keterampilan_berkomunikasi',array('1','2','3','4','5'));
            $table->enum('e1_a_kemampuan_belajar',array('1','2','3','4','5'));
            $table->enum('e1_a_kemampuan_berkomunikasi',array('1','2','3','4','5'));
            $table->enum('e1_a_bekerja_tekanan',array('1','2','3','4','5'));
            $table->enum('e1_a_manajemen_waktu',array('1','2','3','4','5'));
            $table->enum('e1_a_bekerja_mandiri',array('1','2','3','4','5'));
            $table->enum('e1_a_bekerja_tim',array('1','2','3','4','5'));
            $table->enum('e1_a_pecah_masalah',array('1','2','3','4','5'));
            $table->enum('e1_a_negosiasi',array('1','2','3','4','5'));
            $table->enum('e1_a_kemampuan_analisis',array('1','2','3','4','5'));
            $table->enum('e1_a_toleransi',array('1','2','3','4','5'));
            $table->enum('e1_a_adaptasi',array('1','2','3','4','5'));
            $table->enum('e1_a_integritas',array('1','2','3','4','5'));
            $table->enum('e1_a_bekerja_orang_berbeda',array('1','2','3','4','5'));
            $table->enum('e1_a_kepemimpinan',array('1','2','3','4','5'));
            $table->enum('e1_a_kemampuan_tanggungjawab',array('1','2','3','4','5'));
            $table->enum('e1_a_inisiatif',array('1','2','3','4','5'));
            $table->enum('e1_a_manajemen_proyek',array('1','2','3','4','5'));
            $table->enum('e1_a_kemampuan_presentasi',array('1','2','3','4','5'));
            $table->enum('e1_a_kemampuan_menulis',array('1','2','3','4','5'));
            $table->enum('e1_a_kemampuan_inggris',array('1','2','3','4','5'));
            $table->enum('e1_a_berpikir_kreatif',array('1','2','3','4','5'));

            $table->enum('e1_b_pengetahuan_dalam_bidang',array('1','2','3','4','5'));  
            $table->enum('e1_b_pengetahuan_luar_bidang',array('1','2','3','4','5'));  
            $table->enum('e1_b_pengetahuan_umum',array('1','2','3','4','5'));  
            $table->enum('e1_b_keterampilan_internet',array('1','2','3','4','5')); 
            $table->enum('e1_b_keterampilan_komputer',array('1','2','3','4','5')); 
            $table->enum('e1_b_berpikir_kritis',array('1','2','3','4','5'));
            $table->enum('e1_b_keterampilan_riset',array('1','2','3','4','5'));
            $table->enum('e1_b_keterampilan_berkomunikasi',array('1','2','3','4','5'));
            $table->enum('e1_b_kemampuan_belajar',array('1','2','3','4','5'));
            $table->enum('e1_b_kemampuan_berkomunikasi',array('1','2','3','4','5'));
            $table->enum('e1_b_bekerja_tekanan',array('1','2','3','4','5'));
            $table->enum('e1_b_manajemen_waktu',array('1','2','3','4','5'));
            $table->enum('e1_b_bekerja_mandiri',array('1','2','3','4','5'));
            $table->enum('e1_b_bekerja_tim',array('1','2','3','4','5'));
            $table->enum('e1_b_pecah_masalah',array('1','2','3','4','5'));
            $table->enum('e1_b_negosiasi',array('1','2','3','4','5'));
            $table->enum('e1_b_kemampuan_analisis',array('1','2','3','4','5'));
            $table->enum('e1_b_toleransi',array('1','2','3','4','5'));
            $table->enum('e1_b_adaptasi',array('1','2','3','4','5'));
            $table->enum('e1_b_integritas',array('1','2','3','4','5'));
            $table->enum('e1_b_bekerja_orang_berbeda',array('1','2','3','4','5'));
            $table->enum('e1_b_kepemimpinan',array('1','2','3','4','5'));
            $table->enum('e1_b_kemampuan_tanggungjawab',array('1','2','3','4','5'));
            $table->enum('e1_b_inisiatif',array('1','2','3','4','5'));
            $table->enum('e1_b_manajemen_proyek',array('1','2','3','4','5'));
            $table->enum('e1_b_kemampuan_presentasi',array('1','2','3','4','5'));
            $table->enum('e1_b_kemampuan_menulis',array('1','2','3','4','5'));
            $table->enum('e1_b_kemampuan_inggris',array('1','2','3','4','5'));
            $table->enum('e1_b_berpikir_kreatif',array('1','2','3','4','5'));

            $table->enum('e2_bahasa_inggris',array('1','2','3','4','5'));#bahasa asing ?
            $table->enum('e2_bahasa_jepang',array('1','2','3','4','5'));
            $table->enum('e2_bahasa_mandarin',array('1','2','3','4','5'));
            $table->enum('e2_bahasa_arab',array('1','2','3','4','5'));
            $table->enum('kontribusi_bahasa_asing',array('1','2','3','4','5'));

            $table->enum('e4_mulai_pekerjaan',array('1','2','3','4','5'));
            $table->enum('e4_pembelajaran_lanjut',array('1','2','3','4','5'));
            $table->enum('e4_kinerja_tugas',array('1','2','3','4','5'));
            $table->enum('e4_karier_masa_depan',array('1','2','3','4','5'));
            $table->enum('e4_pengembangan_diri',array('1','2','3','4','5'));
            $table->enum('e4_meningkatkan_keterampilan',array('1','2','3','4','5'));

            $table->enum('e5_pengetahuan_bidang',array('1','2','3','4','5'));
            $table->enum('e5_pengetahuan_umum',array('1','2','3','4','5'));
            $table->enum('e5_keterampilan_internal',array('1','2','3','4','5'));
            $table->enum('e5_keterampilan_komputer',array('1','2','3','4','5'));
            $table->enum('e5_berpikir_kritis',array('1','2','3','4','5'));
            $table->enum('e5_keterampilan_riset',array('1','2','3','4','5'));
            $table->enum('e5_kemampuan_belajar',array('1','2','3','4','5')); #3x sama ?
            $table->enum('e5_kemampuan_berkomunikasi',array('1','2','3','4','5')); #3x jua
            $table->enum('e5_bekerja_di_bawah_tekanan',array('1','2','3','4','5'));
            $table->enum('e5_manajemen_waktu',array('1','2','3','4','5'));
            $table->enum('e5_belajar_mandiri',array('1','2','3','4','5'));
            $table->enum('e5_bekerja_tim',array('1','2','3','4','5'));
            $table->enum('e5_kemampuan_memecahkan_masalah',array('1','2','3','4','5'));
            $table->enum('e5_berpikir_kreatif',array('1','2','3','4','5'));
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
        Schema::drop('kompetensi');
    }
}
