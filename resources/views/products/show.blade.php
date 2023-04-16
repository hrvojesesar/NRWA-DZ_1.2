@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Show Product</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="productID">Product ID</label>
                            <p>{{ $product->ProductID }}</p>
                        </div>


                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <p>{{ $product->ProductName }}</p>
                        </div>

                        <div class="form-group">
                            <label for="supplierID">Supplier ID</label>
                            <p>{{ $product->SupplierID }}</p>
                        </div>

                        <div class="form-group">
                            <label for="categoryID">Category ID</label>
                            <p>{{ $product->CategoryID }}</p>
                        </div>

                        <div class="form-group">
                            <label for="unitPrice">Unit Price</label>
                            <p>{{ $product->UnitPrice }}</p>
                        </div>

                        <div class="form-group">
                            <label for="quantityPerUnit">Quantity Per Unit</label>
                            <p>{{ $product->QuantityPerUnit }}</p>
                        </div>

                        <div class="form-group">
                            <label for="unitsInStock">Units In Stock</label>
                            <p>{{ $product->UnitsInStock }}</p>
                        </div>

                        <div class="form-group">
                            <label for="unitsOnOrder">Units On Order</label>
                            <p>{{ $product->UnitsOnOrder }}</p>
                        </div>

                        <div class="form-group">
                            <label for="reorderLevel">Reorder Level</label>
                            <p>{{ $product->ReorderLevel }}</p>
                        </div>

                        <div class="form-group">
                            <label for="discontinued">Discontinued</label>
                            <p>{{ $product->Discontinued }}</p>
                        </div>


                        <a href="{{ route('products.edit', $product->ProductID) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('products.destroy', $product->ProductID) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
