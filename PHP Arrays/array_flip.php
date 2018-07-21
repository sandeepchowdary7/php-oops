<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 3:46 PM
 */

$argc = array('me'=>'sandeep','nephew'=>'himansh','sister'=>'udaya');
echo '<br>';
echo "<pre>";
print_r($argc);
echo '<br>';
echo "<pre>";
$res = array_flip($argc);
print_r($res);
echo "</pre>";
