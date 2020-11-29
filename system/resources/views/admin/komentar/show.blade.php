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
							<h3><b>Komentar Dari : </b>{{$komentar->nama}}</h3>
							<b>Artikel : {{$komentar->artikel->nama}}</b><hr>
							<b>Komentar :</b>
							<p>
								{{nl2br($komentar->komentar)}}
							</p>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection