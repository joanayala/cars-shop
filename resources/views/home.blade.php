@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Customers list!') }}
                    <table class="table col-12 table-responsive">
                        <thead>
                            <th>id</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Id number</th>
                            <th>City</th>
                            <th>E-mail</th>
                            <th>Creation date</th>
                        </thead>
                        <tbody>
                            
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->firstname }}</td>
                                    <td>{{ $customer->lastname }}</td>
                                    <td>{{ $customer->id_number }}</td>
                                    <td>{{ $customer->city }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->created_at }}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>        
                    </table>    
                    <a href ="http://127.0.0.1:8000/customer-list-xls"><button type="button" class="btn btn-success">::: Export to xls :::</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
