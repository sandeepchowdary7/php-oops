<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/14/2017
 * Time: 3:19 PM
 */
$cars=array("Volvo","BMW","Toyota");
echo '</pre>';
$res = array_chunk($cars,2, TRUE);

foreach ($res as $re){
	foreach ($re as $r){
		echo $r . '</br>';
	}
}
echo '</pre>';