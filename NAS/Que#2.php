<?php
class Foo
{
protected $_value;
 public function __constuct()
 {
	 $this->_value=1;
 }
 public static function getSomething(){
	 return $this->_value*5;
 }
}
echo Foo::getSomething();