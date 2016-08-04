<?php

namespace Marmot\Http\Controllers;

use Illuminate\Http\Request;
use Marmot\Http\Requests;

/**
 * uses Model
 */

use Marmot\Channels;

/**
 * Class ChannelsController
 * @package Marmot\Http\Controllers
 */
class ChannelsController extends Controller
{
    public function getIndex($route = null){
        if (!is_null($route)){
            return view('channels', ['template' => $route]);
        }else{
            return redirect('channels');
        }

        return "Error!";
    }

    public function getHome(){
        return 'Channels!';
    }
}
