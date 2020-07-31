<?php
require_once 'animal.php';

class frog extends animal{

	public function jump()
	{
		echo "Hop..Hop... <br>";
	}

	public function get_legs()
	{
		return $this-> legs = 4;
	}
}

?>