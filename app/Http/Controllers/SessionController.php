<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function sessionAction(Request $request)
    {

        $value = $request->session()->get('test',1);
        $request->session()->put('test',$value +1);
        echo $value;

    }
}
