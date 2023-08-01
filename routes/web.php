<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Improve\BiodataController;
use App\Http\Controllers\Improve\ItemKpiController;
use App\Http\Controllers\Improve\RealisasiController;
use App\Http\Controllers\Improve\RealizationController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'role:admin'])->name('admin.index');

Route::get('/user', function () {
    return view('admin.index');
})->middleware(['auth', 'role:user'])->name('user.index');




// Route Admin
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users{user}/roles{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users{user}/permissions{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
    Route::get('/itemkpi', [ItemKpiController::class, 'index'])->name('item.kpi');
    Route::get('/realisasi', [RealisasiController::class, 'index'])->name('realisasi');
    Route::get('/realization', [RealizationController::class, 'index'])->name('realization');
});


// Route MANAGER
Route::middleware(['auth', 'role:manager'])->name('manager.')->prefix('manager')->group(function () {
    Route::get('/', [AppsController::class, 'manager'])->name('index');
});

// Route Spv
Route::middleware(['auth', 'role:supervisor'])->name('spv.')->prefix('spv')->group(function () {
    Route::get('/', [AppsController::class, 'supervisor'])->name('index');
});

// Route Staff
Route::middleware(['auth', 'role:staff'])->name('staff.')->prefix('staff')->group(function () {
    Route::get('/', [AppsController::class, 'staff'])->name('index');
    Route::get('/bio', [BiodataController::class, 'index'])->name('biodata');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
