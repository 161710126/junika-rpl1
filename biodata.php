<?php
 class orang{
 	public $nama;
 	public $tempatlahir;
 	public $kelas;
 	public $status;

    public function __construct($nama,$tempatlahir,$kelas,$status,$cita_cita){
    	$this->nama=$nama;
    	$this->tempatlahir=$tempatlahir;
    	$this->kelas=$kelas;
    	$this->status=$status;
        $this->cita_cita=$cita_cita;
    }
  //  public function set_nama($nama){
  //  	$this->nama=$nama;
  //  }
    public function get_nama(){
    	return $this->nama;
    }
  //  public function set_tempatlahir($tempatlahir){
  //  	$this->tempatlahir=$tempatlahir;
  //  }
    public function get_tempatlahir(){
    	return $this->tempatlahir;
    }
  //  public function set_kelas($kelas){
  //  	$this->kelas=$kelas;
  //  }
    public function get_kelas(){
    	return $this->kelas;
    }
  //  public function set_status($status){
  //  	$this->status=$status;
  //  }
    public function get_status(){
    	return $this->status;
    }
  //  public function set_cita_cita($cita_cita){
  //    $this->cita_cita=$cita_cita;
  //  }
    public function get_cita_cita(){
        return $this->cita_cita;
    }
 }

?>