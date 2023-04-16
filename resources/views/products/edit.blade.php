
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Product</div>

                    <div class="card-body">
                        <form action="{{ route('products.update', $product->ProductID) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="productID">Product ID</label>
                                <input type="text" name="productID" id="productID" class="form-control" value="{{ $product->ProductID }}">
                            </div>


                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" name="productName" id="productName" class="form-control" value="{{ $product->ProductName }}">
                            </div>

                            <div class="form-group">
                                <label for="supplierID">Supplier ID</label>
                                <input type="text" name="supplierID" id="supplierID" class="form-control" value="{{ $product->SupplierID }}">
                            </div>

                            <div class="form-group">
                                <label for="categoryID">Category ID</label>
                                <input type="text" name="categoryID" id="categoryID" class="form-control" value="{{ $product->CategoryID }}">
                            </div>

                            <div class="form-group">
                                <label for="unitPrice">Unit Price</label>
                                <input type="text" name="unitPrice" id="unitPrice" class="form-control" value="{{ $product->UnitPrice }}">
                            </div>

                            <div class="form-group">
                                <label for="quantityPerUnit">Quantity Per Unit</label>
                                <input type="text" name="quantityPerUnit" id="quantityPerUnit" class="form-control" value="{{ $product->QuantityPerUnit }}">
                            </div>

                            <div class="form-group">
                                <label for="unitsInStock">Units In Stock</label>
                                <input type="text" name="unitsInStock" id="unitsInStock" class="form-control" value="{{ $product->UnitsInStock }}">
                            </div>


                            <div class="form-group">
                                <label for="unitsOnOrder">Units On Order</label>
                                <input type="text" name="unitsOnOrder" id="unitsOnOrder" class="form-control" value="{{ $product->UnitsOnOrder }}">
                            </div>

                            <div class="form-group">
                                <label for="reorderLevel">Reorder Level</label>
                                <input type="text" name="reorderLevel" id="reorderLevel" class="form-control" value="{{ $product->ReorderLevel }}">
                            </div>

                            <div class="form-group">
                                <label for="discontinued">Discontinued</label>
                                <input type="text" name="discontinued" id="discontinued" class="form-control" value="{{ $product->Discontinued }}">
                            </div>


                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
