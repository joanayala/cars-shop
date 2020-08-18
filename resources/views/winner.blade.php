@extends('layouts.app')

<br>
<center><h1><font color="RED">WINNER</font></h1></center>
@foreach($customers as $customer)
    <center><h2>{{ $customer['firstname'] }} {{ $customer['lastname'] }}</h2></center> 
@endforeach