<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/16/2017
 * Time: 9:19 PM
 */

$str = "hey! this is himansh chowadry";
echo str_replace('is','z',$str);
echo "<br>";
echo str_repeat($str,'10')."<br>";
echo "<br>";
print_r (str_split($str,'5'));