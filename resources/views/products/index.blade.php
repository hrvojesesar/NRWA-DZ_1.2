
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>

                    <div class="card-body">
                        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Supplier ID</th>
                                <th>Category ID</th>
                                <th>Quantity Per Unit</th>
                                <th>Unit Price</th>
                                <th>Units In Stock</th>
                                <th>Units On Order</th>
                                <th>Reorder Level</th>
                                <th>Discontinued</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->ProductID }}</td>
                                    <td>{{ $product->ProductName }}</td>
                                    <td>{{ $product->SupplierID }}</td>
                                    <td>{{ $product->CategoryID }}</td>
                                    <td>{{ $product->QuantityPerUnit }}</td>
                                    <td>{{ $product->UnitPrice }}</td>
                                    <td>{{ $product->UnitsInStock }}</td>
                                    <td>{{ $product->UnitsOnOrder }}</td>
                                    <td>{{ $product->ReorderLevel }}</td>
                                    <td>{{ $product->Discontinued }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product->ProductID) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('products.edit', $product->ProductID) }}" class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('products.destroy', $product->ProductID) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
