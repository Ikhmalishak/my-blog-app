<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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

//manage user
Route::get(
    '/users',
    [UserController::class, 'index']

)->name('users'); //mesti akan jumpa route akan guna nama ni 

Route::get(
    '/blogs',
    [BlogController::class, 'index']

)->name('blogs');

//create blog user
Route::get(
    '/blogs/create',
    [BlogController::class, 'create']

)->name('blogs.create'); //mesti akan jumpa route akan guna nama ni 

//store blog user
Route::post(//pakai method post sebab form pakai post
    '/blogs/store',
    [BlogController::class, 'store']

)->name('blogs.store'); //mesti akan jumpa route akan guna nama ni 

//edit blog
Route::get(//pakai method post sebab form pakai post
    '/blogs/{id}/edit',
    [BlogController::class, 'edit']

)->name('blogs.edit'); //mesti akan jumpa route akan guna nama ni 

//update blog
Route::put(//pakai method post sebab form pakai post
    '/blogs/{id}/update',
    [BlogController::class, 'update']

)->name('blogs.update'); //mesti akan jumpa route akan guna nama ni 

//delet blog
Route::delete(//pakai method pdelete sebab form pakai dekat edit.blade delete
    '/blogs/{id}/delete',
    [BlogController::class, 'delete']

)->name('blogs.delete'); //mesti akan jumpa route akan guna nama ni 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
