@extends('layout.master')
@section('title','booking')

@section('content')
@include('layout._header')

<!-- DataTales Example -->
<div class="card shadow mb-4 col-md-8 ">
<div class="card-header py-3 ">
		<a href="" class="btn btn-primary"> <i class="fas fa-plus"></i> add new </a>
</div>
<div class="card-body text-center">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
			<tr>
                <th>Booking Id</th>
                <th>Total Price</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
				@foreach($booking_number as $bn)
					<tr>
                    <td>{{$bn->booking_number}}</td>
                    <td>{{$bn->total_price}}</td>
						<td>
							<div class="btn-group text-center" >
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-cogs icon icon-danger"></i> <span class="caret bg-danger"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="" class="btn ">
											<i class="far fa-edit"></i>
										</a>
									</li>
									<li>
										<form method="post" action="" >
											@csrf
											<button type="submit" class="btn delete-btn">
												<i class="far fa-trash-alt"></i>
											</button>
										</form>
									</li>
									<li>
										<a href="" class="btn"><i class="fas fa-info-circle"></i></a>
									</li>
								</ul>
							</div>
						</td>	
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection