<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gaji;
use App\Http\Controllers\presensi;
use App\Http\Controllers\home;
use App\Http\Controllers\jabatan;
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



Route::get ('gaji', [Gaji::class, 'index', ]);
Route::get ('presensi', [Presensi::class, 'index', ]);
Route::get ('home', [Home::class, 'index', ]);
Route::get ('jabatan', [Jabatan::class, 'index', ]);