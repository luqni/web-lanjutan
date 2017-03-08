<?php 
	include_once 'top.php';
?>

<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal">
		<fieldset>

		<!-- Form Name -->
		<legend>Form Nilai Ujian</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="nilai">Nilai</label>  
		  <div class="col-md-4">
		  <input id="nilai" name="nilai" placeholder="Nilai" class="form-control input-md" type="text">
		    
		  </div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="matkul">Pilih MK</label>
		  <div class="col-md-4">
		    <select id="matkul" name="matkul" class="form-control">
		      <option value="Data Warehouse">Data Warehouse</option>
		      <option value="Analisis Numerik">Analisis Numerik</option>
		      <option value="PBO">PBO</option>
		    </select>
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="nim">NIM</label>  
		  <div class="col-md-4">
		  <input id="nim" name="nim" placeholder="NIM" class="form-control input-md" type="text">
		    
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="simpan"></label>
		  <div class="col-md-4">
		    <button id="simpan" name="simpan" class="btn btn-success">Simpan</button>
		  </div>
		</div>

		</fieldset>
		</form>
	</div>
</div>

<?php 
	include_once 'footer.php';
?>