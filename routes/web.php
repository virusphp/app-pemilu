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

Route::get('/relawan', [RelawanController::class, 'index'])->name('relawan.index');
Route::get('/relawan/create', [RelawanController::class, 'create'])->name('relawan.create');

Route::get('/saksi', [SaksiController::class, 'index'])->name('saksi.index');
Route::get('/saksi/create', [SaksiController::class, 'create'])->name('saksi.create');

Route::get('/pendukung', [PendukungController::class, 'index'])->name('pendukung.index');
Route::get('/pendukung/create', [PendukungController::class, 'create'])->name('pendukung.create');

Route::get('/budget', [BudgetController::class, 'index'])->name('budget.index');
Route::get('/budget/create', [BudgetController::class, 'create'])->name('budget.create');
Route::post('/budget/store', [BudgetController::class, 'store'])->name('budget.store');
Route::delete('/budget/delete/{id}', [BudgetController::class, 'delete'])->name('budget.delete');
Route::get('/budget/edit/{id}', [BudgetController::class, 'edit'])->name('budget.edit');
Route::put('/budget/update/{id}', [BudgetController::class, 'update'])->name('budget.update');

Route::get('/jadwal_kegiatan', [JadwalKegiatanController::class, 'index'])->name('jadwal_kegiatan.index');
Route::get('/jadwal_kegiatan/create', [JadwalKegiatanController::class, 'create'])->name('jadwal_kegiatan.create');
Route::post('/jadwal_kegiatan/store', [JadwalKegiatanController::class, 'store'])->name('jadwal_kegiatan.store');
Route::delete('/jadwal_kegiatan/delete/{id}', [JadwalKegiatanController::class, 'delete'])->name('jadwal_kegiatan.delete');
Route::get('/jadwal_kegiatan/edit/{id}', [JadwalKegiatanController::class, 'edit'])->name('jadwal_kegiatan.edit');
Route::put('/jadwal_kegiatan/update/{id}', [JadwalKegiatanController::class, 'update'])->name('jadwal_kegiatan.update');

Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.index');
Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');
Route::get('/aspirasi/edit/{id}', [AspirasiController::class, 'edit'])->name('aspirasi.edit');
Route::put('/aspirasi/update/{id}', [AspirasiController::class, 'update'])->name('aspirasi.update');
Route::delete('/aspirasi/delete/{id}', [AspirasiController::class, 'delete'])->name('aspirasi.delete');

Route::get('/issue', [IssueController::class, 'index'])->name('issue.index');
Route::get('/issue/create', [IssueController::class, 'create'])->name('issue.create');
Route::post('/issue/store', [IssueController::class, 'store'])->name('issue.store');
Route::get('/issue/edit/{id}', [IssueController::class, 'edit'])->name('issue.edit');
Route::put('/issue/update/{id}', [IssueController::class, 'update'])->name('issue.update');
Route::delete('/issue/delete/{id}', [IssueController::class, 'delete'])->name('issue.delete');


Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');


Route::get('/dpt', [DPTController::class, 'index'])->name('dpt.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
