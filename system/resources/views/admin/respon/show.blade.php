@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Respon
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<p> <b>Respon :</b> <br>
								{!! nl2br($respon->respon) !!}
							</p>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection