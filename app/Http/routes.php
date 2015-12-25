<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [
            'as' => '/', 'uses' => 'BeritaController@home'
        ]);

Route::group(['as' => 'home::', 'middleware' => ['role:mahasiswa']], function () {
        Route::get('home/tracerstudy', [
                'as' => 'tracerstudy', 'uses' => 'BeritaController@tracerstudy'
            ]);

        Route::get('home/berita', [
                'as' => 'beritaAlumni', 'uses' => 'BeritaController@berita'
            ]);


        Route::get('home/komentar', [
                'as' => 'komentarAlumni', 'uses' => 'BeritaController@komentar'
            ]);


        Route::get('home/laporan', [
                'as' => 'laporanAlumni', 'uses' => 'BeritaController@laporan'
            ]);

        Route::get('home/setting', [
                'as' => 'settingAlumni', 'uses' => 'BeritaController@setting'
            ]);
});


Route::group(['as' => 'akademik::', 'middleware' => ['role:akademik']], function () {
        Route::get('dashboardAkademik', [
                'as' => 'homeAkademik', 'uses' => 'AkademikController@home'
            ]);

        Route::get('dashboardAkademik/usermaba', [
                'as' => 'user', 'uses' => 'AkademikController@user'
            ]);

        Route::get('dashboardAkademik/berita', [
                'as' => 'berita', 'uses' => 'AkademikController@berita'
            ]);

        Route::get('dashboardAkademik/laporan', [
                'as' => 'laporan', 'uses' => 'AkademikController@laporan'
            ]);
        
        Route::get('dashboardAkademik/hasil', [
                'as' => 'hasil', 'uses' => 'AkademikController@hasil'
            ]);
});


Route::group(['as' => 'kemahasiswaan::', 'middleware' => ['role:kemahasiswaan']], function () {
        Route::get('dashboardKemahasiswaan', [
                'as' => 'homeKemahasiswaan', 'uses' => 'KemahasiswaanController@home'
            ]);

        Route::get('dashboardKemahasiswaan/usermaba', [
                'as' => 'user', 'uses' => 'KemahasiswaanController@user'
            ]);

        Route::get('dashboardKemahasiswaan/berita', [
                'as' => 'berita', 'uses' => 'KemahasiswaanController@berita'
            ]);

        Route::get('dashboardKemahasiswaank/useralumni', [
                'as' => 'useralumni', 'uses' => 'KemahasiswaanController@useralumni'
            ]);
        
        Route::get('dashboardKemahasiswaan/hasil', [
                'as' => 'hasil', 'uses' => 'KemahasiswaanController@hasil'
            ]);
});

Route::group(['as' => 'rektor::', 'middleware' => ['role:rektor']], function () {
        Route::get('rektor/home', [
                'as' => 'homeRektor', 'uses' => 'RektorController@home'
            ]);

        Route::get('rektor/tracerstudy', [
                'as' => 'tracerstudy', 'uses' => 'RektorController@tracerstudy'
            ]);

        Route::get('rektor/laporan', [
                'as' => 'laporan', 'uses' => 'RektorController@laporan'
            ]);

        Route::get('rektor/setting', [
                'as' => 'setting', 'uses' => 'RektorController@settingRektor'
            ]);
});

Route::group(['as' => 'dekan::', 'middleware' => ['role:dekan']], function () {
         Route::get('dekan/home', [
                'as' => 'homeRektor', 'uses' => 'DekanController@home'
            ]);

        Route::get('dekan/tracerstudy', [
                'as' => 'tracerstudy', 'uses' => 'DekanController@tracerstudy'
            ]);

        Route::get('dekan/laporan', [
                'as' => 'laporan', 'uses' => 'DekanController@laporan'
            ]);

        Route::get('dekan/setting', [
                'as' => 'setting', 'uses' => 'DekanController@settingRektor'
            ]);
});

Route::group(['as' => 'prodi::', 'middleware' => ['role:prodi']], function () {
        Route::get('dashboardProdi', [
                'as' => 'homeProdi', 'uses' => 'ProdiController@home'
            ]);
});

Route::group(['as' => 'admin::', 'middleware' => ['role:admin']], function () {

        Route::get('admin/tes', [
            'as' => 'tes', 'uses' => 'AdminController@tes'
        ]);

        Route::get('admin/setting', [
            'as' => 'setting', 'uses' => 'AdminController@setting']);

        Route::patch('admin/setting', [
            'as' => 'updatesetting', 'uses' => 'AdminController@updatesetting']);

        #user
        Route::get('admin/user', [
            'as' => 'user', 'uses' => 'AdminController@user']);

        Route::get('admin/user/buat', [
            'as' => 'tambah_user', 'uses' => 'AdminController@buat_user']);

        Route::post('admin/user/daftar', [
            'as' => 'simpan_user', 'uses' => 'AdminController@simpanuser']);

        Route::get('admin/user/edit/{username}', [
            'as' => 'ubah_user', 'uses' => 'AdminController@ubah_user']);

        Route::patch('admin/user/edit/{username}', [
            'as' => 'update_user', 'uses' => 'AdminController@update_user']);

        Route::delete('admin/user/{username}', [
            'as' => 'hapus_user', 'uses' => 'AdminController@hapus_user']);
        //METHOD NOT ALLOWED D SINI


        #berita
        Route::get('admin/berita', [
            'as' => 'berita', 'uses' => 'AdminController@berita'
        ]);
        Route::get('admin/berita/buat', [
            'as' => 'tambah_berita', 'uses' => 'AdminController@buat_berita']);

        Route::post('admin/berita/daftar', [
            'as' => 'simpan_berita', 'uses' => 'AdminController@simpanberita']);

        Route::get('admin/berita/edit/{id}', [
            'as' => 'ubah_berita', 'uses' => 'AdminController@ubah_berita']);

        Route::patch('admin/berita/edit/{id}', [
            'as' => 'update_berita', 'uses' => 'AdminController@update_berita']);

        Route::delete('admin/berita/{id}', [
            'as' => 'hapus_berita', 'uses' => 'AdminController@hapus_berita']);

        #kontak
        Route::get('admin/kontak', [
            'as' => 'kontak', 'uses' => 'AdminController@kontak'
        ]);
});


Route::get('login', [
    'as'=>'getLogin',
    'uses'=>'Auth\AuthController@getLogin']);

Route::post('login', [
    'as'=>'postLogin',
    'uses'=>'Auth\AuthController@postLogin']);

Route::get('logout',[
    'as'=>'getLogout',
    'uses'=>'Auth\AuthController@getLogout']);
