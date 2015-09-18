<?php
$abc =  new myclass;
$abc->set_abc('wahaha');
echo $abc->get_abc();

function __autoload($class){
	require_once('classes/'.$class.'.class.php');
}
