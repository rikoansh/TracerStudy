<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelMahasiswabaru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maba', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->string('nama');
            $table->enum('gender',array('laki','perempuan'));
            $table->string('lahir');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('prodi');
            $table->string('fakultas');
            $table->enum('status',array('belum','selesai'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('maba');
    }
}
