@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Artikel
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<h3>
								{{$artikel->judul}}
							</h3>
							<hr>
							<p>
								Penulis : {{$artikel->seller->nama}}
							</p>
							<p>
								{{$artikel->konten}}
							</p>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection