<?php
class buku
{
	var $judul_buku;
	var $pengarang;
	var $penerbit;
	var $tahun;
}

$buku_junika = new buku();

$buku_junika -> judul_buku="pintu taubat";
$buku_junika -> pengarang="muhammad";
$buku_junika -> penerbit="junika";
$buku_junika -> tahun="2005";
$buku_junika -> harga="25.000";

echo $buku_junika ->judul_buku;
echo "<br>";
echo $buku_junika ->pengarang;
echo "<br>";
echo $buku_junika ->penerbit;
echo "<br>";
echo $buku_junika ->tahun;
echo "<br>";
echo $buku_junika ->harga;
echo "<br>";
?>