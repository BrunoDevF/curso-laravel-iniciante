<?php

use App\Http\Controllers\Form\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::resource('products',ProductController::class);
// Route::resource('user',UserController::class);

Route::get('/', function (){
    return view('welcome');
});


// Route::get('user/store', [UserController::class, 'store'])->name('user.store');
// Route::get('/user/index', [UserController::class, 'index']);
// PHPTIPS AULA02
Route::get('user', [UserController::class, 'listUser']);

// GET
Route::get('usuarios',[TestController::class,'listAllUser'])->name('users.listAll');
Route::get('usuarios/novo',[TestController::class,'formAddUser']);


//Rota para exibir formulario
Route::get('usuarios/editar/{user}',[TestController::class,'formEditUser'])->name('users.add');

Route::get('usuarios/{user}',[TestController::class,'listUser'])->name('users.listUser');


// POST
Route::post('usuarios/store',[TestController::class,'storeUser'])->name('users.store');

// PUT/PATCH
//Rota para cadastrar a edicao no BD
Route::put('usuarios/edit/{user}',[TestController::class,'edit'])->name('user.edit');

// DELETE
Route::delete('usuarios/destroy/{user}',[TestController::class,'destroy'])->name('user.destroy');