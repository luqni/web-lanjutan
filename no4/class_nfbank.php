<?php
require_once 'class_acountbank.php';
class NFBank{
	private $kumpulan_acountbank = array();
	function __construct() {
		$this->isiacount();//panggil isi acount
	}
	function isiacount(){
		$ab1 = new acountbank("010",5000,"Achmad");
		$ab2 = new acountbank("020",4000,"Mutiara");
		$ab3 = new acountbank("007",2000,"Habibie");
		//masukan ke array
		$this->kumpulan_acountbank['010']=$ab1;
		$this->kumpulan_acountbank['020']=$ab2;
		$this->kumpulan_acountbank['007']=$ab3;
	}
	function cariacount($nomor_acc){
		$obj=null;
		foreach ($this->kumpulan_acountbank as $key => $value) {
			if ($nomor_acc==$key){
				$obj = $value;
				break;//keluar dari looping 
			}
		}
		return $obj;
	}
}
?>