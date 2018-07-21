<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/16/2017
 * Time: 9:34 PM
 */
$str = "this is sandeep konakanchi from khammam";
echo "<pre>";
print_r(explode("  ",$str));
echo "<br>";
$arr = array('this','is','sandeep','konakanchi','from khammam');
print_r(implode($arr," "));
echo "<br>";
echo "<pre>";
echo wordwrap($str,10);