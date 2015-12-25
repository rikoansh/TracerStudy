<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory('App\Role', 'admin')->create();
        factory('App\Role', 'mahasiswa')->create();
        factory('App\Role', 'akademik')->create();
        factory('App\Role', 'rektor')->create();
        factory('App\Role', 'dekan')->create();
        factory('App\Role', 'fakultas')->create();
        factory('App\Role', 'prodi')->create();
        factory('App\User', 'admin')->create();
        factory('App\User', 'mahasiswa')->create();
        factory('App\User', 'akademik')->create();
        factory('App\User', 'rektor')->create();
        factory('App\User', 'dekan')->create();
        factory('App\User', 'fakultas')->create();
        factory('App\User', 'prodi')->create();

        factory('App\User', 'user', 10)->create();
    }
}
