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
	private $abc = 'alkjlkjkjlk';
	
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
?>