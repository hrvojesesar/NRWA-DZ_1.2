@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Product</div>

                    <div class="card-body">
                        <form action="{{ route('products.update', $supply->SupplierID) }}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label for="supplierID">Supplier ID</label>
                                <input type="text" name="supplierID" id="supplierID" class="form-control" value="{{ $supply->SupplierID }}">
                            </div>

                            <div class="form-group">
                                <label for="companyName">Company Name</label>
                                <input type="text" name="companyName" id="companyName" class="form-control" value="{{ $supply->CompanyName }}">
                            </div>

                            <div class="form-group">
                                <label for="contactName">Contact Name</label>
                                <input type="text" name="contactName" id="contactName" class="form-control" value="{{ $supply->ContactName }}">
                            </div>


                            <div class="form-group">
                                <label for="contactTitle">Contact Title</label>
                                <input type="text" name="contactTitle" id="contactTitle" class="form-control" value="{{ $supply->ContactTitle }}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $supply->Address }}">
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" value="{{ $supply->City }}">
                            </div>


                            <div class="form-group">
                                <label for="region">Region</label>
                                <input type="text" name="region" id="region" class="form-control" value="{{ $supply->Region }}">
                            </div>


                            <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input type="text" name="postalCode" id="postalCode" class="form-control" value="{{ $supply->PostalCode }}">
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="form-control" value="{{ $supply->Country }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $supply->Phone }}">
                            </div>


                            <div class="form-group">
                                <label for="fax">Fax</label>
                                <input type="text" name="fax" id="fax" class="form-control" value="{{ $supply->Fax }}">
                            </div>


                            <div class="form-group">
                                <label for="homePage">Home Page</label>
                                <input type="text" name="homePage" id="homePage" class="form-control" value="{{ $supply->HomePage }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Supply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
