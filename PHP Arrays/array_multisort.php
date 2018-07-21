<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 5:13 PM
 */
$argv = array('ant','dog','cat','monkey');
array_multisort($argv);
echo "<pre>";
print_r($argv);


$argc = array('mouse','dog','cat','horse');
$res = array_multisort($argc,SORT_DESC);
echo "<pre>";
print_r($argc);
