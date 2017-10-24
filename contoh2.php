<?php 
	class murid {
// property
	var $nama;
	var $jeniskelamin;
	var $nim;
	var $nilai;
// method
	function status(){
		if ($this->nilai >= 75) $status = 'LULUS';
		else $status = 'TIDAK LULUS';
		return $status;
	}
}
 
// instansiasi Object 
	$ken = new murid();
 
// memberikan nilai yang terdapat pada property
	$ken->nama="Junika";
	$ken->jeniskelamin="Laki-laki";
	$ken->nim=12234;
	$ken->nilai=89;
 
//menampilkan atau mencetak hasil dari method 
	echo "Id :".$ken->nim;
	echo "<br>";
	echo "Nama :".$ken->nama;
	echo "<br>";
	echo "Jenis kelamin :".$ken->jeniskelamin;
	echo "<br>";
	echo "Nilai :".$ken->nilai;
	echo "<br>";
	echo "Keterangan :".$ken->status();
?>