<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SecureController;

//đường dẫn frontend

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/viec-lam',[HomeController::class,'job'])->name('job');
Route::get('/dang-tin',[HomeController::class,'dangtin'])->name('dangtin');
Route::get('/chi-tiet-viec-lam',[HomeController::class,'chitietvieclam'])->name('chitietvieclam');
Route::get('/chi-tiet-cong-ty',[HomeController::class,'chitietcongty'])->name('chitietcongty');

//đường dẫn secure
Route::get('/dang-ki',[SecureController::class,'dangki'])->name('dangki');
Route::get('/dang-nhap',[SecureController::class,'dangnhap'])->name('dangnhap');
Route::get('/quen-mat-khau',[SecureController::class,'quenmatkhau'])->name('quenmatkhau');