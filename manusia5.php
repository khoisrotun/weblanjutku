<?php
class Manusia
{
    //menentukan property dengan private
    private $nama = "malas ngoding";    
    
    //method public
    public function tampilkan_nama(){
        return "Nama saya " .$this->nama;
    }
}
$manusia = new manusia();
echo $manusia->tampilkan_nama();
?>
