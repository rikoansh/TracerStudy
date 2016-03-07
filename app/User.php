<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, EntrustUserTrait;
  // add this trait to your user model
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function Karakteristik()
    {
        return $this->hasMany('App\Karakteristik','id_users');
    }

    public function Kegiatan()
    {
        return $this->hasMany('App\Kegiatan','id_users');
    }

    public function DuniaKerja()
    {
        return $this->hasMany('App\DuniaKerja','id_users');
    }

    public function Pekerjaan()
    {
        return $this->hasMany('App\Pekerjaan','id_users');
    }

    public function Kompetensi()
    {
        return $this->hasMany('App\Kompetensi','id_users');
    }
}