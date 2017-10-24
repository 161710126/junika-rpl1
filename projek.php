<?php
  class robot{
  	public $suara ;
  	public $berat ;

  	public function SET_suara($bunyi)
  	{
  		reuturn $this->suara = $bunyi
  		
  	}
  }

$robot = new robot;
echo "bunyi robot :".$robot->suara;

?>