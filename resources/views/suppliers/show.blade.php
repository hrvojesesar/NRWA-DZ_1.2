@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Show Supplier</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="supplierID">Supplier ID</label>
                            <p>{{ $supplier->SupplierID }}</p>
                        </div>

                        <div class="form-group">
                            <label for="companyName">Company Name</label>
                            <p>{{ $supplier->CompanyName }}</p>
                        </div>


                        <div class="form-group">
                            <label for="contactName">Contact Name</label>
                            <p>{{ $supplier->ContactName }}</p>
                        </div>

                        <div class="form-group">
                            <label for="contactTitle">Contact Title</label>
                            <p>{{ $supplier->ContactTitle }}</p>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <p>{{ $supplier->Address }}</p>
                        </div>


                        <div class="form-group">
                            <label for="city">City</label>
                            <p>{{ $supplier->City }}</p>
                        </div>

                        <div class="form-group">
                            <label for="region">Region</label>
                            <p>{{ $supplier->Region }}</p>
                        </div>


                        <div class="form-group">
                            <label for="postalCode">Postal Code</label>
                            <p>{{ $supplier->PostalCode }}</p>
                        </div>


                        <div class="form-group">
                            <label for="country">Country</label>
                            <p>{{ $supplier->Country }}</p>
                        </div>


                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <p>{{ $supplier->Phone }}</p>
                        </div>


                        <div class="form-group">
                            <label for="fax">Fax</label>
                            <p>{{ $supplier->Fax }}</p>
                        </div>


                        <div class="form-group">
                            <label for="homePage">Home Page</label>
                            <p>{{ $supplier->HomePage }}</p>
                        </div>


                        <a href="{{ route('suppliers.edit', $supplier->SupplierID) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('suppliers.destroy',$supplier->SupplierID) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
