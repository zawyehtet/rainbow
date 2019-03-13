
@extends('layout.master')
@section('title','Movie Datatable')

@section('content')
@include('layout._header')

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
	<h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
</div>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
			<tr>
				<th>Movie Poster</th>
				<th>Stauts</th>
				<th>Title</th>
				<th>Time</th>
				<th>Option</th>
			</tr>
			</thead>
			<tbody>
				@foreach($movies as $movie)
				<tr>
					<td ><img src="/storage/{{ $movie->image }}" width="100px" height="auto"></td>
					<td>{{$movie->status}}</td>
					<td>{{$movie->title}}</td>
					<td>{{$movie->duration}} minutes</td>
					<td>
						<div class="btn-group text-center" >
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<i class="fas fa-cogs icon icon-danger"></i> <span class="caret bg-danger"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="/movie/edit/{{$movie->id}}" class="btn btn-default dropdown-item ">
										<i class="far fa-edit"></i> edit
									</a>
								</li>
								<li>
									<form method="post" action="/movie/delete/{{$movie->id}}" >
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
		{!! $movies->links() !!}
	</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection