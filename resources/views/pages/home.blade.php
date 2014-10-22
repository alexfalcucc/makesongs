@extends('default')

@section('content')
<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1>Make your favorits playlist with the best musics<br/>
					aways.</h1>
					<form class="form-inline" role="form">
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Search a song...">
					  </div>
					  <button type="submit" class="btn btn-warning btn-lg">Do you ready?</button>
					</form>					
				</div><!-- /col-lg-6 -->
				<div class="col-lg-6">
					<img class="img-responsive" src="assets/img/ipad-hand.png" alt="">
				</div><!-- /col-lg-6 -->
				
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /headerwrap -->
@stop