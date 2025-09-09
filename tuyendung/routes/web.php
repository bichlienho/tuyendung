<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SecureController;
use App\Http\Controllers\Backend\ManagerController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Backend\CvController;
use App\Http\Controllers\Backend\NhatuyendungController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AuthController;

//đường dẫn frontend

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/viec-lam',[HomeController::class,'job'])->name('job');
Route::get('/dang-tin',[HomeController::class,'dangtin'])->name('dangtin');
Route::get('/chi-tiet-viec-lam',[HomeController::class,'chitietvieclam'])->name('chitietvieclam');
Route::get('/chi-tiet-cong-ty',[HomeController::class,'chitietcongty'])->name('chitietcongty');
Route::get('/tao-cv',[HomeController::class,'taocv'])->name('taocv');

//đường dẫn secure
Route::get('/dang-ki',[SecureController::class,'dangki'])->name('dangki');
Route::get('/dang-nhap',[SecureController::class,'dangnhap'])->name('dangnhap');
Route::get('/quen-mat-khau',[SecureController::class,'quenmatkhau'])->name('quenmatkhau');

//đường dẫn backend
Route::get('/quan-li',[ManagerController::class,'index'])->name('quanli');
Route::get('/quan-li-viec-lam',[JobController::class,'vieclam'])->name('quanlivieclam');
Route::get('/quan-li-cv',[CvController::class,'cv'])->name('quanlicv');
Route::get('/quan-li-nha-tuyen-dung',[NhatuyendungController::class,'nhatuyendung'])->name('quanlinhatuyendung');
Route::get('/quan-li-ngươi-dung',[UserController::class,'user'])->name('quanliuser');

//đường dẫn auth
Route::get('/quan-li-dang-ki',[AuthController::class,'register'])->name('quanlidangki');
Route::get('/quan-li-dang-nhap',[AuthController::class,'login'])->name('quanlidangnhap');
Route::get('/quan-li-quen-mat-khau',[AuthController::class,'forgetpass'])->name('quanlipass');