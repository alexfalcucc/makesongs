<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
// use DB;
use App\Song;

// request
use Illuminate\Http\Request;

// validating fields of forms
use App\Http\Requests\CreateSongRequest;

class SongsController extends Controller {

	public function __construct(Song $song) {

		$this->song = $song;

	}


	public function index() {

		$songs = $this->song->get();
		//dd($songs);


		return view('songs.index', compact('songs'));
	}

	public function showCreate() {
		return view('songs.create');
	}

	public function store(CreateSongRequest $request, Song $song) {
		
		$song->create($request->all());
		return redirect('songs');
	}

	public function show($slug) {

		$song = $this->song->whereSlug($slug)->first();

		return view('songs.show', compact('song'));
	}

	public function edit($slug) {
		
		//return 'Edit the song with a title is ' . $song->title;

		$song = $this->song->whereSlug($slug)->first();
		
		return view('songs.edit', compact('song'));

	}

	public function update($slug, Request $request) {

		// dd(\Request::get('title'));

		$song = $this->song->whereSlug($slug)->first();

		$song->fill($request->input())->save();
		// $song->title = $request->get('title');

		// $song->save();


		return redirect('songs');		

	}

	public function destroy($slug) {

		// make in routes for refactory!

		// $router->bind('songs', function($slug) {
		// 	return App\Song::whereSlug($slug)->first();
		// });
		
		$song = $this->song->whereSlug($slug)->first();

		$song->delete();

		return redirect('songs');

	}

}
