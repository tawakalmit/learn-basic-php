<?php 
// Lingkup variabel / variable scope
$x = 10;

function tampilX(){
	global $x;
	echo $x;
}

tampilX();

 ?>