<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");
Route::get('/dashboard/customers', [DashboardController::class, 'customers'])->name('customers');
Route::get('/dashboard/customers/{id}', [CustomerController::class, 'details'])->name('customers_details');
Route::get('/dashboard/bills', [DashboardController::class, 'bills'])->name("bills");
Route::get('/dashboard/bills/{id}', [DashboardController::class, 'bills_details'])->name("bills_details");
Route::get('/dashboard/quotes', [DashboardController::class, 'quotes'])->name("quotes");
Route::get('/dashboard/quotes/{id}', [DashboardController::class, 'quotes_details'])->name("quotes_details");
Route::get('/dashboard/missions', [DashboardController::class, 'missions'])->name("mission");
Route::get('/dashboard/missions/{id}', [DashboardController::class, 'missions_details'])->name("mission_details");
