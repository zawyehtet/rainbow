@extends('layout.master')
@section('title','edit')
@section('content')

    {{-- start edit form action*********** /movie/update/{{$movie->id}}--}}
    <form  action="/hall/update/{{$hall->id}}" method="post" >
        @csrf
        
        <div class="form-group">
            <label for="name">Hallname</label>
            <input type="text" class="form-control"  name="name" value="{{ $hall->name }}" > 
        </div> 
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    {{-- end form ************************ --}}
@endsection