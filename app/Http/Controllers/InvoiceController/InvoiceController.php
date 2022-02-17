<?php

namespace App\Http\Controllers\InvoiceController;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'total' => 'required',
            'amount' => 'required',
            'tax' => 'required'
        ]);

        $amount = $request->amount;
        $tax = $request->tax;

        $total_after_tax = $amount * $tax;

        $invoice = new Invoice();
        $invoice->total = $total_after_tax;
        $invoice->amount = $request->amount;
        $invoice->tax = $request->tax;

        $invoice->save();

        return redirect()->back();

    }

    public function all_invoices()
    {
        $invoice = Invoice::latest();

        dd($invoice);
    }
}
