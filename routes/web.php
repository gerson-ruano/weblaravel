<?php

use Illuminate\Support\Facades\Route;

//use Spatie\Permission\Models\Role;
//Role::create(['name'=>'admin']);
//Role::create(['name'=>'cliente']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
    //Rutas del administrador
    //echo "admin";
});

Route::group(['prefix' => 'cliente', 'middleware' => ['auth','role:cliente']], function(){
    //Rutas del cliente
   //echo "cliente";
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
