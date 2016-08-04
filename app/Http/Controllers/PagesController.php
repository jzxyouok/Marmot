<?php

namespace Marmot\Http\Controllers;

use Illuminate\Http\Request;

use Marmot\Http\Requests;

class PagesController extends Controller
{
    public function getIndex($page){
        return view('pages', [
            'template' => $page,
            'active'   =>  $page
        ]);
    }
}
