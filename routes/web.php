<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminAgingController;
use App\Http\Controllers\Admin\AdminCorpController;
use App\Http\Controllers\Admin\AdminHcRevenueController;
use App\Http\Controllers\Admin\AdminHcPurchaseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Department\DashboardController;
use App\Http\Controllers\Improve\BiodataController;
use App\Http\Controllers\Improve\ItemKpiController;
use App\Http\Controllers\Improve\RealisasiController;
use App\Http\Controllers\Improve\RealizationController;
use App\Http\Controllers\User\VisitController;
use App\Http\Controllers\User\DashController;
use App\Http\Controllers\User\HcRevenueController;
use App\Http\Controllers\User\HcPoController;
use App\Http\Controllers\Aging\AgingStatusController;
use App\Http\Controllers\Aging\AgingCalculateController;
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


Route::post('/custom', [LoginController::class, 'customLogin'])->name('custom.login');
Route::get("/cust-logout", [LoginController::class, "customLogout"])->name('custom.logout');
Route::get('/user/dash', [DashController::class, 'index'])->name('user.dash');
Route::get('/grafik/rev', [DashController::class, 'grafikRev'])->name('grafik.rev');
Route::get('/grafik/po', [DashController::class, 'grafikPo'])->name('grafik.po');

// Aging
Route::get('aging/stat', [AgingStatusController::class, 'index'])->name('aging.stat');
Route::resource('/aging/calculate', AgingCalculateController::class);

// Highchart
Route::resource('/hc/rev', HcRevenueController::class);
Route::resource('/hc/po', HcPoController::class);

// Admin Aging
Route::get('admin/ag', [AdminAgingController::class, 'index'])->name('admin.aging');
Route::get('admin/calculate', [AdminAgingController::class, 'calculate'])->name('admin.calculate');
Route::post('/aging_import', [AdminAgingController::class, 'aging_import'])->name('aging_import');
Route::post('/asis_import', [AgingStatusController::class, 'asis_import'])->name('asis_import');
Route::post('/asitac_import', [AgingStatusController::class, 'asitac_import'])->name('asitac_import');
Route::post('/aimb_import', [AgingStatusController::class, 'aimb_import'])->name('aimb_import');
Route::post('/acol_import', [AgingStatusController::class, 'acol_import'])->name('acol_import');
Route::post('/ans_import', [AgingStatusController::class, 'ans_import'])->name('ans_import');
Route::post('/afo_import', [AgingStatusController::class, 'afo_import'])->name('afo_import');
Route::post('/apfo_import', [AgingStatusController::class, 'apfo_import'])->name('apfo_import');

Route::delete('/aging/delete/{id}', [AdminAgingController::class, 'delete'])->name('aging.delete');


// Admin Corp 
Route::resource('/admin/corp', AdminCorpController::class);
Route::post('/corp.save', [AdminCorpController::class, 'save'])->name('corp.save');
Route::get('/corp/ubah/{id}', [AdminCorpController::class, 'ubah'])->name('corp.ubah');
Route::put('/corp/continue/{id}', [AdminCorpController::class, 'continue'])->name('corp.continue');
Route::delete('/corp/delete/{id}', [AdminCorpController::class, 'delete'])->name('corp.delete');
Route::post('/corp.corpsave', [AdminCorpController::class, 'corpsave'])->name('corp.corpsave');
Route::get('/corp/corpubah/{id}', [AdminCorpController::class, 'corpubah'])->name('corp.corpubah');
Route::put('/corp/corpupdate/{id}', [AdminCorpController::class, 'corpupdate'])->name('corp.corpupdate');
Route::delete('/corp/corpdelete/{id}', [AdminCorpController::class, 'corpdelete'])->name('corp.corpdelete');

// Admin HC 
Route::resource('/admin/hcrev', AdminHcRevenueController::class);
Route::post('/hcrev.save', [AdminHcRevenueController::class, 'save'])->name('hcrev.save');
Route::get('/hcrev/ubah/{id}', [AdminHcRevenueController::class, 'ubah'])->name('hcrev.ubah');
Route::put('/hcrev/continue/{id}', [AdminHcRevenueController::class, 'continue'])->name('hcrev.continue');
Route::delete('/hcrev/delete/{id}', [AdminHcRevenueController::class, 'delete'])->name('hcrev.delete');

// Route Admin Purchase
Route::resource('/admin/hcpo', AdminHcPurchaseController::class);
Route::post('/hcpo.save', [AdminHcPurchaseController::class, 'save'])->name('hcpo.save');
Route::get('/hcpo/ubah/{id}', [AdminHcPurchaseController::class, 'ubah'])->name('hcpo.ubah');
Route::put('/hcpo/continue/{id}', [AdminHcPurchaseController::class, 'continue'])->name('hcpo.continue');
Route::delete('/hcpo/delete/{id}', [AdminHcPurchaseController::class, 'delete'])->name('hcpo.delete');

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
    Route::get('/itemkpi/filter', [ItemKpiController::class, 'filter'])->name('itemkpi.filter');
    Route::post('/itemkpi', [ItemKpiController::class, 'store'])->name('itemkpi.store');
    Route::get('/get-data-by-periode', [ItemKpiController::class, 'getDataByPeriode'])->name('item.kpi.by.periode');
    Route::get('/realisasi', [RealisasiController::class, 'index'])->name('realisasi');
    Route::get('/realization', [RealizationController::class, 'index'])->name('realization');
});




// Route MANAGER
Route::middleware(['auth', 'role:manager'])->name('manager.')->prefix('manager')->group(function () {
    Route::get('/', [AppsController::class, 'manager'])->name('index');
});

// Route MANAGER
Route::middleware(['auth', 'role:direction'])->name('dept.')->prefix('us')->group(function () {
    Route::get('/', [AppsController::class, 'manager'])->name('index');
    Route::get('/visit', [VisitController::class, 'index'])->name('index'); 
    Route::get('/dept', [VisitController::class, 'dept'])->name('dept'); 
    Route::get('/dash', [DashboardController::class, 'index'])->name('dash'); 
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
