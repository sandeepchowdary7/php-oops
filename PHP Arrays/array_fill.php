<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 1:17 AM
 */
$argc = array_fill(3,4,'blue');
$argv = array_fill(1,2,'red');
print_r($argc);
echo "<br>";
print_r($argv);
echo "<br>";

$keys = array('1','2','3','4');
$res = array_fill_keys($keys,'red');
print_r($res);
