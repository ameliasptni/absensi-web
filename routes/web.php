<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\Admin\KaryawanController;

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

Route::get('/qrview', [TokenController::class,'generateToken'])->name('qrview');
Route::get('/test', [TokenController::class,'verifyToken'])->name('test');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/absensi', function () {
        return view('absensi');
    })->name('absensi');
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/data-karyawan', [KaryawanController::class, 'index'])->name('admin.data-karyawan');
    Route::get('/admin/data-karyawan/create', [KaryawanController::class, 'create'])->name('admin.create.data-karyawan');
    Route::post('/admin/data-karyawan/store', [KaryawanController::class, 'store'])->name('store.admin.data-karyawan');

    Route::get('/admin/data-absensi', function () {
        return view('data-absensi.index');
    })->name('admin.data-absensi');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
