<?php
use Workerman\Worker;
use Workerman\Protocols\Http;

require_once __DIR__.'/../../vendor/autoload.php';

//加载配置文件
define("WORKERMAN_RUN",getenv("WORKERMAN_RUN"));
if ( WORKERMAN_RUN == "production" ) {
    require_once __DIR__ . '/config/config_production.php';
}else if ( WORKERMAN_RUN == "testing" ) {
    require_once __DIR__ . '/config/config_testing.php';
}else if ( WORKERMAN_RUN == "development"  ) {
    require_once __DIR__ . '/config/config_development.php';
}else {
    require_once __DIR__ . '/config/config_production.php';
}

$app = new WebWorker\App("http://0.0.0.0:1215");

$app->name = "xtgxiso";

$app->count = 4;

$app->autoload = array(__DIR__."/controllers/",__DIR__."/libs/",__DIR__."/funcs/",__DIR__."/models/");

// 如果不是在根目录启动，则运行runAll方法
if(!defined('GLOBAL_START'))
{
    Worker::runAll();
}
