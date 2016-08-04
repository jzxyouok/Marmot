<?php


/**
 * 视频播放页面
 */

Route::controller('watch/{video?}', "WatchController");

/**
 * 用户频道频道页面
 */

Route::get("channels", "ChannelsController@getHome");
Route::controller("channel/{route?}", "ChannelsController");

/**
 * 用户登陆和注册页面
 */

Route::controller("passport", "Auth\\AuthController");


/**
 * 用户管理中心页面
 */

Route::controller("dashboard", "DashboardController");

/**
 * API接口路由
 */

/**
 * 会员(电影票)购买
 */

Route::controller("tickets", "TicketsController");

/**
 * 视频上传页面
 */

Route::controller("uploads", "UploadsController");

/**
 * 搜索页面
 */

Route::controller("search", "SearchController");

/**
 * 播放纪录
 */

Route::controller("feed/history", "Feed\\HistoryController");
Route::controller("feed/subscriptions", "Feed\\SubscriptionsController");


/**
 * 主要导航页面路由
 */

Route::get("{page}", "PagesController@getIndex");

/**
 * 首页默认页面
 */

Route::controller("/", "HomeController");
