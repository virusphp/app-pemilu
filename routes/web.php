<?php

use App\Http\Controllers\Backend\KoordinatorController;
use App\Http\Controllers\Backend\RelawanController;
use App\Http\Controllers\Backend\SaksiController;
use App\Http\Controllers\Backend\PendukungController;
use App\Http\Controllers\Backend\BudgetController;
use App\Http\Controllers\Backend\JadwalKegiatanController;
use App\Http\Controllers\Backend\AspirasiController;
use App\Http\Controllers\Backend\IssueController;
use App\Http\Controllers\Backend\DPTController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/koordinator', [KoordinatorController::class, 'index'])->name('koordinator.index');
Route::get('/koordinator/create', [KoordinatorController::class, 'create'])->name('koordinator.create');
Route::post('/koordinator/store', [KoordinatorController::class, 'store'])->name('koordinator.store');
Route::get('/koordinator/edit/{id}', [KoordinatorController::class, 'edit'])->name('koordinator.edit');
Route::put('/koordinator/update/{id}', [KoordinatorController::class, 'update'])->name('koordinator.update');
Route::delete('/koordinator/delete/{id}', [KoordinatorController::class, 'delete'])->name('koordinator.delete');


Route::get('/relawan', [RelawanController::class, 'index'])->name('relawan.index');
Route::get('/relawan/create', [RelawanController::class, 'create'])->name('relawan.create');
Route::post('/relawan/store', [RelawanController::class, 'store'])->name('relawan.store');
Route::get('/relawan/edit/{id}', [RelawanController::class, 'edit'])->name('relawan.edit');
Route::put('/relawan/update/{id}', [RelawanController::class, 'update'])->name('relawan.update');
Route::delete('/relawan/delete/{id}', [RelawanController::class, 'delete'])->name('relawan.delete');

Route::get('/saksi', [SaksiController::class, 'index'])->name('saksi.index');
Route::get('/saksi/create', [SaksiController::class, 'create'])->name('saksi.create');
Route::post('/saksi/store', [SaksiController::class, 'store'])->name('saksi.store');
Route::get('/saksi/edit/{id}', [SaksiController::class, 'edit'])->name('saksi.edit');
Route::put('/saksi/update/{id}', [SaksiController::class, 'update'])->name('saksi.update');
Route::delete('/saksi/delete/{id}', [SaksiController::class, 'delete'])->name('saksi.delete');

Route::get('/pendukung', [PendukungController::class, 'index'])->name('pendukung.index');
Route::get('/pendukung/create', [PendukungController::class, 'create'])->name('pendukung.create');
Route::post('/pendukung/storage', [PendukungController::class, 'store'])->name('pendukung.store');

Route::get('/budget', [BudgetController::class, 'index'])->name('budget.index');
Route::get('/budget/create', [BudgetController::class, 'create'])->name('budget.create');
Route::post('/budget/store', [BudgetController::class, 'store'])->name('budget.store');
Route::delete('/budget/delete/{id}', [BudgetController::class, 'delete'])->name('budget.delete');
Route::get('/budget/edit/{id}', [BudgetController::class, 'edit'])->name('budget.edit');
Route::put('/budget/update/{id}', [BudgetController::class, 'update'])->name('budget.update');

Route::get('/jadwal_kegiatan', [JadwalKegiatanController::class, 'index'])->name('jadwal_kegiatan.index');
Route::get('/jadwal_kegiatan/create', [JadwalKegiatanController::class, 'create'])->name('jadwal_kegiatan.create');

Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.index');
Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');

Route::get('/issue', [IssueController::class, 'index'])->name('issue.index');
Route::get('/issue/create', [IssueController::class, 'create'])->name('issue.create');


Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');


Route::get('/dpt', [DPTController::class, 'index'])->name('dpt.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
