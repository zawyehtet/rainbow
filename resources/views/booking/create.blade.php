@extends('layout.master')
@section('title','Booking')

@section('content')

<div class="container col-md-8 col-md-offset-2 ">
    <h1 class="text-info bg-dark">Booking</h1>
    <div class="well">
        {{-- form start********************************* --}}
        <form  action="/booking/store" method="post" >
            @csrf
            <div class="form-group">
                <label for="showing_id">Showing Id</label>
                <select class="form-control" name="showing_id">
                    @foreach($showings as $sh)
                    <option value="{{$sh->id }}">{{$sh->id}}</option>  
                    @endforeach 
                </select>
            </div>
            {{-- showing id section --}}
            <div class="form-group">
                <label for="seat_number">Seat Number</label>
                <input type="number" class="form-control" name="seat_number" placeholder="Seat Number" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Price" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" placeholder="Status" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>

</div>
@endsection