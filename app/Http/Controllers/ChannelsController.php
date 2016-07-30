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
        $result = Channels::where('route', $route)->firstOrFail();

        dump($result);

        if (empty($route)){
            echo 'Route Not found!';
        }
    }

    public function getHome(){
        return "Hello Here is Home on Channels!";
    }
}
