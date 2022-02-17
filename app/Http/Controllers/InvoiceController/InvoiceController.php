<?php

namespace App\Http\Controllers\InvoiceController;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function store(Request $request)
    {

        // $invoice = Invoice::create($request->all());

        $amount = $request->amount;
        $tax = $request->tax;

        $total_after_tax = $amount * $tax;

        $invoice = new Invoice();
        $invoice->total = $total_after_tax;
        $invoice->amount = $request->amount;
        $invoice->tax = $request->tax;

        $invoice->save();

        // return response("invoice created successfully", 201);

        return response()->json($invoice, 201);
        // return response()->json(201);

    }

    public function all_invoices()
    {
        $invoice = Invoice::latest()->paginate(10);

        return response()->json($invoice, 200);
    }
}
