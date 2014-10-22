@extends('default')

@section('content')
<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">

			<h2>{{ $song->title }}</h2>

			@if($song->lyrics)

			<article class="lyrics">
				{!! nl2br($song->lyrics) !!}
			</article>
			@endif
			<br>
			<a href="{{ $song->slug }}/edit" type="button" class="btn btn-warning">Update Song</a>
			<br>
			</div>
		</div>

</div>

@stop