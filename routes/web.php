<?php

use App\Http\Controllers\{
    UserController
};
use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

//rotas de users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

//rotas dos comentarios
Route::get('users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::get('users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('users/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('comments/{id}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/', function () {
    return view('welcome');
});
