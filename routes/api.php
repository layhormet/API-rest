<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PromotionConttroller;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\ProudctController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/student/list',[StudentController::class,'index'])->name('student.list');
Route::post('/student/create',[StudentController::class,'store'])->name('student.create');
Route::get('/student/show/{id}',[StudentController::class,'show'])->name('student.show');
Route::put('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.destroy');


Route::get('/category/list',[CategoryController::class,'index'])->name('category.list');
Route::post('/category/create',[CategoryController::class,'store'])->name('category.create');
Route::get('/category/show/{id}',[CategoryController::class,'show'])->name('category.show');
Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::delete('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.destroy');


Route::get('/product/list',[ProudctController::class,'index'])->name('product.list');
Route::post('/product/create',[ProudctController::class,'store'])->name('product.create');
Route::get('/product/show/{id}',[ProudctController::class,'show'])->name('product.show');
Route::put('/product/update/{id}',[ProudctController::class,'update'])->name('product.update');
Route::delete('/product/delete/{id}',[ProudctController::class,'destroy'])->name('product.destroy');

Route::get('/promotion/list',[PromotionConttroller::class,'index'])->name('promotion.list');
Route::get('/promotion/show/{id}',[PromotionConttroller::class,'show'])->name('promotion.show');
Route::post('/promotion/create',[PromotionConttroller::class,'store'])->name('promotion.create');
Route::put('/promotion/update/{id}',[PromotionConttroller::class,'update'])->name('promotion.update');
Route::delete('/promotion/delete/{id}',[PromotionConttroller::class,'destroy'])->name('promotion.destroy');

Route::get('/order/list',[OrderController::class,'index'])->name('order.list');
Route::post('/order/create',[OrderController::class,'store'])->name('order.create');
Route::get('/order/show/{id}',[OrderController::class,'show'])->name('order.show');
Route::put('/order/update/{id}',[OrderController::class,'update'])->name('order.update');
Route::delete('/order/delete/{id}',[OrderController::class,'destroy'])->name('order.destroy');
