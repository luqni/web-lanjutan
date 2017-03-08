<?php 
	try {
		$dbh = new PDO();
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$rs = $dbh->query("SELECT * FROM produk");

		foreach ($rs as $row) {
			
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>