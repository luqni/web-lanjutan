<?php
require_once 'class_acount.php';
class acountbank extends acount {
	var $customer;

	function __construct($no, $saldo_awal, $cust){
		parent::__construct($no, $saldo_awal);
		$this->customer = $cust;

	}

	function cetak(){
		parent::cetak();
		echo ' , Customer ' .$this->customer;
	}

	function transfer ($obj_acount, $uang){
		$obj_acount->deposit($uang);
		$this->withdraw($uang);
	}
}


?>