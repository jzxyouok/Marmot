<?php

namespace Marmot\Http\Controllers;

use Illuminate\Http\Request;

use Marmot\Http\Requests;

class UploadsController extends Controller
{
    public function getIndex(){
        return view('uploads');
    }
}
