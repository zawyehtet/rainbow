@extends('layout.master')
@section('title','Showing')
@section('content')
@include('layout._header')

<div class="row">
	<div class="col-md-8">
		<a href="{{url('/user/create')}}" class="btn border border-success">+add user</a>
		<div class="table-responsive text-center">
			<table class="table table-striped">
				<thead class="thead-inverse">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>
								<div class="btn-group" role="group">
									<a href="/user/edit/{{$user->id}}" class="btn ">
										<i class="far fa-edit"></i>
									</a>
									<form method="post" action="/user/delete/{{$user->id}}" >
										@csrf
										<button type="submit" class="btn">
											<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</div>
							</td>				
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
<div>
@endsection