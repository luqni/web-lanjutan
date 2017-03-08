<?php 
	require_once 'class_accountbank.php';

	class NFBank {
		private $kumpulan_accountbank = array();

		function __construct() {
			$this->isiAccount(); //panggil isi account
		}

		function isiAccount() {
			$ab1 = new AccountBank("010", 5000, "Achmad");
			$ab2 = new AccountBank("020", 4000, "Mutiara");
			$ab3 = new AccountBank("007", 2000, "Habibie");

			//masukkan ke array
			$this->kumpulan_accountbank['010'] = $ab1;
			$this->kumpulan_accountbank['020'] = $ab2;
			$this->kumpulan_accountbank['007'] = $ab3;
		}

		function cariAccount($nomor_Acc) {
			$obj = null;
			foreach ($this->kumpulan_accountbank as $k=>$v) {
				if ($nomor_Acc == $k) {
					$obj = $v;
					break; // keluar dari looping
				}
			}
			return $obj;
		}
	}
?>