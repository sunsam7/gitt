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
	private $abc = 'aaaaaaa';
	
	public function __construct()
	{
		// $this->abc = $intput;
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
	
	function __construct(argument)
	{
		# code...
	}


	public funtion set_value($input){
		return $input;

	}

	public function set_age($input){
		$this->age = $input;
	}
}
?>