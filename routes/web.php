<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ ', function () {
    return view('pages/home'); 
});

Route::get('/about', function () {
    return view('pages/about'); 
});

route::get('/prodi/list',[ ProdiController::class, 'list']);

route::get('/prodi/create',[ ProdiController::class, 'create']);

Route::post('/prodi',[ ProdiController::class, 'save']);
    
Route::get('/prodi', [ ProdiController::class, 'index']);
    
// Route::get('/mahasiswa', function () {
//     $data = ['Toni Sans', 'Ayam KIjang', 'ayam ayama', 'nasi padang'];
//     return view('Mahasiswa.index',['mahasiswa'=>$data]); 
// });

route::get('/mahasiswa',[MahasiswaController::class,'index']);
