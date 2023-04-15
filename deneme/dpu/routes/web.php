<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//route:: get('/haber/{id}', function (int $id){
   // echo "$id numaralı haber içeriği";
//});

//route::prefix('hafta2')->group(function (){
    //route:: get('/haber/{id?}', function (int $id =null){
    //    echo "$id numaralı haber içeriği";
    //})->name(name:'haber-detay');

   // route:: get('/ornek',function (){
       // return redirect()->route('haber-detay');
   // });
//});

route::prefix('nember')->group(function (){
    route:: get('/register',[\App\Http\Controllers\membercontroller::class,'register']);
    route:: get('/login',[\App\Http\Controllers\membercontroller::class,'login']);
    route:: get('/lost-password',[\App\Http\Controllers\membercontroller::class,'lostpassword']);
});
