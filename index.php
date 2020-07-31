<?php

require_once 'animal.php';
 require_once 'ape.php';
 require_once 'frog.php';

  	$sheep = new Animal("Shaun");
	echo "Nama Hewan :".$sheep->name;
	echo "Jumlah Kaki : ".$sheep->get_legs(); 
	echo "Status Hewan Berdarah Dingin :".$sheep->get_coldBlood();

	$sungokong = new Ape ("Kera sakti");
	echo "Nama Hewan :".$sungokong->name;
	echo $sungokong->yell();


	$frog = new Frog("Buduk");
	echo "Nama Hewan :".$frog->name;
	echo $frog-> jump();
	echo "Jumlah kaki :".$frog->get_legs();

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>