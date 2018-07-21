<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 4:34 PM
 */
$argv = array('sandeep','konakanchi','25');
$argc = array('himansh','konakanchi');
$res = array_merge($argv,$argc);
echo "<pre>";
print_r($res);
$arr1 = array('a'=>'red','b'=>'yellow');
$arr2 = array('d'=>'red','b'=>'black');
echo "<br>";
$res1 = array_merge_recursive($arr1,$arr2);
echo "<pre>";
print_r($res1);