<?php
function verify_sign($data,$app_config){
    if ( $data ){
        if ( empty($data['appkey']) || empty($data['sign']) ){
	    return false;
	}
	//按照参数名排序
	ksort($data);
	//连接待加密的字符串
	$appkey = $data['appkey'];	
	if ( empty($app_config[$appkey]) ){
	    return false;
	}
	$codes = $appkey;
	while (list($key, $val) = each($data)){
	    if (!in_array($key,array('appkey','sign')) ){//排除不签名的参数
	        $codes .=($key.$val);
	    }
	    $codes .= $app_config[$appkey];
	    $sign = strtoupper(sha1($codes));
	    if ( $data['sign'] == $sign ){
	         return true;
	    }else{
	         return false;
	    }
	}	
    }else{
        return true;
    }
}
