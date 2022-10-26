<?php

use App\Http\Controllers\Mayorista\Mayorista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users/{id?}', [Mayorista::class, 'getUsers'])->name('get_users');
Route::post('/users/new', [Mayorista::class, 'addUser'])->name('new_user');
Route::get('/postal-code/{postal_code?}', [Mayorista::class, 'getDataPostalCode'])->name('get_postal_code');
