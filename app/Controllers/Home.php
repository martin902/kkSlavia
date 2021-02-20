<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		die("INDEX");
		return view('welcome_message');
	}
}
