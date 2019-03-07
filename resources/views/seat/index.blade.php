@extends('layout.master')
@section('title','Hall')

@section('content')
<div class="table-responsive col-md-8">
<a href="/seat/create" class="btn btn-primary">+Add</a>
	@if($sets -> count()>0)
	<table class="table table-striped">
		<thead class="thead-inverse">
			<tr>
				<th>Hall Name</th>
				<th>Row</th>
				<th>Number</th>
				<th>Price</th>
				<th>Edit</th>
				<th>Delete</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($seats as $seat)
				<tr>
					<td>{{$seat->hall->name}}</td>
					<td>{{$seat->row}}</td>
					<td>{{$seat->number}}</td>
					<td>{{$seat->price}} Kyats</td>
					<td><a href="/seat/edit/{{$seat->id}}">
							<button class="btn btn-primary"><i class="far fa-edit"></i></button>
						</a>
					</td>
                    <td>
					<form method="post" action="/seat/delete/{{$seat->id}}">
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
	{{$sets->links()}}
	@else 
	<h2>No showing</h2>
	@endif
</div>
@endsection