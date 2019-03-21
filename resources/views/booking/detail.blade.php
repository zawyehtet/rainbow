@extends('layout._bookingMain')
@section('title','bookingdetail')
@section('content')
<div class="container text-center">              
    <h1 class="text-center shadow-lg p-3 mb-5 bg-white"><i class="fas fa-film"></i> MOVIE:  {{$show->movie->title}}</h1><br><br>
{{-- booking form --}}
    <form action="/booking/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
{{-- *********************************section of seat****************** --}}
            <div class="col-md-8 shadow-lg p-3 mb-5 bg-white rounded" >
                <ul class=" checked-list-box mt-80"> 
                    @foreach($seats as $seat)
                        @php
                            //$bookings = ['2', '7'];
                            $seat_status=' bg-success text-light';
                            $available = true;
                            $check='checked';
                            if (in_array($seat->number, $bookings)) {
                                $seat_status = ' bg-danger text-light ';
                                //'not-available';
                                $available = false;
                            }  
                        @endphp
                        <li class="seat-item ">
                            <span class="button-checkbox ">
                            <button type="button"  class="btn  {{ $seat_status }} " data-color="primary">{{$seat->number }} </button>
                            @if($available)
                                <input type="checkbox" name="booking_seats[]" class="custom-checkbox-input" id="checked" value="{{$seat->id}}"/>
                            @endif
                            </span>
                        </li>    
                    @endforeach
                </ul> 
            </div> 
{{--*********************** start of detail ***************************************************--}}
            <div class="col-md-4 shadow-lg p-3 mb-5 bg-white rounded ">    
                <input type="hidden" name="showing_id" value="{{$show->id}}">
                <input type="hidden" name="movie_id" value="{{$show->movie->id}}">
                <img src="/storage/{{ $show->movie->image }}" class="img-thumbnail">
                <ul class="list-group">
                    <li class="list-group-item  align-items-center">
                        <p>MOVIE : {{$show->movie->title}}</p>
                    </li>
                    <li class="list-group-item  align-items-center">
                        <p> TIME : {{$show->show_time}}</p>
                    </li>
                    <li class="list-group-item  align-items-center">
                        <p> HALL : {{$show->hall->name}}</p>
                    </li>
                    <li class="list-group-item  align-items-center">
                        <p>PRICE : 1000/2000/3000(MMK)</p>
                    </li>
                    <li class="list-group-item">
                        <input type="submit" class="btn btn-success" value="Book">
                        <a href="{{url('/booking/show/book')}}" class="btn btn-danger">Cancel</a>
                    </li>  
                </ul>
{{--******************************** end of detail******************************************************************* --}}
                <p class="box red" >Sold out</p> 
                <p class="box white">Available</p>
            </div>
            {{-- end of middle content --}}    
        </div>  
    </form>    
    @endsection
</div>
