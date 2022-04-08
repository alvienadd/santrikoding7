<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::livewire('/post','post.index')->layout('layouts.app')->name('post.index');
// // Route::get('/post', \App\Http\Livewire\Post::class);
// Route::livewire('/post/create','post.create')->layout('layouts.app')->name('post.create');

// Route::livewire('/post/edit/{id}','post.edit')->layout('layouts.app')->name('post.create');
Route::get('/posts',[PostApiController::class,'index']);
// Route::get('/products/create',[ProductApiController::class,'create']);
Route::post('/posts',[PostApiController::class,'store']);
// Route::get('/products/{id}/edit',[ProductApiController::class,'edit']);
Route::get('/posts/{id}',[PostApiController::class,'show']);
Route::put('/posts/{id}',[PostApiController::class,'update']);
Route::delete('/posts/{id}',[ProductApiController::class,'destroy']);