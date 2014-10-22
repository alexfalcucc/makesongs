<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PagesController extends Controller {

	public function index() {

		$lessons = ['One Lesson', 'Two Lesson', 'Three Lesson'];
		$name = '<em>Alexsander Falcucci</em>';

		return view('pages.home', compact('lessons', 'name'));
	}

	public function about() {
		return view('pages.about');
	}

}
