<?php


class penjumlahan 

{
	public $bil1,$bil2;

    function set_penjumlahan($bilangan1,$bilangan2){
		$this->bil1=$bilangan1;
		$this->bil2=$bilangan2;
	}
	 function get_penjumlahan1(){
		return $this->bil1 + $this->bil2;
		}
	 function get_penjumlahan2(){
		return $this->bil1 - $this->bil2;
		}
	 function get_penjumlahan3(){
		return $this->bil1 * $this->bil2;
		}
	 function get_penjumlahan4(){
		return $this->bil1 / $this->bil2;
		}
}

?>