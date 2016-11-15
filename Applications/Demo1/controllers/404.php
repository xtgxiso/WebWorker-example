<?php
//自定义404
$app->on404  = function() use($app){
    $app->ServerHtml("我的404");
};
