@extends('layout.master')
@section('title','Showing')

@section('content')
@include('layout._header')
<a href="{{url('/show/create')}}" class="btn border border-success"> <i class="fas fa-plus"></i> Add Showing </a>
<div class="table-responsive text-center">
	@if($shows->count() > 0)
	<table class="table table-striped">
		<thead class="thead-inverse">
			<tr>
				<th>Movie Name</th>
				<th>Movie Poster</th>
				<th>Cinema Hall</th>
				<th>Showing Time</th>
				<th>Action</th>
				
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
						<div class="btn-group" role="group">
							<a href="/show/edit/{{$show->id}}" class="btn ">
								<i class="far fa-edit"></i>
							</a>
							<form method="post" action="/show/delete/{{$show->id}}" >
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
	{{ $shows->links() }}
	@else
		<h2>No Showing</h2>
	@endif
</div>
@endsection