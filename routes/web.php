<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;

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

// Migration, Seed, Optimize
Route::get(env('deploy_url'), function(){
    Artisan::call('migrate');
    Artisan::call('db:seed');
    Artisan::call('optimize:clear');

    return "Success";
});

Route::get('/', [RegistrationController::class, 'index'])->name('index');
Route::post('/', [RegistrationController::class, 'register'])->name('registration');
Route::get('apply-for-loan', [RegistrationController::class, 'applyForLoan'])->name('apply.for.loan');
Route::post('apply-for-loan', [RegistrationController::class, 'submit'])->name('apply.for.loan.submit');
Route::get('thank-you', [RegistrationController::class, 'thankYou'])->name('thank.you');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [Admin\DashboardController::class, 'index'])->name('index');
    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [Admin\ProfileController::class, 'index'])->name('index');
        Route::post('update', [Admin\ProfileController::class, 'update'])->name('update');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\ProductController::class, 'index'])->name('index');
        Route::post('status/add-or-update', [Admin\ProductController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('status/trash', [Admin\ProductController::class, 'trash'])->name('trash');
        Route::post('status/update-status', [Admin\ProductController::class, 'updateStatus'])->name('update.status');
    });

    Route::prefix('city')->name('city.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\CityController::class, 'index'])->name('index');
        Route::post('status/add-or-update', [Admin\CityController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('status/trash', [Admin\CityController::class, 'trash'])->name('trash');
        Route::post('status/update-status', [Admin\CityController::class, 'updateStatus'])->name('update.status');
    });

    Route::prefix('employment-status')->name('employment.status.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\EmploymentStatusController::class, 'index'])->name('index');
        Route::post('status/add-or-update', [Admin\EmploymentStatusController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('status/trash', [Admin\EmploymentStatusController::class, 'trash'])->name('trash');
        Route::post('status/update-status', [Admin\EmploymentStatusController::class, 'updateStatus'])->name('update.status');
    });

    Route::prefix('gender')->name('gender.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\GenderController::class, 'index'])->name('index');
        Route::post('status/add-or-update', [Admin\GenderController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('status/trash', [Admin\GenderController::class, 'trash'])->name('trash');
        Route::post('status/update-status', [Admin\GenderController::class, 'updateStatus'])->name('update.status');
    });

    Route::prefix('marital-status')->name('marital.status.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\MaritalStatusController::class, 'index'])->name('index');
        Route::post('status/add-or-update', [Admin\MaritalStatusController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('status/trash', [Admin\MaritalStatusController::class, 'trash'])->name('trash');
        Route::post('status/update-status', [Admin\MaritalStatusController::class, 'updateStatus'])->name('update.status');
    });

    Route::prefix('residential-type')->name('residential.type.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\ResidentialTypeController::class, 'index'])->name('index');
        Route::post('status/add-or-update', [Admin\ResidentialTypeController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('status/trash', [Admin\ResidentialTypeController::class, 'trash'])->name('trash');
        Route::post('status/update-status', [Admin\ResidentialTypeController::class, 'updateStatus'])->name('update.status');
    });

    Route::prefix('team')->name('team.')->group(function () {
        Route::match(['get', 'post'], '{role}', [Admin\TeamController::class, 'index'])->name('index');
        Route::post('{role}/add-or-update', [Admin\TeamController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('{role}/update-status', [Admin\TeamController::class, 'updateStatus'])->name('update.status');
        Route::post('{role}/update-password', [Admin\TeamController::class, 'updatePassword'])->name('update.password');
        Route::get('{role}/login-by-user', [Admin\TeamController::class, 'loginByUser'])->name('login.by.user');
    });

    Route::prefix('registration')->name('registration.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\RegistrationController::class, 'index'])->name('index');
        Route::match(['get', 'post'], 'all', [Admin\RegistrationController::class, 'all'])->name('all');
        Route::get('view/{id}', [Admin\RegistrationController::class, 'view'])->name('view');
        Route::post('assign-to-user', [Admin\RegistrationController::class, 'assignToUser'])->name('assign.to.user');
        Route::post('assign-status', [Admin\RegistrationController::class, 'assignStatus'])->name('assign.status');
        Route::get('status/{status}', [Admin\RegistrationController::class, 'index'])->name('status');
    });

    Route::prefix('status')->name('status.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\StatusController::class, 'index'])->name('index');
        Route::post('add-or-update', [Admin\StatusController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('trash', [Admin\StatusController::class, 'trash'])->name('trash');
        Route::post('update-status', [Admin\StatusController::class, 'updateStatus'])->name('update.status');
    });
});

require __DIR__.'/auth.php';
