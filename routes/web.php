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



    Route::prefix('admin')->middleware('auth')->group(function ()
     {
    Route::get('pelanggan/index', 'PelangganController@index');
    Route::get('pelanggan/tambah', 'PelangganController@tambah');
    Route::post('pelanggan/simpan', 'PelangganController@simpan');
    Route::get('pelanggan/hapus/{id}', 'PelangganController@hapus');
    Route::get('pelanggan/edit/{id}','PelangganController@edit');  
    Route::put('pelanggan/update/{id}','PelangganController@update');

    Route::get('kategori/index', 'KategoriController@index');
    Route::get('kategori/tambah', 'KategoriController@tambah');
    Route::post('kategori/simpan', 'KategoriController@simpan');
    Route::get('kategori/hapus/{id}', 'KategoriController@hapus');
    Route::get('kategori/edit/{id}','KategoriController@edit');  
    Route::put('kategori/update/{id}','KategoriController@update');

    Route::get('buku/index', 'BukuController@index');
    Route::get('buku/tambah', 'BukuController@tambah');
    Route::post('buku/simpan', 'BukuController@simpan');
    Route::get('buku/hapus/{id}', 'BukuController@hapus');
    Route::get('buku/edit/{id}','BukuController@edit');  
    Route::put('buku/update/{id}','BukuController@update');

    Route::get('barang/index', 'BarangController@index');
    Route::get('barang/tambah', 'BarangController@tambah');
    Route::post('barang/simpan', 'BarangController@simpan');
    Route::get('barang/edit/{id}','BarangController@edit');  
    Route::put('barang/update/{id}','BarangController@update');
    Route::get('barang/hapus/{id}', 'BarangController@hapus');


    Route::get('pembelian/index', 'PembelianController@index');
    Route::get('pembelian/tambah', 'PembelianController@tambah');
    Route::post('pembelian/simpan', 'PembelianController@simpan');
    Route::get('pembelian/hapus/{id}', 'PembelianController@hapus');
    Route::get('pembelian/laporan','PembelianController@laporan');

    Route::get('penjualan/index','PenjualanController@index');
    Route::get('penjualan/tambah','PenjualanController@tambah');
    Route::post('penjualan/simpan','PenjualanController@simpan');    
    Route::get('penjualan/hapusdetail/{id}','PenjualanController@hapusDetail');
    Route::get('penjualan/cetak/{id}','PenjualanController@cetak');
    Route::any('barang/detail/{id}', 'BarangController@detail');
    Route::get('penjualan/laporan','PenjualanController@laporan');

    
    Route::get('/dashboard','AdminController@dashboard');
});


Route::get('/', function () {	
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
