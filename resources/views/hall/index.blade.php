@extends('layout.master')
@section('title','Hall')

@section('content')
@include('layout._header')
@if(session('status'))
	<p class="alert alert-success">{{session('status')}}</p>
@endif 

<div class="table-responsive col-md-8 bg-hall" >
	<a href="/hall/create"><button class="btn border border-success">+Add</button></a>
	@if($hallies->count()>0)
	<table class="table table-striped text-center">
		<thead class="thead-inverse">
			<tr>
				<th>Hall</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($halls as $hall)
				<tr>
					<td>{{$hall->name}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="/hall/edit/{{$hall->id}}" class="btn ">
								<i class="far fa-edit"></i>
							</a>
							<form method="post" action="/hall/delete/{{$hall->id}}" >
								@csrf
								<button type="submit" class="btn">
									<i class="far fa-trash-alt"></i>
								</button>
							</form>
							<a href="/hall/{{$hall->id}}" class="btn"><i class="fas fa-info-circle"></i></a>
						</div>
					</td>
					
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