
@extends('layout.master')
@section('title','Seat Data Table')

@section('content')
@include('layout._header')

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
	<div class="row">
		<div class="col-9">
			<a href="{{url('/seat/create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> add new </a>
		</div>
		<div class="col-3">
			<input id="seatSearch" type="text" placeholder="Search..">
		</div>
	</div>
</div>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
			<tr>
				<th>hall name</th>
				<th>row</th>
				<th> seat (No.)</th>
				<th>price</th>
				<th>action</th>
			</tr>
			</thead>
			<tbody id="seatTable">
				@foreach($seats as $seat)
					<tr>
						<td>{{$seat->hall->name}}</td>
						<td>{{$seat->row}}</td>
						<td>{{$seat->number}}</td>
						<td>{{$seat->price}} (MMK)</td>
						<td>
							<div class="btn-group text-center" >
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-cogs icon icon-danger"></i> <span class="caret bg-danger"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="/seat/edit/{{$seat->id}}" class="btn btn-default dropdown-item ">
											<i class="far fa-edit"></i> edit
										</a>
									</li>
									<li>
										<form method="post" action="/seat/delete/{{$seat->id}}" >
											@csrf
											<button type="submit" class="btn btn-default dropdown-item delete-btn">
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
		{!! $seats->links() !!}
	</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection