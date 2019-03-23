@extends('layout._bookingMain')
@section('title','bookingdetail')
@section('content')
<div class="container text-center">              
<h1 class="text-center shadow-lg p-3 mb-5 bg-white "><i class="fas fa-desktop"></i>  WPA30 cinema seat list</h1><br><br>
{{-- booking form --}}
    <form action="/booking/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
{{-- *********************************section of seat****************** --}}
            <div class="col-md-6 shadow-lg p-3 mb-5 mr-5 rounded  text-center" >
                <p><i class="fas fa-chalkboard "></i> Row1(1-10) /Row2(11-20) /Row3(21-41) <i class="fas fa-chalkboard"></i></p>
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
            <div class="col-md-4 shadow-lg p-3 mb-5 ml-5 ">    
                <input type="hidden" name="showing_id" value="{{$show->id}}">
                <input type="hidden" name="movie_id" value="{{$show->movie->id}}">
                <img src="/storage/{{ $show->movie->image }}" class="img-thumbnail">
                <ul class="list-group ">
                    <li class="list-group-item  align-items-center">
                        <p><i class="fas fa-film"></i> MOVIE : {{$show->movie->title}}</p>
                    </li>
                    <li class="list-group-item  align-items-center">
                        <p><i class="far fa-clock"></i>  TIME : {{$show->show_time}}</p>
                    </li>
                    <li class="list-group-item  align-items-center">
                        <p> <i class="fas fa-theater-masks"></i> HALL : {{$show->hall->name}}</p>
                    </li>
                    <li class="list-group-item  align-items-center">
                        <p><i class="fas fa-hand-holding-usd"></i> PRICE : 1000/2000/3000(MMK)</p>
                    </li>
                    <li class="list-group-item">
                        <input type="submit" class="btn btn-success" value="Book">
                        <a href="{{url('/booking/show/book')}}" class="btn btn-danger">Cancel</a>
                    </li>  
                </ul>
{{--******************************** end of detail******************************************************************* --}}
                <p class="border bg-success text-light">Sold out</p> 
                <p class="border bg-danger text-light">Available</p>
            </div>
            {{-- end of middle content --}}    
        </div>  
    </form>    
    @endsection
</div>
