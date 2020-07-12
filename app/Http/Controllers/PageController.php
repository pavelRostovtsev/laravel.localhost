<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
	public function showOne($id)
	{
		$pages = [
		1 => 'страница 1',
		2 => 'страница 2',
		3 => 'страница 3',
		4 => 'страница 4',
		5 => 'страница 5',
		];

		if (array_key_exists($id,$pages)) {
			return $pages[$id];
		} else {
			return "такой страницы нет";
		}
	}

	public function showAll()
	{
		return 'showAll';
	}
}