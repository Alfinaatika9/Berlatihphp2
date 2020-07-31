<?php 

class animal{

	public $legs;
	public $cold_blooded;
	function __construct($name)
	{
		$this-> name = $name . "<br>";
		$this -> legs = 2 . "<br>";
		$this -> cold_blooded = "false". "<br>"; 	
	}
	
	public function get_legs()
	{
		return $this-> legs;
	}

	public function get_coldBlood()
	{
		return $this-> cold_blooded;
	}

}
?>