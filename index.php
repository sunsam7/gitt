<?php
$abc =  new myclass;
$abc->set_abc('wahaha');
echo $abc->get_abc();

/**
* a new class 
*
*@auth ka
*/
class myclass
{
	private $abc = 'in bugfux_01 fixed';
	
	public function __construct()
	{
		echo $this->abc,'<br/>';
	}

	public function set_abc($input){
		$this->abc = $input;
	}

	public function get_abc(){
		return $this->abc;
	}
}

/**
* create in branch dev
*/
class ClassB
{

	private $age;
	private $name;

	public function set_value($input){
		return $input;

	}

	public function set_age($input){
		$this->age = $input;
	}

	public function set_name($input){
		$this->name = $input;
	}
}

/**
* branch dev doing dev job
*/
class ClassC
{
	
	/*
		fffff
	*/

	public function say_hello(){
		echo 'hello world';
	}
}
?>