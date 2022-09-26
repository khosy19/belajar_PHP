<?php
//objek
class pesanan 
{
    public $menu;
    public $harga;
    public $pelanggan;

    public function getPesanan()
    {
        return $this->pesanan; 
    }
}
$pesan = new pesanan;
$pesan->menu = "Bakso";
$pesan->harga = 5000;
$pesan->pelanggan = "Budi";

print_r($pesan);

// $menu = array("bakso","sate","ayam");
// $harga = array(3000,2000,4000);

// echo "<h1> Daftar Menu </h1>";
// print_r($menu) ;
// print_r($harga);
?>