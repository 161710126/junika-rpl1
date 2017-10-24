<?php 
	class biodata {
// property
	var $nama;
	var $tempat_lahir;
	var $kelas;
	var $status;
// method
	function status(){
		if ($this->status = pelajar) $status = 'pelajar';
		return $status;
	}
}
 
// instansiasi Object 
	$ken = new biodata();
 
// memberikan nilai yang terdapat pada property
	$ken->nama="Junika";
	$ken->tempatlahir="palembang";
	$ken->kelas="X RPL 1";
	$ken->status="pelajar";
 
//menampilkan atau mencetak hasil dari method 
	
	echo "Nama :".$ken->nama;
	echo "<br>";
	echo "tempat lahir :".$ken->tempatlahir;
	echo "<br>";
	echo "kelas:".$ken->kelas;
	echo "<br>";
	echo "status :".$ken->status;
	echo "<br>";
?>