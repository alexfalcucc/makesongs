@extends('default')

@section('content')
	
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">

			<h2>Add a new song</h2>
			
			{!! Form::open(['url' => 'songs/create', 'method' => 'POST']) !!}
				@include('songs.form')
			{!! Form::close() !!}

			</div>
		</div>
	</div>

@stop