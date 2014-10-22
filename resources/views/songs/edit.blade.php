@extends('default')

@section('content')

<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">

			<h2>{{ $song->title }}</h2>
			
			{!! Form::model($song, ['url' => 'songs/' . $song->slug . '/update', 'method' => 'PATCH']) !!}
				
				@include('songs.form')

			{!! Form::close() !!}

			{!! Form::open(['url' => 'songs/' . $song->slug . '/delete', 'method' => 'DELETE' ]) !!}

					{!! Form::submit('Delete', ['style' => 'margin-top: 10px; width: 110px;' , 'class' => 'btn btn-danger']) !!}

			{!! Form::close() !!}

			</div>
		</div>
</div>
@stop


