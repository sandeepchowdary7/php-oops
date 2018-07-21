<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 12:40 AM
 */
$argc = array('fname' => 'sandeep', 'lastname' => 'konakanchi', 'age'=>'25');
$argv = array('firstname' => 'himansh', 'lastname' => 'samineni', 'age'=>'2');

print_r(array_diff($argv,$argc));
echo "<br>";
print_r(array_diff_assoc($argv,$argc));
echo '<br>';

function myFunction($a, $b){
	if ($a!= $b){
		return 0;
	}
	return ($a>$b)?1:-1;
}
print_r(array_diff_uassoc($argv,$argc,'myFunction'));