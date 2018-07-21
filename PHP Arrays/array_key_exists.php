<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 3:56 PM
 */

$argv = array('name'=>'sandeep','nephew'=>'himansh','lastname'=>'chowdary');
$res = array_key_exists( 'name',$argv);
echo "<pre>";
print_r($res);

echo "<br>";

if( array_key_exists('lastname',$argv)){

	print_r('value exists here');
}
else
	print_r('no value for this');
echo "<br>";
print_r(array_keys($argv));