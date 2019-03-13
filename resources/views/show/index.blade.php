
@extends('layout.master')
@section('title','Seat Datatable')

@section('content')
@include('layout._header')

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
	<a href="{{url('/show/create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Add Showing </a>
</div>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
			<tr>
				<th>Movie Name</th>
				<th>Movie Poster</th>
				<th>Cinema Hall</th>
				<th>Showing Time</th>
				<th>Option</th>
			</tr>
			</thead>
			<tbody>
				@foreach($showingMovies as $show)
					<tr>
						<td>{{$show->movie->title}}</td>
						<td><img src="/storage/{{ $show->movie->image }}" width="100px" height="auto"></td>
						<td>{{$show->hall->name}}</td>
						<td>{{$show->show_time }}</td>
						<td>
							<div class="btn-group text-center" >
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-cogs icon icon-danger"></i> <span class="caret bg-danger"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="/show/edit/{{$show->id}}" class="btn btn-default dropdown-item ">
											<i class="far fa-edit"></i> edit
										</a>
									</li>
									<li>
										<form method="post" action="/show/delete/{{$show->id}}" >
											@csrf
											<button type="submit" class="btn btn-default dropdown-item">
												<i class="far fa-trash-alt"></i> edit
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
		{!!$showingMovies->links()!!}
	</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection