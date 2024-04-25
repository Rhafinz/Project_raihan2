<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $nama = "Raihan";
    $jk = "Laki-laki";
    $pendidikan = "SMK";
    $pekerjaan = "NgePES";
    $alamat = "TCI 2";

    return view('data_diri', compact('nama', 'jk', 'pendidikan', 'pekerjaan', 'alamat'));
});

Route::get('/bio', function () {

    $nama = "Dapa";
    $alamat = "TCI 2";
    $ttl = "Bali, 70 Maret 2000";
    $penggemar = "Penggemar Setan Merah";
    $idff = "8000000";
    $pacar = "Si dia";
    $hobi = "Nonton Emyu";
    $julukan = "El Bola Bali";

    return view('biodata', compact('nama', 'alamat', 'ttl', 'penggemar', 'idff', 'pacar', 'hobi', 'julukan'));
});

Route::get('/bio2/{nama}/{jk}/{pt}/{pekerjaan}/{alamat}', function (Request $request, $nama, $jk, $pt, $pekerjaan, $alamat) {
    $nama2 = $nama;
    $jk2 = $jk;
    $pt2 = $pt;
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;

    return view('biodata2', compact('nama2', 'jk2', 'pt2', 'pekerjaan2', 'alamat2'));
});
