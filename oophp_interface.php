<?php
// Use interface keyword to create interface
interface abc{
	// It doesnt include body or any parameter or constructor.
	// In all child classes interface method must be implemented.
	// All functions should be public always.
	public function test1();
	public function test2();
}

interface xyz{
	public function test3();
}

// Multiple interfaces can be implemented
class def implements abc, xyz{
	// Implementing interface method
	public function test1(){
		echo "Test1";
	}
	// Implementing interface method
	public function test2(){
		echo "Test2";
	}
	// Implementing interface method
	public function test3(){
		echo "Test3";
	}

}

$def = new def();

?>