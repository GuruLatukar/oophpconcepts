<?php


class Abc{
	// private variable which is only accessible in this class.
	private $firstnum=5;
	// protected variable which is accessible in this class as well as its child class.
	protected $lastnum=6;

	// ERROR Getter function to return the value of private variable !!INVALID
	public function getFirstnum(){
		return $this->firstnum;
	}

	// Getter function to return the value of protected variable
	public function getLastnum(){
		return $this->lastnum;
	}

	// By default all functions are public but variables are not public
	// Setter function to Set the value of protected variables
	function setAllnums($l){
		$this->lastnum=$l;
	}

}

class Xyz extends Abc{
	
	// ERROR Overriding the parent class private variable
	public function getFirstnum(){
		return $this->firstnum;
	} 

	// Overriding the parent class protected variable
	public function getLastnum(){
		return $this->lastnum;
	} 


}

// $abc_1 = new Abc();

//  $abc_1->firstnum = 10;
// $abc_1->setAllnums(20, 25);
// echo $abc_1->getFirstnum();

$xyz = new Xyz();

echo $xyz->getLastnum();

// $abc = new Abc();

// echo $abc->getFirstnum();








// Access specifiers [ Encapsulation ]
// public accessable everywhere
// protected accessable within class and in its child class
// private accessabe only within the class

/*

* All variables and the function which public are only accessable through objects.
* To access protected variable or function we have use getter function which is public.
* To set a value to protected variable or function we have use setter function which is public.

*/