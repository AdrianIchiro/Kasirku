<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Beranda;
use App\Livewire\User;
use App\Livewire\Laporan;
use App\Livewire\Produk;
use App\Livewire\Transaksi;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', Beranda::class)->name('home')->middleware(['auth']);
Route::get('/user', User::class)->name('user')->middleware(['auth']);
Route::get('/laporan', Laporan::class)->name('laporan')->middleware(['auth']);
Route::get('/produk', Produk::class)->name('produk')->middleware(['auth']);
Route::get('/transaksi', Transaksi::class)->name('transaksi')->middleware(['auth']);

