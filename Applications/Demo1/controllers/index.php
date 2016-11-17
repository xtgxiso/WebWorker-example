<?php

$app->HandleFunc("/",function() {
    $data = array(
	"ret" => 0,
	"data" => "欢迎使用"
	);
    $this->ServerJson($data);
});


$app->HandleFunc("/hello",function() {
    $test_model = new Test_models($app);
    $data = $test_model->getall();
    $this->ServerJson($data);
});

