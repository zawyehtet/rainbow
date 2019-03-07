@extends('layout.master')
@section('title','movie')

@section('content')
@include('layout._header')
@if(session('status'))
	<p class="alert alert-success">{{session('status')}}</p>
@endif 
<div class="table-responsive text-center">
	@if($movs-> count()>0)
	<table class="table table-border">
		<thead class="thead-inverse">
			<tr>
				<th>Movie Poster</th>
				<th>Stauts</th>
				<th>Title</th>
				<th>Time</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($movies as $movie)
				<tr>
					<td ><img src="/storage/{{ $movie->image }}" width="100px" height="auto"></td>
					<td>{{$movie->status}}</td>
					<td>{{$movie->title}}</td>
					<td>{{$movie->duration}} minutes</td>
					<td><a href="/movie/edit/{{$movie->id}}">
						<button class="btn btn-primary"><i class="far fa-edit"></i></button>
						</a>
					</td>
                    <td>
					<form method="post" action="/movie/delete/{{$movie->id}}">
                         @csrf
                        <button type="submit" class="btn btn-danger">
							<i class="far fa-trash-alt"></i>
						</button>
                        </form>
                    </td>
				</tr>
			@endforeach
			
		</tbody>
	</table>
	{{$movs->links()}}
	@else
	<h3>No showing</h3>
	@endif
</div>
@endsection