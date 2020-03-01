<?php

ini_set("display_errors", "On");

//访问数据进行数据的效验。
/**
 * 模拟场景，假设用户名666已经被注册
 * 输出1表示该用户账号可以使用，如果是0表示不可使用
 * 
 */

 $userName = $_GET['userName'];
 if($userName=='666666' || empty($userName)){
     echo '0';
 }else{
     echo '1';
 }


?>