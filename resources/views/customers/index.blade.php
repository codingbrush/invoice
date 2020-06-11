@extends('layouts.app')

@section('title','Customer List')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Customer List</h4>
            </p>
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Modify</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->telephone}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                        <a href="#" class="btn btn-outline-info btn-sm"><i class="mdi mdi-account-search"></i></a>

                        <a class="btn btn-primary btn-sm"  href="#"><i class="mdi mdi-account-edit"></i></a>

                        <a class="btn btn-danger btn-sm" ><i class="mdi mdi-account-remove text-white"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col">
                    {{ $customers->links() }}
                </div>

                <div class="col text-right text-muted">
                    Showing {{ $customers->firstItem() }} to {{ $customers->lastItem() }} out of {{ $customers->total() }} results
                </div>
            </div>
        </div>
    </div>
@endsection
