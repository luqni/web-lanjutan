<?php 
	require_once 'class_account.php';

	class AccountBank extends Account {
		var $customer;

		function __construct($no, $saldo_awal, $cust) {
			parent::__construct($no, $saldo_awal);
			$this->customer = $cust;
		}

		function cetak() {
			parent::cetak();
			echo ', Customer : ' .$this->customer;
		}

		function transfer($obj_account, $uang) {
			$obj_account->deposit($uang);
			$this->withdraw($uang);
		}
	}
?>