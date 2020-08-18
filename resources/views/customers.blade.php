@extends('layouts.app')
@section('title', 'Customers')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Customers</h2>
            </div>
            @if ($customers->isEmpty())
                <div>::: There is not any registered customer :::</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{!! $customer->id !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection