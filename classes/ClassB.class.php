<?php
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
?>