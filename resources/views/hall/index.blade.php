@extends('layout.master')
@section('title','Hall DataTable')

@section('content')
@include('layout._header')

<!-- DataTales Example -->
<div class="card shadow mb-4 col-md-8 ">
<div class="card-header py-3 ">
	<div class="row">
		<div class="col-6">
			<a href="{{url('/hall/create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> add new </a>
		</div>
		<div class="col-2">
			<input id="hallSearch" type="text" placeholder="Search..">
		</div>
	</div>
</div>
<div class="card-body text-center">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
			<tr>
				<th>Hall</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody id="hallTable">
				@foreach($halls as $hall)
					<tr>
						<td>{{$hall->name}}</td>
						<td>
							<div class="btn-group text-center" >
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-cogs icon icon-danger"></i> <span class="caret bg-danger"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="/hall/edit/{{$hall->id}}" class="btn ">
											<i class="far fa-edit"></i>
										</a>
									</li>
									<li>
										<form method="post" action="/hall/delete/{{$hall->id}}" >
											@csrf
											<button type="submit" class="btn delete-btn">
												<i class="far fa-trash-alt"></i>
											</button>
										</form>
									</li>
									<li>
										<a href="/hall/{{$hall->id}}" class="btn"><i class="fas fa-info-circle"></i></a>
									</li>
								</ul>
							</div>
						</td>	
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $halls->links() !!}
	</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection