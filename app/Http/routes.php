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
            'as' => '/', 'uses' => 'BeritaController@homeutama'
        ]);





Route::group(['as' => 'home::', 'middleware' => ['role:mahasiswa']], function () {
        
        Route::get('home', [
            'as' => 'home', 'uses' => 'BeritaController@home'
        ]);

        Route::get('home/tracerstudy', [
                'as' => 'tracerstudy', 'uses' => 'BeritaController@tracerstudy'
            ]);
        
        Route::post('home/tracerstudy', [
        'as' => 'simpan_tracerstudy', 'uses' => 'BeritaController@simpan_tracerstudy']);

        Route::get('home/berita', [
                'as' => 'beritaAlumni', 'uses' => 'BeritaController@berita'
            ]);

       Route::get('home/berita/{slug}', [
                'as' => 'tampil_berita', 'uses' => 'BeritaController@tampil_berita'
            ]);

        Route::get('home/saran', [
                'as' => 'saranAlumni', 'uses' => 'BeritaController@saran'
            ]);
       
        Route::post('home/tambahsaran', [
        'as' => 'simpan_saran', 'uses' => 'BeritaController@simpan_saran']);

        Route::get('home/laporan', [
                'as' => 'laporanAlumni', 'uses' => 'BeritaController@laporan'
            ]);

        Route::get('home/setting', [
                'as' => 'settingAlumni', 'uses' => 'BeritaController@setting'
            ]);

        Route::patch('home/updatesetting', [
                'as' => 'updatepassword', 'uses' => 'BeritaController@updatepassword'
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

       

        #TS
        Route::get('admin/ts', [
            'as' => 'ts', 'uses' => 'AdminController@ts'
        ]);

        Route::delete('admin/ts/{id}', [
            'as' => 'hapus_ts', 'uses' => 'AdminController@hapus_ts']);
});













Route::group(['as' => 'akademik::', 'middleware' => ['role:akademik']], function () {
        Route::get('dashboardAkademik', [
                'as' => 'homeAkademik', 'uses' => 'AkademikController@home'
            ]);

        #user
        Route::get('dashboardAkademik/usermaba', [
                'as' => 'user', 'uses' => 'AkademikController@user'
            ]);
        Route::get('dashboardAkademik/user/buat', [
            'as' => 'tambah_user', 'uses' => 'AkademikController@buat_user']);

        Route::post('dashboardAkademik/user/daftar', [
            'as' => 'simpan_user', 'uses' => 'AkademikController@simpanuser']);

        Route::get('dashboardAkademik/user/edit/{nim}', [
            'as' => 'ubah_user', 'uses' => 'AkademikController@ubah_user']);

        Route::patch('dashboardAkademik/user/edit/{nim}', [
            'as' => 'update_user', 'uses' => 'AkademikController@update_user']);

        Route::delete('dashboardAkademik/user/{nim}', [
            'as' => 'hapus_user', 'uses' => 'AkademikController@hapus_user']);

        #berita
        Route::get('dashboardAkademik/berita', [
                'as' => 'berita', 'uses' => 'AkademikController@berita'
            ]);
        Route::get('dashboardAkademik/berita/buat', [
            'as' => 'tambah_berita', 'uses' => 'AkademikController@buat_berita']);

        Route::post('dashboardAkademik/berita/daftar', [
            'as' => 'simpan_berita', 'uses' => 'AkademikController@simpanberita']);

        Route::get('dashboardAkademik/berita/edit/{id}', [
            'as' => 'ubah_berita', 'uses' => 'AkademikController@ubah_berita']);

        Route::patch('dashboardAkademik/berita/edit/{id}', [
            'as' => 'update_berita', 'uses' => 'AkademikController@update_berita']);

        Route::delete('dashboardAkademik/berita/{id}', [
            'as' => 'hapus_berita', 'uses' => 'AkademikController@hapus_berita']);

        #laporan
        Route::get('dashboardAkademik/laporan', [
                'as' => 'laporan', 'uses' => 'AkademikController@laporan'
            ]);
        Route::get('dashboardAkademik/laporan/buat', [
            'as' => 'tambah_laporan', 'uses' => 'AkademikController@buat_laporan']);

        Route::post('dashboardAkademik/laporan/daftar', [
            'as' => 'simpan_laporan', 'uses' => 'AkademikController@simpanlaporan']);

        Route::get('dashboardAkademik/laporan/edit/{id}', [
            'as' => 'ubah_laporan', 'uses' => 'AkademikController@ubah_laporan']);

        Route::patch('dashboardAkademik/laporan/edit/{id}', [
            'as' => 'update_laporan', 'uses' => 'AkademikController@update_laporan']);

        Route::delete('dashboardAkademik/laporan/{id}', [
            'as' => 'hapus_laporan', 'uses' => 'AkademikController@hapus_laporan']);


        #hasil
        Route::get('dashboardAkademik/hasil', [
                'as' => 'hasil', 'uses' => 'AkademikController@hasil'
            ]);
});















Route::group(['as' => 'fakultas::', 'middleware' => ['role:fakultas']], function () {
        Route::get('dashboardfakultas', [
                'as' => 'homefakultas', 'uses' => 'FakultasController@home'
            ]);
        
        #usermaba
        Route::get('dashboardFakultas/usermaba', [
                'as' => 'user', 'uses' => 'FakultasController@user'
            ]);
        Route::get('dashboardFakultas/user/buat', [
            'as' => 'tambah_user', 'uses' => 'FakultasController@buat_user']);

        Route::post('dashboardFakultas/user/daftar', [
            'as' => 'simpan_user', 'uses' => 'FakultasController@simpanuser']);

        Route::get('dashboardFakultas/user/edit/{nim}', [
            'as' => 'ubah_user', 'uses' => 'FakultasController@ubah_user']);

        Route::patch('dashboardFakultas/user/edit/{nim}', [
            'as' => 'update_user', 'uses' => 'FakultasController@update_user']);

        Route::delete('dashboardFakultas/user/{nim}', [
            'as' => 'hapus_user', 'uses' => 'FakultasController@hapus_user']);
       
        #kartu alumni
        Route::get('dashboardFakultas/kartu', [
                'as' => 'kartu', 'uses' => 'FakultasController@kartu'
            ]);

        Route::post('dashboardFakultas/searchkartu', [
                'as' => 'searchkartu', 'uses' => 'FakultasController@searchkartu'
            ]);

        Route::get('dashboardFakultas/hasilkartu/{nama}', [
                'as' => 'hasillkartu', 'uses' => 'FakultasController@hasilkartu'
            ]);

        #berita
         Route::get('dashboardFakultas/berita', [
                'as' => 'berita', 'uses' => 'FakultasController@berita'
            ]);
        Route::get('dashboardFakultas/berita/buat', [
            'as' => 'tambah_berita', 'uses' => 'FakultasController@buat_berita']);

        Route::post('dashboardFakultas/berita/daftar', [
            'as' => 'simpan_berita', 'uses' => 'FakultasController@simpanberita']);

        Route::get('dashboardFakultas/berita/edit/{id}', [
            'as' => 'ubah_berita', 'uses' => 'FakultasController@ubah_berita']);

        Route::patch('dashboardFakultas/berita/edit/{id}', [
            'as' => 'update_berita', 'uses' => 'FakultasController@update_berita']);

        Route::delete('dashboardFakultas/berita/{id}', [
            'as' => 'hapus_berita', 'uses' => 'FakultasController@hapus_berita']);

        #transfer
        Route::get('dashboardFakultas/transferi', [
                'as' => 'transfer', 'uses' => 'FakultasController@transfer'
            ]);

        Route::get('dashboardFakultas/maba', [
                'as' => 'data_maba', 'uses' => 'FakultasController@data_maba'
            ]);

        Route::get('dashboardFakultas/maba/{nama}', [
                'as' => 'transfer_data', 'uses' => 'FakultasController@transfer_data'
            ]);

        Route::post('dashboardFakultas/maba/{nama}', [
                'as' => 'simpan_data', 'uses' => 'FakultasController@simpan_data'
            ]);

        Route::get('dashboardFakultas/alumni', [
                'as' => 'data_alumni', 'uses' => 'FakultasController@data_alumni'
            ]);

        Route::get('dashboardFakultas/alumni/{nama}', [
                'as' => 'ubah_alumni', 'uses' => 'FakultasController@ubah_alumni'
            ]);

        Route::patch('dashboardFakultas/alumni/{nama}', [
                'as' => 'update_alumni', 'uses' => 'FakultasController@update_alumni'
            ]);

        #saran
        Route::get('dashboardFakultas/saran', [
                'as' => 'saran', 'uses' => 'FakultasController@saran'
            ]);

        #hasil
        Route::get('dashboardFakultas/hasil', [
                'as' => 'hasil', 'uses' => 'FakultasController@hasil'
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

         Route::get('dashboardProdi/hasil', [
                'as' => 'hasil', 'uses' => 'ProdiController@hasil'
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
