<?php
class Manusia
{
    var $nama;
    var $warna;
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    function tampilkan_nama(){
        return "Nama saya malasngoding <br/>";
    }
}
$manusia = new manusia();
echo $manusia->tampilkan_nama();
?>
