<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'SupplierID' => 'required',
            'CompanyName' => 'required',
            'ContactName' => 'required',
            'ContactTitle' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'Region' => 'required',
            'PostalCode' => 'required',
            'Country' => 'required',
            'Phone' => 'required',
            'Fax' => 'required',
            'HomePage' => 'required'
        ]);

        Supplier::create($request->all());

        return redirect()->route('suppliers.index')->with('success', 'Supplier created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Dohvati dobavljača iz baze podataka
        $supplier = Supplier::find($id);

        return view('suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Supplier::find($id);
        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'SupplierID' => 'required',
            'CompanyName' => 'required',
            'ContactName' => 'required',
            'ContactTitle' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'Region' => 'required',
            'PostalCode' => 'required',
            'Country' => 'required',
            'Phone' => 'required',
            'Fax' => 'required',
            'HomePage' => 'required'
        ]);

        $supplier = Supplier::find($id);
        $supplier->SupplierID = $request->get('SupplierID');
        $supplier->CompanyName = $request->get('CompanyName');
        $supplier->ContactName = $request->get('ContactName');
        $supplier->ContactTitle = $request->get('ContactTitle');
        $supplier->Address = $request->get('Address');
        $supplier->City = $request->get('City');
        $supplier->Region = $request->get('Region');
        $supplier->PostalCode = $request->get('PostalCode');
        $supplier->Country = $request->get('Country');
        $supplier->Phone = $request->get('Phone');
        $supplier->Fax = $request->get('Fax');
        $supplier->HomePage = $request->get('HomePage');
        $supplier->save();

        return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect()->route('suppliers.index')->with('success', 'Supplier deleted successfully');
    }
}
