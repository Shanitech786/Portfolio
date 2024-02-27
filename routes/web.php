<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\PermissionController;
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

Route::get('Admin/Dashboard',[AdminDashboard::class,'index'])->name('admin.index');

Route::get('index', [PermissionController::class, 'index'])->name('permission.index');
Route::get('create/permission', [PermissionController::class, 'create'])->name('create.permission');
