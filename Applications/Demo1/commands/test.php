<?php
use Workerman\Worker;
use Workerman\Protocols\Http;
use WebWorker\Libs\Mredis;
use WebWorker\Libs\Mdb;
use WebWorker\Libs\Mmysqli;

require_once __DIR__.'/../../../vendor/autoload.php';

//加载配置文件
define("WORKERMAN_RUN",getenv("WORKERMAN_RUN"));
if ( WORKERMAN_RUN == "production" ) {
    require_once __DIR__ . '/../config/config_production.php';
}else if ( WORKERMAN_RUN == "testing" ) {
    require_once __DIR__ . '/../config/config_testing.php';
}else if ( WORKERMAN_RUN == "development"  ) {
    require_once __DIR__ . '/../config/config_development.php';
}else {
    require_once __DIR__ . '/../config/config_production.php';
}


$redis = Mredis::getInstance($config["redis"]);
$db = Mdb::getInstance($config["db"]);    

var_dump($redis->get("test"));
