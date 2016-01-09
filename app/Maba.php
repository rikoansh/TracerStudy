<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maba extends Model
{
    protected $table = 'maba';
    protected $fillable = ['nim','nama','gender','email','lahir','kota','provinsi','alamat',
    'no_hp','prodi','fakultas','status'];
}
