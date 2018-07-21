<?php

/**
 * Created by PhpStorm.
 * User: konas
 * Date: 11-08-2017
 * Time: 15:50
 */
class car {

	function greeting() {
		echo "This is for class instance";
	}
}

$honda = new car();    //This is called instance

$bmw = new car();

$honda->greeting();   //This is called instantiation
