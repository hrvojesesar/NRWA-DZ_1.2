@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Product</div>

                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="productID">Product ID</label>
                                <input type="text" name="productID" id="productID" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" name="productName" id="productName" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="supplierID">Supplier ID</label>
                                <input type="text" name="supplierID" id="supplierID" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="categoryID">Category ID</label>
                                <input type="text" name="categoryID" id="categoryID" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="quantityPerUnit">Quantity Per Unit</label>
                                <input type="text" name="quantityPerUnit" id="quantityPerUnit" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="unitPrice">Unit Price</label>
                                <input type="text" name="unitPrice" id="unitPrice" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="unitsInStock">Units In Stock</label>
                                <input type="text" name="unitsInStock" id="unitsInStock" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="unitsOnOrder">Units On Order</label>
                                <input type="text" name="unitsOnOrder" id="unitsOnOrder" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="reorderLevel">Reorder Level</label>
                                <input type="text" name="reorderLevel" id="reorderLevel" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="discontinued">Discontinued</label>
                                <input type="text" name="discontinued" id="discontinued" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>

                        <script>
                            // Provjeri da li su sva polja obrasca ispravno unesena prije slanja obrasca
                            document.querySelector('form').addEventListener('submit', function (event) {
                                const productIDInput = document.getElementById('productID');
                                const productNameInput = document.getElementById('productName');
                                const supplierIDInput = document.getElementById('supplierID');
                                const categoryIDInput = document.getElementById('categoryID');
                                const quantityPerUnitInput = document.getElementById('quantityPerUnit');
                                const unitPriceInput = document.getElementById('unitPrice');
                                const unitsInStockInput = document.getElementById('unitsInStock');
                                const unitsOnOrderInput = document.getElementById('unitsOnOrder');
                                const reorderLevelInput = document.getElementById('reorderLevel');
                                const discontinuedInput = document.getElementById('discontinued');

                                if (!productNameInput.value || !unitPriceInput.value || !unitsInStockInput.value || !unitsOnOrderInput.value || !reorderLevelInput.value || !discontinuedInput.value) {
                                    event.preventDefault();
                                    alert('Molimo unesite sve podatke o proizvodu!');
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
