@extends('layout.master')
@section('title','HallCreate')
@section('content')
@include('layout._header')
    <div class="row">
        <div class="col-md-4" >
            <form action="/user/store" method="post" >
                @csrf
                <div class="form-group">
                    <label for="name">Name  <i class="fas fa-file-signature"></i></label>
                    <input type="text" class="form-control" name="name"  placeholder="Add User name" value="{{old('name')}}">
                    @if($errors->has("name"))
                        <small class="form-text text-danger">
                            {{ $errors->first('name') }}
                        </small>
				    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email    <i class="far fa-envelope-open"></i></label>
                    <input type="text" class="form-control" name="email" placeholder="Add Email" value="{{old('email')}}">
                    @if($errors->has("email"))
                        <small class="form-text text-danger">
                        {{ $errors->first('email') }}
                        </small>
				    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password    <i class="fab fa-earlybirds"></i></label>
                <input type="password" class="form-control" name="password" placeholder="password" value="{{old('password')}}">
                    @if($errors->has("password"))
					    <small class="form-text text-danger">
						    {{ $errors->first('password') }}
					    </small>
				    @endif
                </div>
                <button type="submit" class="btn btn-success">save</button>
                <a href="/user" class="btn  btn-danger">cancel</a> 
            </form>
        </div>
    </div>

@endsection