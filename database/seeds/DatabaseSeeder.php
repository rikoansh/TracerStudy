<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement("SET foreign_key_checks = 0");

        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();
        DB::table('users')->truncate();
        DB::table('berita')->truncate();
        DB::table('kontak')->truncate();

        $this->call(UserTableSeeder::class);
        /*$this->call(BeritaTableSeeder::class);*/
        $this->call(KontakTableSeeder::class);

        $admin = App\User::find(1);
        $admin->attachRole(1);
        $mahasiswa = App\User::find(2);
        $mahasiswa->attachRole(2);
        
        $akademik = App\User::find(3);
        $akademik->attachRole(3);

        $rektor = App\User::find(4);
        $rektor->attachRole(4);

        $dekan = App\User::find(5);
        $dekan->attachRole(5);

        $fakultas = App\User::find(6);
        $fakultas->attachRole(6);

        $prodi = App\User::find(7);
        $prodi->attachRole(7);

        Model::reguard();
    }
}
