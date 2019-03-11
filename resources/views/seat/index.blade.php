@extends('layout.master')
@section('title','Hall')

@section('content')
@include('layout._header')
<div class="table-responsive col-md-8" >
<a href="/seat/create" class="btn border border-success">+Add</a>
	@if($sets -> count()>0)
	<table class="table table-striped text-center">
		<thead class="thead-inverse">
			<tr>
				<th>Hall Name</th>
				<th>Row</th>
				<th>Number</th>
				<th>Price</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($seats as $seat)
				<tr>
					<td>{{$seat->hall->name}}</td>
					<td>{{$seat->row}}</td>
					<td>{{$seat->number}}</td>
					<td>{{$seat->price}} Kyats</td>
					<td>
						<div class="btn-group text-center" >
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<i class="fas fa-cogs icon icon-danger"></i> <span class="caret bg-danger"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="/seat/edit/{{$seat->id}}" class="btn btn-default dropdown-item ">
										<i class="far fa-edit"></i> EDIT
									</a>
								</li>
								<li>
									<form method="post" action="/seat/delete/{{$seat->id}}" >
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
	{{$sets->links()}}
	@else 
	<h2>No showing</h2>
	@endif
</div>
@endsection