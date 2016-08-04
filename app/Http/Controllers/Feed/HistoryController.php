<?php

namespace Marmot\Http\Controllers\Feed;

use Illuminate\Http\Request;

use Marmot\Http\Requests;
use Marmot\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function getIndex(){
        return view("feed.history");
    }
}
