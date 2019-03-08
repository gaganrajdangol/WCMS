<?php

namespace App\Http\Controllers;; `

use App\Blog_model;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function index()
	{
		echo "Test controller index method.";
	}

	public function create()
	{
		dd("Test controller create method.");
	}
	public function first()
	{
		dd("Gagan Raj");
	}
	public function last()
	{
		dd("Dangol");
	}
	public function full()
	{
		dd("Gagan Raj Dangol");
	}
	public function store()
	{
		$blog=Blog_model::all();
	}
	public function store()
	{
		$blog=Blog_model::create([
			'title' => 'new title',
			'status' => 1,
			'slug' => str slug('new title')
		]);
	}
}
