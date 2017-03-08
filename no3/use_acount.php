<?php
require_once 'class_acount.php';

$ac1 = new acount ('001', 5000);
$ac2 = new acount ('002', 3000);

// //ac1 menabung 500
// $ac1->deposit(500);
// //ac1 ambil uang 300
// $ac2->withdraw(300);
//cetak info
echo 'Info Account Sebelum Transaksi : <br/>';
$ac1->cetak();
echo '<br/>';
$ac2->cetak();
echo '<hr/>';

echo 'Info Account Setelah Transaksi : <br/>';
$ac1->deposit(200);
$ac1->cetak();
echo '<br/>';
$ac2->cetak();
echo '<hr/>';


?>
<div>
    <p><b>Lab Pemrograman Web Lanjutan</b><br>Muhammad Luqni Baehaqi<br>STT NF - 2017</p>
</div>