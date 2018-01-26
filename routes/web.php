<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/get_pegawai_nilai', 'DashboardController@getPenilaianPegawai');
Route::post('/dashboard/reject_mutasi', 'DashboardController@rejectMutasi');
Route::post('/dashboard/approve_mutasi', 'DashboardController@approveMutasi');

// authentication
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

// status proses
Route::get('/status', 'StatusController@index');
Route::post('/status/approve/{reg_num}', 'StatusController@approve')->name('approve');
Route::post('/status/decline/{reg_num}', 'StatusController@decline')->name('decline');
Route::get('/status/detail/{reg_num}', 'StatusController@getDetails');


// form pengajuan mutasi (semua tipe)
Route::get('/mutasi/pengajuan', 'MutasiController@index');
Route::get('/mutasi/pengajuan/get_pegawai_info', 'MutasiController@getPegawaiInfo');
Route::post('/mutasi/pengajuan/submit_form', 'MutasiController@submitForm');
Route::get('/mutasi/pengajuan/getFormasi', 'MutasiController@getFormasi'); 
Route::get('/mutasi/pengajuan/getJabatan', 'MutasiController@getJabatan');
Route::get('/mutasi/pengajuan/getFormasiJabs', 'MutasiController@getFormasiJabs');
Route::get('/mutasi/pengajuan/getJabatanInfo', 'MutasiController@getJabatanInfo');

Route::get('/notifications', 'NotificationController@index');
Route::post('/notifications/read', 'NotificationController@read');
Route::post('/notifications/readAll', 'NotificationController@readAll');
Route::post('/notifications/delete/{id}', 'NotificationController@delete');

// sdm
Route::get('/mrp', 'MRPController@index');
Route::get('/mrp/edit/{reg_num}', 'MRPController@showEdit');
Route::post('/mrp/edit', 'MRPController@edit');
Route::get('/mrp/detail/{reg_num}', 'MRPController@showDetail');
Route::post('/mrp/datatables/ajax', 'MRPController@ajaxDatatables');
Route::get('/mrp/export', 'MRPController@export');
Route::get('/mrp/download/{reg_num}/{no_dokumen}', 'MRPController@downloadDokumen');
Route::get('/mrp/sk', 'MRPController@pagesk');
Route::get('/mrp/sk/upload', 'MRPController@uploadSK');

Route::get('/download/{reg_num}/{filename}', 'DownloadController@downloader');

Route::get('/home', 'HomeController@index')->name('home');

//profil
Route::get('/profil','ProfilController@index');
Route::post('/profil/edit','ProfilController@input');
Route::get('/profil/getKota','ProfilController@getKota');

//evaluasi
Route::get('/dashboard/dataevaluasi', 'DashboardController@detaileval');
