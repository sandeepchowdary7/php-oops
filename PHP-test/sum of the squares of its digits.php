A happy number is a number defined by the following process: 
Starting with any positive integer, replace the number by the sum of the squares of its digits, 
and repeat the process until the number either equals 1 (where it will stay), 
or it loops endlessly in a cycle that does not include 1. 
Those numbers for which this process ends in 1 are happy numbers, 
while those that do not end in 1 are unhappy numbers (or sad numbers).


public function findHappyNumber ($number) {
    
	$var1;
	$var2;
	$array = [];
	while($number !=1 && $array[$number] ! == true) {
	    $array[$number] = true;
		$var1 = 0;
		while ($number > 0) {
		    $var2 = $number % 10;
			$var1 += $var2 * $var2;
			$number = ($number - $var2)/10;
		}
		$number = $var1;
	}
    return ($number ==1);
}

