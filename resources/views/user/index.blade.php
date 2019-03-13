
@extends('layout.master')
@section('title','Seat Datatable')

@section('content')
@include('layout._header')

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
	<a href="{{url('/user/create')}}" class="btn btn-primary">+add user</a>
</div>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
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
											<i class="far fa-edit"></i> edit
										</a>
									</li>
									<li>
										<form method="post" action="/user/delete/{{$user->id}}" >
											@csrf
											<button type="submit" class="btn btn-default dropdown-item">
												<i class="far fa-trash-alt"></i> delete
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
		{!!$users->links()!!}
	</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection