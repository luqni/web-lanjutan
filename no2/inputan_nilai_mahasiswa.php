<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inputan nilai mahasiswa</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
	
<div class="container">
	<?php 
		require_once 'class_nilai_mahasiswa.php';
	?>

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

    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<fieldset>

	<!-- Form Name -->
	<legend>Nilai Mahasiswa</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="nim">NIM</label>  
	  <div class="col-md-4">
	  <input id="nim" name="nim" placeholder="" class="form-control input-md" type="text">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="matkul">Pilih MK</label>
	  <div class="col-md-4">
	    <select id="matkul" name="matkul" class="form-control">
	      <option value="Data Warehouse">Data Warehouse</option>
	      <option value="Analisis Numerik">Analisis Numerik</option>
	      <option value="Teori Bahasa dan Automata">Teori Bahasa dan Automata</option>
	      <option value="Pengolahan Citra">Pengolahan Citra</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="nilai">Nilai</label>  
	  <div class="col-md-4">
	  <input id="nilai" name="nilai" placeholder="" class="form-control input-md" type="text">
	    
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for=""></label>
	  <div class="col-md-4">
	    <button id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
	  </div>
	</div>

	</fieldset>
	</form>

	<?php 
		error_reporting(E_WARNING);

	if(isset($_POST["simpan"])){
		$nim = $_POST['nim'];
		$matkul = $_POST['matkul'];
		$nilai = $_POST['nilai'];

		$nilaiMahasiswa = new NilaiMahasiswa($nim, $matkul, $nilai);
		$hasil = $nilaiMahasiswa->hasil();
		$grade = $nilaiMahasiswa->grade();

		echo "Nim : " .$nilaiMahasiswa->nim. "<br>";
		echo "Nama Mata Kuliah : " .$nilaiMahasiswa->matkul. "<br>";
		echo "Nilai : " .$nilaiMahasiswa->nilai. "<br>";
		echo "Hasil Ujian : " .$hasil. "<br>";
		echo 'Grade : ' .$grade. "<br>";
	}
	?>

	<hr>
    <div>
      <p><b>Lab Pemrograman Web Lanjutan</b><br>Muhammad Luqni Baehaqi<br>STT NF - 2017</p>
    </div>
</div>

</body>
</html>