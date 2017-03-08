<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>transfer</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<?php
  include_once 'header.php';
  require_once 'class_nfbank.php';
?> 
<div class="container">
  <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <fieldset>

  <!-- Form Name -->
  <legend>Form Transfer Bank</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="account asal">No. Account Asal</label>  
    <div class="col-md-4">
    <input id="accountAsal" name="accountAsal" placeholder="accountAsal" class="form-control input-md" type="text">
    <span class="help-block">help</span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="account tujuan">No. Account Tujuan</label>  
    <div class="col-md-4">
    <input id="accountTujuan" name="accountTujuan" placeholder="accountTujuan" class="form-control input-md" type="text">
    <span class="help-block">help</span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="jumlah transfer">Jumlah Transfer</label>  
    <div class="col-md-4">
    <input id="jumlahTransfer" name="jumlahTransfer" placeholder="jumlahTransfer" class="form-control input-md" type="text">
    <span class="help-block">help</span>  
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="transfer"></label>
    <div class="col-md-4">
      <button id="transfer" name="transfer" class="btn btn-primary">transfer</button>
    </div>
  </div>

  </fieldset>
  </form>
</div>
<?php 
    error_reporting(E_WARNING);

  if(isset($_POST["transfer"])){
    $accountAsal = $_POST['accountAsal'];
    $accountTujuan = $_POST['accountTujuan'];
    $jumlahTransfer = $_POST['jumlahTransfer'];
    // $nilai = $_POST['nilai'];

    $bank = new NFBank();

    $asal = $bank->cariacount($accountAsal);
    $tujuan = $bank->cariacount($accountTujuan);

  echo '<u> Info Sebelum Transaksi</u><br/>';
  $asal->cetak();
  echo '<br/>';
  $tujuan->cetak();
  echo '<hr/>';

  echo '<u> Info Setelah Transaksi</u><br/>';
  $asal->transfer($tujuan, $jumlahTransfer);
  echo 'Customer ' .$asal->customer. ' Transfer ' .$jumlahTransfer. ' ke ' .$tujuan->customer;
  echo '<br>';
  $asal->cetak();
  echo '<br/>';
  $tujuan->cetak();
  echo '<hr/>';

    // echo "Nomor Account : " .$nfbank->nomor. "Saldonya " .$nfbank->saldo. "<br>";
    // echo "Nim : " .$nilaiMahasiswa->nim. "<br>";
    // echo "Nama Mata Kuliah : " .$nilaiMahasiswa->matkul. "<br>";
    // echo "Nilai : " .$nilaiMahasiswa->nilai. "<br>";
    // echo "Hasil Ujian : " .$hasil. "<br>";
    // echo 'Grade : ' .$grade. "<br>";
  }


  include_once 'footer.php';
  ?>
