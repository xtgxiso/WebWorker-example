<?php
class Test_models{

    private $app = false;

    public function __construct(&$app){
        $this->app = $app;
    }

    public function GetAll(){
	$cache = unserialize($this->app->redis->get("test"));
	if ( $cache ){
	    return $cache;
	}else{
	    $sql = "select now() as now";
	    $list = $this->app->db->query($sql)->result_array();
	    $this->app->redis->set("test",serialize($list));
	    return $list;
	}
    }


}
