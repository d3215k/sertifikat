<?php

use App\Livewire\CariSertifikatComponent;
use App\Livewire\TampilkanSertifikatComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', CariSertifikatComponent::class)->name('cari.sertifikat');
Route::get('/c/{nomor}', TampilkanSertifikatComponent::class)->name('tampilkan.sertifikat');

Route::redirect('/laravel/login', '/login')->name('login');

