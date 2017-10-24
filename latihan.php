
<?php
require_once 'penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(21,3);
echo "========================".'<br>';
echo "perhitungan bilangan 21 dengan 3".'<br>';
echo "========================".'<br>';
echo "hasil penjumlahan :".$penjumlahan->get_penjumlahan1().'<br>';
echo "hasil pengurangan :".$penjumlahan->get_penjumlahan2().'<br>';
echo "hasil perkalian :".$penjumlahan->get_penjumlahan3().'<br>';
echo "hasil pembagian :".$penjumlahan->get_penjumlahan4().'<br>';


?>