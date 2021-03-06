<?php

use App\Http\Controllers\InvoiceController\InvoiceController;
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

Route::get('/', function () {
    // return view('welcome');
    // return view('invoice');
    dd(csrf_token());
});

Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoice.store');
Route::get('/invoices/all', [InvoiceController::class, 'all_invoices'])->name('invoices');
Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoice.create');
