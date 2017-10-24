<?php
class Manusia
{
    protected $nama = "malas ngoding";    
    
    protected function nama(){
        return "Nama saya " .$this->nama;
    }
    public function tampilkan_nama(){
        return $this->tampilkan_nama;
    }
}
$manusia = new manusia();
echo $manusia->tampilkan_nama();
?>
