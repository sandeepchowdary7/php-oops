
Approach1:

$str = "hello world";

$i = 0;

while ($d = $str[$i]) {
    if ($d == " ") {
	    $result = " " . $tempResult . $result;
		$tempResult = "";
	} else {
	    $tempResult.= $d;
	}
	$i++;
}

echo $tempResult.$result;


Approach2:

$str = "hello world";
$array = explode(' ', $str);
$i = 0;

for ($i=(count($array)-1); $i>=0; $i--) {
echo $array[$i] . ' ';
}

