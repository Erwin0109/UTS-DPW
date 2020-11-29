@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data
				</div>
				<div class="card-body">
					<form action="{{url('admin/respon')}}" method="post">
					@csrf

	                <div class="form-group">
	                  <label>Komentar Dari</label>
	                  <select name="id_komentar" class="form-control select2" style="width: 100%;">
	                    <option selected="selected">Pilih Komentar</option>
	                    	@foreach($list_komentar as $komentar)
	                    		<option value="{{$komentar->id}}">{{$komentar->nama}}</option>
	                    	@endforeach	
	                  </select>
	                </div>

					<div class="form-group">
						<label for="" class="control-label">Respon</label>
						<textarea name="respon" class="form-control"></textarea>
					</div>


					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection