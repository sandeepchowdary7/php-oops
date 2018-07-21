<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 6:43 PM
 */
$argv = array('1'=>'red','2'=>'black','3'=>'himansh','4'=>'udaya');
$res = array_search('udaya',$argv);
print_r($res);
echo "<br>";
$res1 = array_shift($argv);
print_r($res1);
echo "</br>";
print_r($argv);
$res2 = array_unshift($argv,'venu');
print_r($res2);
echo "</br>";
print_r($argv);
