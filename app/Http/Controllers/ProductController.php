<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ProductID' => 'required',
            'ProductName' => 'required',
            'SupplierID' => 'required',
            'CategoryID' => 'required',
            'QuantityPerUnit' => 'required',
            'UnitPrice' => 'required',
            'UnitsInStock' => 'required',
            'UnitsOnOrder' => 'required',
            'ReorderLevel' => 'required',
            'Discontinued' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(string $id)
    {
        // Dohvati proizvod iz baze podataka
        $product = Product::find($id);

        return view('products.show', compact('product'));
    }


    public function edit(int $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request,int $id)
    {
        $request->validate([
            'ProductID' => 'required',
            'ProductName' => 'required',
            'SupplierID' => 'required',
            'CategoryID' => 'required',
            'QuantityPerUnit' => 'required',
            'UnitPrice' => 'required',
            'UnitsInStock' => 'required',
            'UnitsOnOrder' => 'required',
            'ReorderLevel' => 'required',
            'Discontinued' => 'required'
        ]);
        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
