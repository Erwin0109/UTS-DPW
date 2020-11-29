@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Komentar
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<h3><b>Komentar : </b>{{nl2br($komentar->komentar)}}</h3>
							<b>Komentar Dari : {{$komentar->nama}}</b>
							<hr>
							<b>Artikel : {{$komentar->artikel->judul}}</b>
							<p>
								
							</p>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection