<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
	public function sum($numOne,$numTwo)
	{
		return $numOne + $numTwo;
	}
}