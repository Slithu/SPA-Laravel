<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\SpecializationsController;
use App\Http\Controllers\TreatmentsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/users/list', [UsersController::class, 'index'])
    ->name('users.index')
    ->middleware(['auth', 'can:isAdmin']);
Route::get("users/{id}/delete", [UsersController::class, 'destroy'])->name('users.destroy')->middleware('auth')->middleware('can:isAdmin');
Route::post('/users/{user}', [UsersController::class, 'update'])->name('users.update')->middleware('auth');
Route::get('/users/edit/{user}', [UsersController::class, 'edit'])->name('users.edit')->middleware('auth');
//Route::delete('/users/{id}', [UsersController::class, 'destroy'])->middleware('auth');

Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create')->middleware('auth')->middleware('can:isAdmin');
Route::get('/employees/{employees}', [EmployeesController::class, 'show'])->name('employees.show')->middleware('auth')->middleware('can:isAdmin');
Route::post('/employees', [EmployeesController::class, 'store'])->name('employees.store')->middleware('auth')->middleware('can:isAdmin');
Route::post('/employees/{employees}', [EmployeesController::class, 'update'])->name('employees.update')->middleware('auth')->middleware('can:isAdmin');
Route::get('/employees/edit/{employees}', [EmployeesController::class, 'edit'])->name('employees.edit')->middleware('auth')->middleware('can:isAdmin');
Route::get("employees/{employees}/delete", [EmployeesController::class, 'destroy'])->name('employees.destroy')->middleware('auth')->middleware('can:isAdmin');

Route::get('/specializations', [SpecializationsController::class, 'index'])->name('specializations.index')->middleware('auth')->middleware('can:isAdmin');
Route::get('/specializations/create', [SpecializationsController::class, 'create'])->name('specializations.create')->middleware('auth')->middleware('can:isAdmin');
Route::get('/specializations/{specializations}', [SpecializationsController::class, 'show'])->name('specializations.show')->middleware('auth')->middleware('can:isAdmin');
Route::post('/specializations', [SpecializationsController::class, 'store'])->name('specializations.store')->middleware('auth')->middleware('can:isAdmin');
Route::post('/specializations/{specializations}', [SpecializationsController::class, 'update'])->name('specializations.update')->middleware('auth')->middleware('can:isAdmin');
Route::get('/specializations/edit/{specializations}', [SpecializationsController::class, 'edit'])->name('specializations.edit')->middleware('auth')->middleware('can:isAdmin');
Route::get("specializations/{specializations}/delete", [SpecializationsController::class, 'destroy'])->name('specializations.destroy')->middleware('auth')->middleware('can:isAdmin');

Route::get('/treatments', [TreatmentsController::class, 'index'])->name('treatments.index')->middleware('auth')->middleware('can:isAdmin');
Route::get('/treatments/create', [TreatmentsController::class, 'create'])->name('treatments.create')->middleware('auth')->middleware('can:isAdmin');
Route::get('/treatments/{treatments}', [TreatmentsController::class, 'show'])->name('treatments.show')->middleware('auth')->middleware('can:isAdmin');
Route::post('/treatments', [TreatmentsController::class, 'store'])->name('treatments.store')->middleware('auth')->middleware('can:isAdmin');
Route::post('/treatments/{treatments}', [TreatmentsController::class, 'update'])->name('treatments.update')->middleware('auth')->middleware('can:isAdmin');
Route::get('/treatments/edit/{treatments}', [TreatmentsController::class, 'edit'])->name('treatments.edit')->middleware('auth')->middleware('can:isAdmin');
Route::get("treatments/{treatments}/delete", [TreatmentsController::class, 'destroy'])->name('treatments.destroy')->middleware('auth')->middleware('can:isAdmin');

Route::get('/reservations', [ReservationsController::class, 'index'])->name('reservations.index')->middleware('auth');
Route::get('/reservations/create', [ReservationsController::class, 'create'])->name('reservations.create')->middleware('auth');
Route::get('/reservations/create2/{treatmentId}/{typeId}', [ReservationsController::class, 'create2'])->name('reservations.create2')->middleware('auth');
Route::get('/reservations/{reservations}', [ReservationsController::class, 'show'])->name('reservations.show')->middleware('auth');
Route::post('/reservations', [ReservationsController::class, 'store'])->name('reservations.store')->middleware('auth');
Route::post('/reservations/{reservations}', [ReservationsController::class, 'update'])->name('reservations.update')->middleware('auth');
Route::get('/reservations/edit/{reservations}', [ReservationsController::class, 'edit'])->name('reservations.edit')->middleware('auth');
Route::get("reservations/{reservations}/delete", [ReservationsController::class, 'destroy'])->name('reservations.destroy')->middleware('auth')->middleware('can:isAdmin');
Route::get('/session', [ReservationsController::class, 'showReservations'])->name('reservations.session')->middleware('auth')->middleware('can:isUser');

Route::get('/types', [TypesController::class, 'index'])->name('types.index')->middleware('auth')->middleware('can:isAdmin');
Route::get('/types/create', [TypesController::class, 'create'])->name('types.create')->middleware('auth');
Route::get('/types/{types}', [TypesController::class, 'show'])->name('types.show')->middleware('auth')->middleware('can:isAdmin');
Route::post('/types', [TypesController::class, 'store'])->name('types.store')->middleware('auth');
Route::post('/types/{types}', [TypesController::class, 'update'])->name('types.update')->middleware('auth')->middleware('can:isAdmin');
Route::get('/types/edit/{types}', [TypesController::class, 'edit'])->name('types.edit')->middleware('auth')->middleware('can:isAdmin');
Route::get("types/{types}/delete", [TypesController::class, 'destroy'])->name('types.destroy')->middleware('auth')->middleware('can:isAdmin');

Route::get('/reservations/treatments/{typeId}', [ReservationsController::class, 'getTreatmentsByType'])->name('reservations.treatments');
Route::get('/reservations/employees/{typeId}', [ReservationsController::class, 'getEmployeesByType'])->name('reservations.employees');

Route::get('/GetSpaMassagesTreatments', [WelcomeController::class, 'GetSpaMassagesTreatments'])->name('treatments.GetSpaMassagesTreatments');
Route::get('/GetFacialTreatments', [WelcomeController::class, 'GetFacialTreatments'])->name('treatments.GetFacialTreatments');
Route::get('/GetBodyTreatments', [WelcomeController::class, 'GetBodyTreatments'])->name('treatments.GetBodyTreatments');

Route::get('/GetTreatmentsAsc', [WelcomeController::class, 'GetTreatmentsAsc'])->name('treatments.GetTreatmentsAsc');
Route::get('/GetTreatmentsDesc', [WelcomeController::class, 'GetTreatmentsDesc'])->name('treatments.GetTreatmentsDesc');
Route::get('/GetBodyTreatmentsAsc', [WelcomeController::class, 'GetBodyTreatmentsAsc'])->name('treatments.GetBodyTreatmentsAsc');
Route::get('/GetBodyTreatmentsDesc', [WelcomeController::class, 'GetBodyTreatmentsDesc'])->name('treatments.GetBodyTreatmentsDesc');
Route::get('/GetFacialTreatmentsAsc', [WelcomeController::class, 'GetFacialTreatmentsAsc'])->name('treatments.GetFacialTreatmentsAsc');
Route::get('/GetFacialTreatmentsDesc', [WelcomeController::class, 'GetFacialTreatmentsDesc'])->name('treatments.GetFacialTreatmentsDesc');
Route::get('/GetSpaMassagesTreatmentsAsc', [WelcomeController::class, 'GetSpaMassagesTreatmentsAsc'])->name('treatments.GetSpaMassagesTreatmentsAsc');
Route::get('/GetSpaMassagesTreatmentsDesc', [WelcomeController::class, 'GetSpaMassagesTreatmentsDesc'])->name('treatments.GetSpaMassagesTreatmentsDesc');

Route::get('/GetMasseurSpecializations', [EmployeesController::class, 'GetMasseurSpecializations'])->name('employees.GetMasseurSpecializations');
Route::get('/GetBeauticianSpecializations', [EmployeesController::class, 'GetBeauticianSpecializations'])->name('employees.GetBeauticianSpecializations');
Route::get('/GetBodyCareEmployeeSpecializations', [EmployeesController::class, 'GetBodyCareEmployeeSpecializations'])->name('employees.GetBodyCareEmployeeSpecializations');

Route::get('/profile', [UsersController::class, 'profile'])->name('profile.show')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
