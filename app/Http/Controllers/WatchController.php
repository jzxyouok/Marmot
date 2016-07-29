<?php

namespace Marmot\Http\Controllers;

use Illuminate\Http\Request;

use Marmot\Http\Requests;

class WatchController extends Controller
{
    public function getIndex($video = null){
    	return [
    		"video_id" => $video
    	];
    }
}
