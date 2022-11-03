<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Supplier;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = Invoice::all();
        return view('invoices.invoiceIndex', compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('invoices.invoiceCreate', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'date' => 'required',
            'price' => 'required',

        ]);
        $supplier_id = Supplier::where('name', $request->name)->value('id');
        $request->request->add(compact('supplier_id'));
        Invoice::create($request->all());
        return redirect('/invoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        $invoice->supplier = Supplier::where('id', $invoice->id_supplier)->value('name');
        return view('invoices.invoiceShow', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        $supplier = Supplier::select('name')->get();
        $invoice->supplier = Supplier::where('id', $invoice->id_supplier)->value('name');
        return view('invoices.invoiceEdit', compact('invoice', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'date' => 'required',
            'price' => 'required',

        ]);
        $id_supplier = Supplier::where('name', $request->name)->value('id');
        $request->request->add(compact('id_supplier'));
        Invoice::where('id', $invoice->id)->update($request->except('_token', '_method', 'name'));
        return redirect('/invoice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect('/invoice');
    }
}
