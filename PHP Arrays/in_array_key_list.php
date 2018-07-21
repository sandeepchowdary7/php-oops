<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 11:26 PM
 */
$argc = array('1'=>'cat','2'=>'mouse','3'=>'dog');
if(in_array('cat',$argc)){
	echo "match found";
} else {
	echo "match not found";
}
echo "<br>";
$res = sizeof($argc);
print_r($res);
