@extends('layout.master')
@section('title','SeatEdit')
@section('content')
@include('layout._header')
    {{-- start edit form action*********** /movie/update/{{$movie->id}}--}}
    <form  action="/seat/update/{{$seat->id}}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="hall_id">Hall</label>
            <select class="form-control" name="hall_id">
                @foreach($seats as $st)
                <option value="{{$st->hall_id}}" @if($st->hall_id == $seat->hall_id)  selected @endif >{{$st->hall->name}}</option>  
                @endforeach
            </select>
        </div>
        {{-- @endfor drop down loop  --}}
        <div class="form-group">
            <label for="row">Row</label>
            <input type="number" class="form-control" name="row"  placeholder="Row" value="{{$seat->row}}">
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="number" class="form-control"  name='number' placeholder="number" value="{{$seat->number}}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" placeholder="price" value="{{$seat->price}}" >
        </div>
        <button type="submit" class="btn border border-success">Update</button>
        <a href="/seat" class="btn border border-danger"> Cancel</a>
    </form>
    {{-- end form ************************ --}}
@endsection