@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Supply</div>

                    <div class="card-body">
                        <form action="{{ route('suppliers.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="productID">Supplier ID</label>
                                <input type="text" name="productID" id="productID" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="productName">Supplier Name</label>
                                <input type="text" name="productName" id="productName" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="supplierID">Contact Name</label>
                                <input type="text" name="supplierID" id="supplierID" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="categoryID">Contact Title</label>
                                <input type="text" name="categoryID" id="categoryID" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="quantityPerUnit">Address</label>
                                <input type="text" name="quantityPerUnit" id="quantityPerUnit" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="unitPrice">City</label>
                                <input type="text" name="unitPrice" id="unitPrice" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="unitsInStock">Region</label>
                                <input type="text" name="unitsInStock" id="unitsInStock" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="unitsOnOrder">Postal Code</label>
                                <input type="text" name="unitsOnOrder" id="unitsOnOrder" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="reorderLevel">Country</label>
                                <input type="text" name="reorderLevel" id="reorderLevel" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="discontinued">Phone</label>
                                <input type="text" name="discontinued" id="discontinued" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="discontinued">Fax</label>
                                <input type="text" name="discontinued" id="discontinued" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="discontinued">Home Page</label>
                                <input type="text" name="discontinued" id="discontinued" class="form-control">
                            </div>


                            <button type="submit" class="btn btn-primary">Add Supply</button>
                        </form>

                        <script>
                            // Provjeri da li su sva polja obrasca ispravno unesena prije slanja obrasca
                            document.querySelector('form').addEventListener('submit', function (event) {
                             const supplierIDInput = document.querySelector('#supplierID');
                                const companyNameInput = document.querySelector('#companyName');
                                const contactNameInput = document.querySelector('#contactName');
                                const contactTitleInput = document.querySelector('#contactTitle');
                                const addressInput = document.querySelector('#address');
                                const cityInput = document.querySelector('#city');
                                const regionInput = document.querySelector('#region');
                                const postalCodeInput = document.querySelector('#postalCode');
                                const countryInput = document.querySelector('#country');
                                const phoneInput = document.querySelector('#phone');
                                const faxInput = document.querySelector('#fax');
                                const homePageInput = document.querySelector('#homePage');

                                if (supplierIDInput.value === '' || companyNameInput.value === '' || contactNameInput.value === '' || contactTitleInput.value === '' || addressInput.value === '' || cityInput.value === '' || regionInput.value === '' || postalCodeInput.value === '' || countryInput.value === '' || phoneInput.value === '' || faxInput.value === '' || homePageInput.value === '') {
                                    event.preventDefault();
                                    alert('Molimo unesite sve podatke o dobru!');
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
