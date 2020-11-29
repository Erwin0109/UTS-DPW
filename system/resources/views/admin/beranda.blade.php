@extends('admin.template.base')

@section('content')
<div class="jumbotron">	
	<h1>
		Selamat Datang @if(Auth::check()){{request()->user()->nama}}@endif
	</h1>
</div>
@endsection