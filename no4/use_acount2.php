<?php
include_once 'header.php';
require_once 'class_acountbank.php';

$ab1 = new acountbank ("2001",5000," Agung Sedayu");
$ab2 = new acountbank ("2022",8000," Sekar Mirah");

echo '<u> Info Sebelum Transaksi</u><br/>';
$ab1->cetak();
echo '<br/>';
$ab2->cetak();
echo '<hr/>';
//Agung sedayu mengirim uang ke sekar mirah
$ab1->transfer($ab2, 1250);
echo '<u> Info Setelah Transaksi</u><br/>';
$ab1->cetak();
echo '<br/>';
$ab2->cetak();
echo '<hr/>';
echo '<br/>';

include_once 'footer.php';
?>