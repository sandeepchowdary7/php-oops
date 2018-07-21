<?php

/**
 * Created by PhpStorm.
 * User: konas
 * Date: 13-08-2017
 * Time: 13:21
 */
class person {

	var $fName;

	var $lName;

	var $salary;

	function __construct($fName, $lName, $salary) {
		echo "Hey! This is " . $this->fName = $fName . "&nbsp" . $this->lName = $lName . "<br>";
		echo "I got a new job with " . $this->salary = $salary . " $ Package";
	}
}
class persons extends person{
	function __destruct() {
		// TODO: Implement __destruct() method.
		unset ($this->fName);
		unset ($this->lName);
		unset ($this->salary);
	}
}

$obj = new person(sandeep, konakanhi, 100000);
