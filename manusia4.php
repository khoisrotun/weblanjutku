<?php
class Manusia
{
    public $nama;
    public $warna;
    function tampilkan_nama(){
        return "Nama saya malasngoding <br/>";
    }
}
$manusia = new manusia();
echo $manusia->tampilkan_nama();
?>
