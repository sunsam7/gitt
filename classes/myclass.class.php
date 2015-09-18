<?php
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
		echo $this->abc,'<br/>';
	}

	public function set_abc($input){
		$this->abc = $input;
	}

	public function get_abc(){
		return $this->abc;
	}
}