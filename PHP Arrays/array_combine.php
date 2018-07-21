<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/14/2017
 * Time: 8:54 PM
 */

$name = array('sandeep', 'himansh', 'sahith');
$age = array('25','1','25');
$res = array_combine($name,$age);
print_r($res);