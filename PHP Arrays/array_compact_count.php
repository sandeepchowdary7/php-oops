<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 10:43 PM
 */

$fname = 'sandeep';
$lname = 'konakanchi';
$age = '25';

$res = compact('fname','lname','age');
print_r($res);
 echo '<br>';

 $argv = array('sandeep','gvk','ajay','mahesh');
 $res1 = count($argv);
 print_r($res1);
