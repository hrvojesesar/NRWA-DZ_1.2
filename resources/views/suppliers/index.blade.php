@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Suppliers</div>

                    <div class="card-body">
                        <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">Add Supply</a>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Supplier ID</th>
                                <th>Company Name</th>
                                <th>Contact Name</th>
                                <th>Contact Title</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Region</th>
                                <th>Postal Code</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>Home Page</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($suppliers as $supplier)
                                <tr>
                                    <td>{{ $supplier->SupplierID }}</td>
                                    <td>{{ $supplier->CompanyName }}</td>
                                    <td>{{ $supplier->ContactName }}</td>
                                    <td>{{ $supplier->ContactTitle }}</td>
                                    <td>{{ $supplier->Address }}</td>
                                    <td>{{ $supplier->City }}</td>
                                    <td>{{ $supplier->Region }}</td>
                                    <td>{{ $supplier->PostalCode }}</td>
                                    <td>{{ $supplier->Country }}</td>
                                    <td>{{ $supplier->Phone }}</td>
                                    <td>{{ $supplier->Fax }}</td>
                                    <td>{{ $supplier->HomePage }}</td>
                                    <td>
                                        <a href="{{ route('suppliers.show', $supplier->SupplierID) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('suppliers.edit', $supplier->SupplierID) }}" class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('suppliers.destroy', $supplier->SupplierID) }}" method="POST" class="d-inline">
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
