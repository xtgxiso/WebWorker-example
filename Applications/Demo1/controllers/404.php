<?php
//自定义404
$app->on404  = function() {
    $this->ServerHtml("我的404");
};
