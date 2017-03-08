<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Transfer</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WEB02</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Review PHP <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP5 OOP <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Login</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <form class="form-horizontal" method="post">
      <fieldset>

      <!-- Form Name -->
      <legend>Form Transfer Bank</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="accountAsal">No Account Asal</label>  
        <div class="col-md-4">
        <input id="accountAsal" name="accountAsal" placeholder="" class="form-control input-md" type="text">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="jumlahTansfer">Jumlah Transfer</label>  
        <div class="col-md-4">
        <input id="jumlahTansfer" name="jumlahTansfer" placeholder="" class="form-control input-md" type="text">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="accountTujuan">No Account Tujuan</label>  
        <div class="col-md-4">
        <input id="accountTujuan" name="accountTujuan" placeholder="" class="form-control input-md" type="text">
          
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="transfer"></label>
        <div class="col-md-4">
          <button id="transfer" name="transfer" class="btn btn-danger">Transfer</button>
        </div>
      </div>

      </fieldset>
    </form>

    <?php
      require_once 'class_nfbank.php';
      error_reporting(E_WARNING);

      if(isset($_POST["transfer"])){
        $accountAsal = $_POST['accountAsal'];
        $jumlahTansfer = $_POST['jumlahTansfer'];
        $accountTujuan = $_POST['accountTujuan'];

        $bank = new NFBank();
        
        $asal = $bank->cariAccount($accountAsal);
        $tujuan = $bank->cariAccount($accountTujuan);

        $asal->cetak();
        echo '<br>';
        $tujuan->cetak();
        echo '<hr>';

        $asal->transfer($tujuan, $jumlahTansfer);

        echo 'Customer ' .$asal->customer. ' Transfer ke ' .$tujuan->customer;
        echo '<br>';
        $asal->cetak();
        echo '<br>';
        $tujuan->cetak();
      }
    ?>

    <hr>
    <b><h4>
      <p>Nama : Choniyu Azwan</p>
      <p>NIM : 0110215051</p>
      <p>Prodi : Teknik Informatika</p>
      <p>Matkul : Pemrograman Web Lanjutan</p>
    </h4></b>

</div>
</body>
</html>