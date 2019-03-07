@extends('layout._bookingMain')
@section('title','title')
@section('content')
    <ul class="list-group">
        @foreach($shows as $show)
        <li class="list-group-item">{{$show->id}}</li>
        @endforeach
    </ul>
@endsection