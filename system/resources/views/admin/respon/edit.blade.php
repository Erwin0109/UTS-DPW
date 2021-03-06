@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Respon
				</div>
				<div class="card-body">
					<form action="{{url('admin/respon', $list_respon->id)}}" method="post">
						@csrf
						@method("PUT")


					<div class="form-group">
						<label for="" class="control-label">Respon</label>
						<textarea name="respon" class="form-control">{{$list_respon->respon}}</textarea>
					</div>
					
					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection