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

// DB:Seed
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
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
    });

    Route::match(['get', 'post'], 'registration', [Admin\RegistrationController::class, 'index'])->name('registration.index');
});

require __DIR__.'/auth.php';
