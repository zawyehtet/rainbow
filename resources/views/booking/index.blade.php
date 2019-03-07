@extends('layout.master')
@section('title','Booking')

@section('content')
<a href="{{url('/booking/create')}}" class="btn btn-success"> Booking  </a>
<div class="table-responsive">
	@if($books->count() > 0)
	<table class="table table-striped">
		<thead class="thead-inverse">
			<tr>
				<th>Booking Id</th>
				<th>Show Id</th>
				<th>Seat Number</th>
				<th>Price</th>
				<th>Showing Time</th>
				<th>Edit</th>
				<th>Delete</th>	
			</tr>
		</thead>
		<tbody>
			@foreach($bookings as $bk)
				<tr>
					<td>{{$bk->id}}</td>
					<td>{{$bk->showing_id}}</td>
					<td>{{$bk->seat_number}}</td>
					<td>{{$bk->price }}Kyats</td>
					<td>{{$bk->status}}</td>
					<td><a href="/booking/edit/{{$bk->id}}">
						<button class="btn btn-primary">
							<i class="far fa-edit"></i>
						</button>
						</a>
					</td>
                    <td>
					<form method="post" action="/booking/delete/{{$bk->id}}">
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
	{{ $books->links() }}
	@else
		<h2>No Showing</h2>
	@endif
	
</div>
@endsection