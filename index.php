<?php
$abc =  new myclass;
echo $abc->get_intput(4455);
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

	public function get_intput(){
		return $this->abc;
	}
}
?>