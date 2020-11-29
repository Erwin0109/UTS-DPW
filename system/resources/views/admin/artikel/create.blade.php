@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Artikel
				</div>
				<div class="card-body">
					<form action="{{url('admin/artikel')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="" class="control-label">Judul Artikel</label>
						<input type="text" name="judul" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Deskripsi Artikel</label>
						<input type="text" name="deskripsi" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Konten</label>
						<textarea name="konten" class="form-control"></textarea>
					</div>

					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection