@extends('layout.master')
@section('title','Hall')

@section('content')
@if(session('status'))
	<p class="alert alert-success">{{session('status')}}</p>
@endif 

<div class="table-responsive col-md-8">
	<a href="/hall/create"><button class="btn btn-success">+Add</button></a>
	@if($hallies->count()>0)
	<table class="table table-striped">
		<thead class="thead-inverse">
			<tr>
				<th>Hall</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Detail</th>
			</tr>
		</thead>
		<tbody>
			@foreach($halls as $hall)
				<tr>
					<td>{{$hall->name}}</td>
					<td><a href="/hall/edit/{{$hall->id}}">
							<button class="btn btn-primary"><i class="far fa-edit"></i></button>
						</a>
					</td>
                    <td>
					<form method="post" action="/hall/delete/{{$hall->id}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
							<i class="far fa-trash-alt"></i>
						</button>
                        </form>
					</td>
					<td><a href="/hall/{{$hall->id}}" class="btn btn-success"><i class="fas fa-info-circle"></i></a></td>
				</tr>


			@endforeach
			
		</tbody>
		
	</table>
	{{ $hallies->links() }}
	@else
	<h3>No showing</h3>
	@endif
</div>
@endsection