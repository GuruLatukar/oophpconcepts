<?php

// Abtract class must be declared with keyword abstract
abstract class BaseClass{
	protected $firstname;
	protected $lastname;

	public function __construct($f, $l)
	{
		$this->firstname= $f;
		$this->lastname=$l;
	}

	public function getFullName(){
		return $this->firstname . " " . $this->lastname;
	}

	// Declare abstract using abstract keyword. It doesnt include body or any parameter.
	// In all child classes abstract method must be implemented.
	public abstract function getMonthlySalary();

}


class FullTimeEmployee extends BaseClass{
	
	protected $annualSalary;

	// Implementing abstract class
	public function getMonthlySalary(){
		return $this->annualSalary / 12;
	}
}


class ContractEmployee extends BaseClass{
	protected $hourlyRate;
	protected $TotalHours;

	// Implementing abstract class
	public function getMonthlySalary(){
		return $this->hourlyRate * $this->TotalHours;
	}
}


$fullemp = new FullTimeEmployee("fullabc","fullxyz");

echo $fullemp->getFullName();

$conemp = new ContractEmployee("Conabc","Conxyz");

echo $conemp->getFullName();

// Cant create the object of abstract class
//$baclass = new BaseClass("Conabc","Conxyz");


?>