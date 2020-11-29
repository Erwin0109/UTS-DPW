@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Komentar
					<a href="{{url('admin/komentar/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Artikel</th>
							<th>Komentar Dari</th>
							<th>Komentar</th>
						</thead>
						<tbody>
							@foreach($list_komentar as $komentar)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<div class="btn-group">
								<a href="{{url('admin/komentar', $komentar->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
								<a href="{{url('admin/komentar', $komentar->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
								@include('admin.template.utils.delete', ['url' => url('admin/komentar', $komentar->id)])
								</div>
							</td>
							<td>{{$komentar->artikel->nama}}</td>
							<td>{{$komentar->nama}}</td>
							<td>{{$komentar->komentar}}</td>
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