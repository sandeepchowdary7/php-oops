<?php
class cars {
	const x='3.1415';
	}
}
class trucks extends cars{
	public  function getX(){
 return parent->x;
	}
}
$b=new trucks();
echo $b->getX();