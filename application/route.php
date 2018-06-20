<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
use think\Url;
Url::root('/');
Route::group('api',function (){
    Route::group('v1',function (){
        Route::bind('index');
        Route::resource('cat','Index');
    });
    Route::group('v2',function (){

    });
    Route::miss(function (){
        echo 133;
    });
});