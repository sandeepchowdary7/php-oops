<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 12-08-2017
 * Time: 13:59
 */
class car{
	Public $car_wheels = 4 ;
	protected $car_doors = 4;
	private $car_seats = 5;

	function car_details(){
		echo $this->car_wheels. "<br>";
		echo $this->car_doors. "<br>";
		echo $this->car_seats;

	}
}
$bmw = new car();
echo $bmw->car_wheels; //public- so it will executes
echo $bmw->car_doors;
//echo $bmw->car_doors;  //protected - it will executes only inside the class
//echo $bmw->car_seats;  //private - it will executes only in parent class.
echo "<br>";
$bmw->car_details();
