<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Use Account 2</title>
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

    <?php 
		//include_once 'header.php';
		require_once 'class_accountbank.php';

		$ab1 = new AccountBank("2001", 5000, "Agung Sedayu");
		$ab2 = new AccountBank("2002", 8000, "Sekar Mirah");

		echo '<u>Info sebelum transaksi : </u><br/>';
		$ab1->cetak();
		echo '<br>';
		$ab2->cetak();
		echo '<hr>';

		// Agung sedayu transfer uang 1250 ke sekar mirah
		$ab1->transfer($ab2, 1250);
		echo '<u>Info sesudah transaksi</u><br>';
		$ab1->cetak();
		echo '<br/>';
		$ab2->cetak();
		//include_once 'footer.php';
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