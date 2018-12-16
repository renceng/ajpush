<?php



 function setmsg($regid,$msg_content, $title=null, $content_type=null, $extras=null){
    require_once "JPush\JPush.php";
    $app_key       = '';//自己申请的极光appkey
    $master_secret = '';//自己申请的极光appsecret
    $client        = new \JPush($app_key, $master_secret);
    $result = $client->push()->setPlatform('all')->addRegistrationId($push_id)->setMessage('测试','','',array('test'=>'1234','sound'=>'widget://res/horse.ogg'))->send();
    return json_array($result);
 }
