@extends('layout.master')
@section('title','Hall DataTable')

@section('content')
@include('layout._header')

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
		<a href="{{url('/hall/create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> add new </a>
</div>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
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
		{!! $halls->links() !!}
	</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection