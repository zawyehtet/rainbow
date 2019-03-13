@extends('layout._bookingMain')
@section('title','bookingdetail')
@section('content')
<div class="container text-center  ">              
        <h1 class="  text-center"><i class="fas fa-film"></i>  {{$show->movie->title}}</h1>
        <hr>
    <form action="/booking/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            
                <div class="col-md-8 " style="background-image:url('/storage/images/4.jpeg');" >
                    @include('layout._seat')
                    
                </div>
                
                {{-- section of booking page  --}}

                <div class="col-md-4 ">
                    @include('layout._detail')
                    <p class="box red" >Sold out</p> 
                    <p class="box white">Available</p>
                </div>
            {{-- end of middle content --}}    
        </div>  
    </form>    
        {{-- end of table  --}}
    
    @endsection
</div>
