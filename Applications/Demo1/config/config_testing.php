<?php
//测试环境配置参数
$config = array();

$config["redis"]["host"] = "127.0.0.1";
$config["redis"]["port"] = 6379;
$config["redis"]["password"] = "123456";
$config["redis"]["db"] = 1;

$config["db"]["host"] = "127.0.0.1";
$config["db"]["user"] = "root";
$config["db"]["password"] = "123456";
$config["db"]["db"] = "test";
$config["db"]["port"] = 3306;
$config["db"]["charset"] = "utf8";
