@extends('layout.master')
@section('title','Detail for Hall')
@section('content')
@include('layout._header')
<div class="table-responsive col-md-6">
    <a href="/seat/create" class="btn btn-primary">add new</a>
    <a href="/hall" class="btn btn-danger">cancel</a>
    <table class="table table-striped">
        <thead class="thead-inverse">
                <tr>
                    <th>Row</th>
                    <th>Number</th>
                    <th>Price</th>
                </tr>
        </thead>
        <tbody>
            @foreach($hall->seats as $seat)
                <tr>
                    <td>{{$seat->row}}</td>
                    <td>{{$seat->number}}</td>
                    <td>{{$seat->price}} Kyats</td>
                </tr>
            @endforeach               
        </tbody>
    </table>
</div>
    
    {{-- end form ************************ --}}
@endsection