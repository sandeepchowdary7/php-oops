<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/14/2017
 * Time: 8:38 PM
 */

$argc1 =  array (array('firstname'=>'sandeep', 'lastname' => 'konakanchi','color'=>'red'), array('firstname'=>'sahith', 'lastname' => 'mandanapu','color'=>'black'),
  array('firstname'=>'shekar', 'lastname' => 'ghante','color'=>'yellow'));
$res = array_column($argc1,'lastname');
print_r($res);