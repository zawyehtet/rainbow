@extends('layout.master')
@section('title','HallCreate')
@section('content')
<div class="col-md-4" >
    <form action="/user/store" method="post" >
        @csrf
        <div class="form-group">
            <label for="name">Name  <i class="fas fa-file-signature"></i></label>
            <input type="text" class="form-control" name="name"  placeholder="Add User name" required>
        </div>
        <div class="form-group">
            <label for="email">Email    <i class="far fa-envelope-open"></i></label>
            <input type="text" class="form-control" name="email" placeholder="Add Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password    <i class="fab fa-earlybirds"></i></label>
            <input type="password" class="form-control" name="password" placeholder="password" required>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Confirm</button>
        <button type="submit" class="btn btn-danger mb-2 ">
            <a href="/user" class="text-warning">Cancel</a>
        </button>
        
    </form>
</div>
@endsection