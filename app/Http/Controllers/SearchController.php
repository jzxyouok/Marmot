<?php

namespace Marmot\Http\Controllers;

use Illuminate\Http\Request;

use Marmot\Http\Requests;

class SearchController extends Controller
{
    public function __construct()
    {

    }

    public function getIndex(Request $request){
        if (is_string($request->request->get('search')) && $request->request->get('search') != ''){
            echo $request->request->get('search');
        }else{
            echo "Not found value!";
        }
    }
}
