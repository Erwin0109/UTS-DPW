@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Komentar
				</div>
				<div class="card-body">
					<form action="{{url('admin/komentar', $komentar->id)}}" method="post">
						@csrf
						@method("PUT")

	                <div class="form-group">
						<label for="" class="control-label">Nama Artikel</label>
						<input type="text" class="form-control" name="nama" value="{{$komentar->artikel->nama}}" readonly="">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Komentar Dari</label>
						<input type="text" class="form-control" name="nama" value="{{$komentar->nama}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Komentar</label>
						<textarea name="komentar" class="form-control">{{$komentar->komentar}}</textarea>
					</div>
					
					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection