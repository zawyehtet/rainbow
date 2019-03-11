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
						<th>User ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>
								<div class="btn-group text-center" >
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										<i class="fas fa-cogs icon icon-danger"></i> <span class="caret bg-danger"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/user/edit/{{$user->id}}" class="btn btn-default dropdown-item ">
												<i class="far fa-edit"></i> EDIT
											</a>
										</li>
										<li>
											<form method="post" action="/user/delete/{{$user->id}}" >
												@csrf
												<button type="submit" class="btn btn-default dropdown-item">
													<i class="far fa-trash-alt"></i> DELETE
												</button>
											</form>
										</li>
									</ul>
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