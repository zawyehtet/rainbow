@extends('layout.master')
@section('title','Create')

@section('content')
@include('layout._header')

<div class="container col-md-8 col-md-offset-2 ">
@include('layout._header')
    <div class="well">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        {{-- form start********************************* --}}
        <form  action="/seat/store" method="post" >
            @csrf
            <div class="form-group">
                <label for="hall_id">Hall</label>
                <select class="form-control" name="hall_id">
                    @foreach($halls as $hall)
                    <option value="{{$hall->id }}">{{$hall->name}}</option>  
                    @endforeach 
                </select>
                {{-- @endfor drop down loop  --}}
            </div>
            <div class="form-group">
                <label for="row">Row</label>
                <input type="number" class="form-control" name="row"  placeholder="Row" value="{{ old('row') }}" >
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control"  name='number' placeholder="number" value="{{ old('number') }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="price" value="{{ old('price') }}">
            </div>
            
            <button type="submit" class="btn border border-success">Save</button>
            <a href="/seat" class="btn border border-danger">Cancel</a>
        </form>
        {{-- form end*********************************** --}}
    </div>
</div>
@endsection