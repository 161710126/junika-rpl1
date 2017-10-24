<?php
class sekolah
{
	var $nama_sekolah;
	var $kepala_sekolah;
	var $jurusan;
	var $guru;
	var $administrasi;
	var $jumlah_kelas;
	var $kurikulum;
	var $nilai;
	// method
	function status(){
		if ($this->nilai >= 75) $status = 'LULUS';
		else $status = 'TIDAK LULUS';
		return $status;
	}
}
  
	$ken = new sekolah();
 
// memberikan nilai yang terdapat pada property
	$ken->nama_sekolah="SMK Assalaam";
	$ken->kepala_sekolah="Junika";
	$ken->jurusan="RPL";
	$ken->guru="pa iik";
    $ken->administrasi="5.000.000";
    $ken->jumlah_kelas="10 kelas";
    $ken->kurikulum="KTSP";
    $ken->nilai=89;
//menampilkan atau mencetak hasil dari method 
	echo "nama sekolah :".$ken->nama_sekolah;
	echo "<br>";
	echo "kepala sekolah :".$ken->kepala_sekolah;
	echo "<br>";
	echo "jurusan :".$ken->jurusan;
	echo "<br>";
	echo "guru :".$ken->guru;
	echo "<br>";
	echo "administrasi:".$ken->administrasi;
	echo "<br>";
	echo "jumlah kelas :".$ken->jumlah_kelas;
	echo "<br>";
	echo "kurikulum:".$ken->kurikulum;
	echo "<br>";
	echo "Nilai :".$ken->nilai;
	echo "<br>";
	echo "Keterangan :".$ken->status();
?>