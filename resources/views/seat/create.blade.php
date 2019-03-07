@extends('layout.master')
@section('title','Create')

@section('content')
<div class="container col-md-8 col-md-offset-2 ">
    @include('layout._header')
    <div class="well">
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
                <input type="number" class="form-control" name="row"  placeholder="Row" required>
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control"  name='number' placeholder="number" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="price" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="/seat" class="btn btn-danger">Cancel</a>
        </form>
        {{-- form end*********************************** --}}
    </div>
</div>
@endsection