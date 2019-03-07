@extends('layout.master')
@section('title','Showing')

@section('content')
<div class="row">
	<div class="col-md-8">
		<a href="{{url('/user/create')}}" class="btn btn-primary">+add user</a>
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
								<a href="/user/edit/{{$user->id}}">
									<i class="far fa-edit"></i>
								</a>
								<form method="post" action="/user/delete/{{$user->id}}">
									@csrf
									<button type="submit">
										<i class="far fa-trash-alt"></i>
									</button>
								</form>
							</td>				
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
<div>
@endsection