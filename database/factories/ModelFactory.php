<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*$factory->defineAs(App\User::class, 'admin',function (Faker\Generator $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@localhost.com',
        'password' => bcrypt('admin'),
        'remember_token' => str_random(10),
    ];
});
*/

$factory->defineAs(App\Role::class, 'admin', function (Faker\Generator $faker) {
    return [
        'name' => 'admin',
        'display_name' => 'Administrator',
        'description' => 'Admin Utama Website',
    ];
});

$factory->defineAs(App\Role::class, 'mahasiswa', function (Faker\Generator $faker) {
    return [
        'name' => 'mahasiswa',
        'display_name' => 'Mahasiswa',
        'description' => 'Pengguna Mahasiswa',
    ];
});

$factory->defineAs(App\Role::class, 'akademik', function (Faker\Generator $faker) {
    return [
        'name' => 'akademik',
        'display_name' => 'Akademik',
        'description' => 'Pengguna Akademik',
    ];
});

$factory->defineAs(App\Role::class, 'rektor', function (Faker\Generator $faker) {
    return [
        'name' => 'rektor',
        'display_name' => 'Rektor',
        'description' => 'Pengguna Rektor',
    ];
});

$factory->defineAs(App\Role::class, 'dekan', function (Faker\Generator $faker) {
    return [
        'name' => 'dekan',
        'display_name' => 'Dekan',
        'description' => 'Pengguna Dekan',
    ];
});

$factory->defineAs(App\Role::class, 'kemahasiswaan', function (Faker\Generator $faker) {
    return [
        'name' => 'kemahasiswaan',
        'display_name' => 'Kemahasiswaan',
        'description' => 'Pengguna Kemahasiswaan',
    ];
});

$factory->defineAs(App\Role::class, 'prodi', function (Faker\Generator $faker) {
    return [
        'name' => 'prodi',
        'display_name' => 'Prodi',
        'description' => 'Pengguna Prodi',
    ];
});

$factory->defineAs(App\User::class, 'admin', function (Faker\Generator $faker) {
    return [
        'username' => 'admin',
        'email' => 'admin@localhost.com',
        'password' => bcrypt('admin'),
    ];
});

$factory->defineAs(App\User::class, 'mahasiswa', function (Faker\Generator $faker) {
    return [
        'username' => 'user',
        'email' => 'user@localhost.com',
        'password' => bcrypt('user'),
    ];
});

$factory->defineAs(App\User::class, 'akademik', function (Faker\Generator $faker) {
    return [
        'username' => 'akademik',
         'email' => 'Akademik@localhost.com',
        'password' => bcrypt('akademik'),
    ];
});

$factory->defineAs(App\User::class, 'rektor', function (Faker\Generator $faker) {
    return [
        'username' => 'rektor',
        'email' => 'rektor@localhost.com',
        'password' => bcrypt('rektor'),
    ];
});

$factory->defineAs(App\User::class, 'dekan', function (Faker\Generator $faker) {
    return [
        'username' => 'dekan',
        'email' => 'Dekan@localhost.com',
        'password' => bcrypt('dekan'),
    ];
});

$factory->defineAs(App\User::class, 'prodi', function (Faker\Generator $faker) {
    return [
        'username' => 'prodi',
        'email' => 'prodi@localhost.com',
        'password' => bcrypt('prodi'),
    ];
});

$factory->defineAs(App\User::class, 'kemahasiswaan', function (Faker\Generator $faker) {
    return [
        'username' => 'kemahasiswaan',
        'email' => 'kemahasiswaan@localhost.com',
        'password' => bcrypt('kemahasiswaan'),
    ];
});

$factory->defineAs(App\User::class, 'user', function (Faker\Generator $faker) {
    return [
        'username' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt($faker->unique()->domainWord),
    ];
});

/*$factory->defineAs(App\User::class, 'mahasiswa',function (Faker\Generator $faker) {
    return [
        'name' => 'user',
        'email' => 'user@localhost.com',
        'password' => bcrypt('user'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\User::class, function (Faker\Generator $faker) {
    $status = ['Mahasiswa','Admin'];
    $s = $status[array_rand($status)];
    return [

        'name' => $faker->name,
        'email' => $faker->email,
        'status' => $s,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
*/

$factory->define(App\Berita::class, function (Faker\Generator $faker) {
    return [
        'judul' => ucfirst($faker->word),
        'slug' => $faker->slug,
        'isi' => $faker->text($maxNbChars=1000),
        'no' => $faker->numberBetween($min = 1, $max = 11)
    ];
});

$factory->define(App\Kontak::class, function (Faker\Generator $faker) {
    return [
        'nim' => $faker->name,
        'slug' => $faker->slug,
        'isi' => $faker->text($maxNbChars=1000),
        'no' => $faker->numberBetween($min = 1, $max = 11)
    ];
});