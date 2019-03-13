@extends('layout.master')
@section('title','Hall Edit')
@section('content')
@include('layout._header')
<div class="col-md-4">
        {{-- start edit form action*********** /movie/update/{{$movie->id}}--}}
    <form  action="/hall/update/{{$hall->id}}" method="post" >
        @csrf
        
        <div class="form-group">
            <label for="name">Hallname</label>
            <input type="text" class="form-control"  name="name" value="{{ $hall->name }}" > 
        </div> 
        
        <button type="submit" class="btn btn-primary">update</button>
        <a href="/hall" class="btn btn-danger">cancel</a>
    </form>
    {{-- end form ************************ --}}
</div>
    
@endsection