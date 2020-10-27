<?php

use App\Http\Controllers\AnimalController;
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
    return view('admin.dashboard.index');
});


Route::get('/animals',[AnimalController::class,'index'])->name("animals.index");
Route::get('/animals/json',[AnimalController::class,'json'])->name("animals.json");
Route::get('/animals/create',[AnimalController::class,'create'])->name("animals.create");
Route::get('/animals/parent/{parent_id}',[AnimalController::class,'parent'])->name("animals.parent");
Route::get('/animals/edit/{id}',[AnimalController::class,'edit'])->name("animals.edit");
Route::get('/animals/pedigree/{id}',[AnimalController::class,'pedigree'])->name("animals.pedigree");
Route::post('/animals/store',[AnimalController::class,'store'])->name("animals.store");
Route::patch('/animals/update/{id}',[AnimalController::class,'update'])->name("animals.update");
Route::delete('/animals/delete/{id}',[AnimalController::class,'destroy'])->name("animals.delete");

