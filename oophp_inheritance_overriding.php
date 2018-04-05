<?php

// Class declaration 
// Use camelcase to create class [ex. Tv, SmartTv, UltraHdTv]
class Tv{
	
	// All veriables in class called Data-members or Attributes
	public $model;
	public $volume;

	// construct is magic function in php and this functions always start with __
	// constuct is function which gets exeucuted when we create object of a class.
	// two parameters are passed to the construct function namely $m, $v
	function __construct($m, $v){
		// use $this keyword to access the variable which is declared outside of this function
		$this->model = $m;
		$this->volume = $v;
	}

	// this is function of tv class
	function volumeUp(){
		// return the volume by adding 1 to it.
		return $this->volume++;
	}

	// this is function of tv class
	function volumeDown(){
		// return the volume by substracting 1 from it.
		return $this->volume--;
	}
}


// Create an object of Tv class and pass the values to constructor
$tv_one = new Tv('abc', 1);
$tv_two = new Tv('4k', 1);

// Accessing the class variables using object
echo $tv_one->model."<br>";


// **************** Inheritance ******************** //

// Child class of Tv class
// This class will have all variables and functions of Tv class and its own variables and functions.
class SmartTv extends Tv{

	public $Issmart="true";

	// In child class if define constructor it will override the parent class constructor
	// If you dont declare contructor in child class it will executes the parent class contructor
	function __construct(){
		$this->model = "pqr";
		$this->volume = 1;
	}

	// if you have function in parent class and create function with same name child class then it will orride the parent function.
	function volumeUp(){
		return $this->volume=$this->volume+5;
	}
}

// Create an object of SmartTv class
$s_tv_one = new SmartTv();

// Accessing the class variables and function using object
echo $s_tv_one->Issmart."<br>";
echo $s_tv_one->model."<br>";

// Calling function inside the class using object
$s_tv_one->volumeUp();

// Accessing the class variables using object
echo $s_tv_one->volume;

?>


