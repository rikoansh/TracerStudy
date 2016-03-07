<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelPekerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->enum('bekerja_tidak',array('ya','tidak'));  
            $table->enum('aktif_mencari_pekerjaan',array('1','2','3','4','5')); 
            $table->string('perusahaan_tempat_bekerja');
            $table->string('alasan_tidak_bekerja');
            $table->enum('tingkat_kiprat_perusahaan',array('1','2','3'));
            $table->enum('bidang_pekerjaan',array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20',
                '21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44',
                '45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68',
                '69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87'));
            $table->enum('hubungan_studi_dengan_pekerjaan',array('1','2','3','4','5'));   
            $table->enum('tingkat_pendidikan',array('1','2','3','4'));   
            $table->enum('pendidikan_tidak_sesuai_pekerjaan',array('1','2','3','4','5','6','7','8','9','10','11','12'));
            $table->enum('perjalanan_luar_negeri',array('ya','tidak')); 
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
        Schema::drop('pekerjaan');
    }
}
