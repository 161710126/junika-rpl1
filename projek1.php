<?php
   class perpustakaan{
   	public $nama ="junika";
    public $buku = "anak soleh";
  	public $tanggal = 12;

   }
$perpustakaan = new perpustakaan;
echo "nama peminjam :".$perpustakaan->nama.'<br>';
  
 


   class mobil{
   	public $nama ="pajero";
    public $warna = "hitam";
  	public $tanggal = 200000000;

   }
$mobil = new mobil;
echo "nama mobil :".$mobil->nama.'<br>';
  

 



  class sapi{
   	public $hidung =2;
    public $kaki = 4;
  	public $suara = "mooooh";

   }
$sapi = new sapi;
echo "bunyi suara :".$sapi->suara.'<br>';
   
   class motor{
   	public $nama ="vixion";
    public $warna = "putih";
  	public $harga = 15000000;

   }
$motor = new motor;
echo "harga motor :".$motor->harga;


?>