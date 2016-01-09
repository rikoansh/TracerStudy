<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'maba';
    protected $fillable = ['nim','nama','gender','email','lahir','kota','provinsi','alamat',
    'no_hp','tahun_lulus','semester','ipk','prodi','fakultas','status'];
}
