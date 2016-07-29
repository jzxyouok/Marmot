<?php

namespace Marmot\Http\Controllers;

use Marmot\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view("home");
    }
}
