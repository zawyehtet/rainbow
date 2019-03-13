@extends('layout.master')
@section('title','edit')
@section('content')
@include('layout._header')
<div class="row">
    <div class="col-md-6">
{{-- start edit form action*********** /movie/update/{{$movie->id}}--}}
        <form  action="/user/update/{{$user->id}}" method="post" >
            @csrf  
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control"  name="name" value="{{ $user->name }}" > 
            </div> 
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control"  name="email" value="{{ $user->email }}" > 
            </div>  
            <button type="submit" class="btn btn-primary">update</button>
            <a href="{{url('/user')}}" class="btn btn-danger">cancel</a>
        </form>
{{-- end form ************************ --}}
    </div>
</div>
@endsection