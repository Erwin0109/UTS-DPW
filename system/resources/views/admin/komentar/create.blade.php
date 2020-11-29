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
					<form action="{{url('admin/komentar')}}" method="post">
						@csrf

					<div class="form-group">
	                  <label>Artikel</label>
	                  <select name="id_artikel" class="form-control select2" style="width: 100%;">
	                    <option selected="selected">Pilih Artikel</option>
	                    	@foreach($list_artikel as $artikel)
	                    		<option value="{{$artikel->id}}">{{$artikel->nama}}</option>
	                    	@endforeach	
	                  </select>
	                </div>

					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Komentar</label>
						<textarea name="Komentar" class="form-control"></textarea>
					</div>


					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection