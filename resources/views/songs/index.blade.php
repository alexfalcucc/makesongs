@extends('default')

@section('content')
<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
			<h1>Songs</h1>
			@foreach ($songs as $song)
			<ul class="list-group">
				<li class="list-group-item"><a href="songs/{{ $song->slug }}">{{ $song->title }}</a></li>
			</ul>
			@endforeach




			</div>
		</div>
</div>
@stop