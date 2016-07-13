<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

	public function index()
	{
		return view('pruebas.index');
	}

	public function about()
	{
		return view('pruebas.about');
	}

	public function contact()
	{
		return view('pruebas.contact');
	}

	//post de la página

	public function post1()
	{
		return view('pruebas.post_1_recursos_aprender_programacion');
	}

	public function post2()
	{
		return view('pruebas.post_2');
	}

	public function post3()
	{
		return view('pruebas.post_3');
	}

	public function post4()
	{
		return view('pruebas.post_4');
	}

   
}