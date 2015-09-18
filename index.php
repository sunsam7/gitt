<?php
$abc =  new myclass;
$abc->set_abc('wahaha');
echo $abc->get_abc();

echo '1231231<br/>';
$cc =  new ClassB();
$cc->set_name('xiaoming');
echo $cc->get_name();

function __autoload($class){
	require_once('classes/'.$class.'.class.php');
}