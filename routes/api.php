<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\InvoiceResource;
use App\Http\Controllers\InvoiceController\InvoiceController;
use App\Models\Invoice;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('/invoices', [InvoiceController::class, 'store'])->name('invoice.store');
Route::get('/invoices', [InvoiceController::class, 'all_invoices'])->name('invoices');
Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoice.store');
Route::get('/invoices', function(){
    return Invoice::all();
});


