<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 12-08-2017
 * Time: 20:15
 */



class cars {
	static $car_doors = 4;
//	static $car_wheels = 4;
	static function car_details(){
		return self::$car_doors;
//		return "<br>";
//		return self::$car_wheels;


	}
}
class trucks extends cars{
	static function truck_details(){
		echo parent::car_details();
	}
}
trucks::truck_details();