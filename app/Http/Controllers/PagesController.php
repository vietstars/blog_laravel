<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		$title = "Welcome to laravel blog!";
    	return view('pages.index')->with('title',$title);
	}

	public function about()
	{
		$title = "About us";
    	return view('pages.about')->with('title',$title);
	}

	public function service()
	{
		$data = array(
			'title' => 'Service',
			'services' => array("Web Design","Programming","SEO")
		);
    	return view('pages.service')->with($data);
	}
}
