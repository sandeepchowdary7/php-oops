<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/14/2017
 * Time: 2:57 PM
 */

$arr = array("sandeep"=>"chowdary");
$argc = array('SANDEEP'=>'KONAKANCHI');
print_r(array_change_key_case($arr,CASE_UPPER));
print_r(array_change_key_case($argc, CASE_LOWER));