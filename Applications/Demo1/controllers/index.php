<?php

$app->HandleFunc("/",function() use($app){
    $data = array(
	"ret" => 0,
	"data" => "欢迎使用"
	);
    $app->ServerJson($data);
});


$app->HandleFunc("/hello",function() use($app){
    $test_model = new Test_models($app);
    $data = $test_model->getall();
    $app->ServerJson($data);
});

