<?php

namespace Marmot\Http\Controllers\Feed;

use Illuminate\Http\Request;

use Marmot\Http\Requests;
use Marmot\Http\Controllers\Controller;

class SubscriptionsController extends Controller
{
    public function getIndex(){
        return ["msg" => "频道和纪录", "result" => ["code" => 404, "error" => "没有找到频道"]];
    }
}
