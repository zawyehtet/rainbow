@extends('layout.master')
@section('title','HallCreate')
@section('content')
@include('layout._header')
    <form action="/hall/store" method="POST" class="col-md-6" >
        @csrf
        <div class="form-group ">
            <label for="name">Hall Name</label>
            <input type="text" class="form-control" name="name" placeholder="Add hall name" value="{{ old('name') }}" >
            @if($errors->has("name"))
                <small class="form-text text-danger">
                    {{ $errors->first('name') }}
                </small>
            @endif
        </div>
        <button type="submit" class="btn btn-success">save</button>
        <a href="/hall" class="btn btn-danger">cancel</a>
    </form>
@endsection