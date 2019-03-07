@extends('layout.master')
@section('title','BookingEdit')
@section('content')
<h1 class="text-info bg-dark">Edit </h1>
    {{-- start edit form action*********** /movie/update/{{$movie->id}}--}}
<form  action="/booking/update/{{$booking->id}}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="showing_id">Showing Id</label>
            <select class="form-control" name="showing_id">
                @foreach($shows as $sh)
                    <option value="{{$sh->id }}" @if($booking->showing_id == $sh->id)  selected @endif >{{$sh->id}}</option>  
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label for="seat_number">Seat_number</label>
            <input type="number" class="form-control"  name="seat_number"  value="{{$booking->seat_number}}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control"  name="price"  value="{{$booking->price}}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control"  name="status"  value="{{$booking->status}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{url('/booking')}}" class="btn btn-danger">Cancel</a>
    </form>
    {{-- end form ************************ --}}
@endsection