<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\xyzcontroller;
Route::get('/', function () {
    return view('axixa');
});
// Route::resource('/category',categorycontroller::class);  
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create',[categorycontroller::class,'create']);
Route::post('/category',[categorycontroller::class,'store']);
Route::get('/category/{id}',[categorycontroller::class,'show']);
Route::get('/category/{id}/edit',[categorycontroller::class,'edit']);
Route::put('/category/{id}',[categorycontroller::class,'update']);
Route::delete('/category/{id}',[categorycontroller::class,'destroy']);