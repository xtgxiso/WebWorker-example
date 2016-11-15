<?php

$app->HandleFunc("/",function() use($app){
    $data = array(
	"ret" => 0,
	"data" => "欢迎使用"
	);
    $app->ServerJson($data);
});
