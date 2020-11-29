@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Respon
					<a href="{{url('admin/respon/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Respon</th>
						</thead>
						<tbody>
							@foreach($list_respon as $respon)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<div class="btn-group">
								<a href="{{url('admin/respon', $respon->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
								<a href="{{url('admin/respon', $respon->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
								@include('admin.template.utils.delete', ['url' => url('admin/respon', $respon->id)])
								</div>
							</td>
							<td>{{$respon->respon}}</td>
						 </tr>
						 	@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection