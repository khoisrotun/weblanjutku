<?php
class Manusia1
{
	var $nama;
	var $warna;
	function __construct(){
	  echo "ini adalah isi method construct <br/>";
	}
	function __destruct(){
		echo "ini adalah isi method destruct <br/>";
	
	}
}
$nyun = new Manusia1();

?>	     