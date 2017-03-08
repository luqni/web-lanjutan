<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>web lanjutan</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" charset="utf8" src="../datatables/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="../datatables/js/jquery.dataTables.js"></script>
	
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
		require_once 'class_mahasiswa.php';
		$mhs1 = new Mahasiswa('02001', 'faiz fikri');
		$mhs1->thn_angkatan = 2015;
		$mhs1->prodi = 'SI';
		$mhs1->ipk = 2.9;

		$mhs2 = new Mahasiswa('02002', 'choniyu');
		$mhs2->thn_angkatan = 2015;
		$mhs2->prodi = 'TI';
		$mhs2->ipk = 4;

		$mhs3 = new Mahasiswa('02003', 'azwan');
		$mhs3->thn_angkatan = 2015;
		$mhs3->prodi = 'TI';
		$mhs3->ipk = 3.9;

		$mhs4 = new Mahasiswa('02004', 'budi');
		$mhs4->thn_angkatan = 2015;
		$mhs4->prodi = 'SI';
		$mhs4->ipk = 3.3;

		$ar_mahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4];
	?>

	<table width="100%" border="1" id="example" class="display">
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama Lengkap</th>
				<th>Prodi</th>
				<th>Thn Angkatan</th>
				<th>IPK</th>
				<th>Predikat</th>
			</tr>
		</thead>
		
		<tbody>
			<?php 
				$counter = 1;
				foreach ($ar_mahasiswa as $mhs) {
					echo '<tr><td>' .$counter. '</td>'.
					'<td>' .$mhs->nim. '</td>'.
					'<td>' .$mhs->nama. '</td>'.
					'<td>' .$mhs->prodi. '</td>'.
					'<td>' .$mhs->thn_angkatan. '</td>'.
					'<td>' .$mhs->ipk. '</td>'.
					'<td>' .$mhs->predikat_ipk(). '</td></tr>';
					$counter++;
				}
			?>
		</tbody>
	</table>
	<hr>
    <div>
      <p><b>Lab Pemrograman Web Lanjutan</b><br>Muhammad Luqni Baehaqi<br>STT NF - 2017</p>
    </div>
</div>

</body>
<script>
		$(document).ready(function() {
	    	$('#example').dataTable({
	    		responsive: true
	    	});
		});
	</script>
</html>