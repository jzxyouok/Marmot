<?php

namespace Marmot\Http\Controllers;

use Illuminate\Http\Request;

use Marmot\Http\Requests;

class PassportController extends Controller
{
    public function getIndex(Request $request){
        $request->session()->regenerate();
        dump($request->session()->all());
    }
}
