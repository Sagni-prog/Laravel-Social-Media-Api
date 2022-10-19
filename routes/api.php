<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PhotoCommentController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PhotoLikeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileImageController;

Route::get('/user',[AccountController::class,'index']);
Route::get('/post',[PostController::class,'index']);
Route::post('/add-user',[AccountController::class,'store'])->name('add-user');
Route::post('/add-post',[PostController::class,'store'])->name('add-post');
Route::post('/post-comment',[PostCommentController::class,'store'])->name('post-commemt');
Route::post('/photo-comment',[PhotoCommentController::class,'store'])->name('photo-comment');
Route::post('/post-like',[PostLikeController::class,'store'])->name('post-like');
Route::post('/photo-like',[PhotoLikeController::class,'store'])->name('photo-like');
Route::post('/add-photo',[PhotoController::class,'store'])->name('add-photo');
Route::post('/add-avatar',[ProfileImageController::class,'store'])->name('add-avator');

// Route::post('/file',[PostController::class,'test'])->name('file');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
