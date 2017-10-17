<?php
class Manusia
{
	var $nama;
	var $warna;
	function tampilkan_nama(){
	  return "Nama saya... <br/>";
	}
	function warna_kulit(){
	  return "Warna kulit saya hitam <br/>";
	}
}
//instansiasi class manusia
$rifqi = new Manusia();
echo $nyun->tampilkan_nama();
echo $nyun->warna_kulit();
?>	  