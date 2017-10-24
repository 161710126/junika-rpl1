<?php
require_once 'biodata.php';

$orang1 =new orang('junika','palembang','XI RPL 1','pelajar','pilot');

echo "Namanya :".$orang1->get_nama().'<br>';
echo "Tempat Lahir :".$orang1->get_tempatlahir().'<br>';
echo "Kelas :".$orang1->get_kelas().'<br>';
echo "Status :".$orang1->get_status().'<br>';
echo "Cita-cita :".$orang1->get_Cita_cita().'<br>';



?>