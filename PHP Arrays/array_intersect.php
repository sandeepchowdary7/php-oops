<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 3:52 PM
 */

$argv = array('name'=>'sandeep','lastname'=>'chowdary','age'=>'25');
$argc = array('name'=>'deepu','lastname'=>'chowdary','age'=>'25');
$res = array_intersect($argv,$argc);
echo "<pre>";
print_r($res);