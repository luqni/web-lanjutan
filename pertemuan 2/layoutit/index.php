<?php
include_once 'top.php';
?>
<div class="row">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai">Nilai</label>  
  <div class="col-md-4">
  <input id="nilai" name="nilai" placeholder="nilai" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pilih mk">Pilih MK</label>
  <div class="col-md-4">
    <select id="pilih mk" name="pilih mk" class="form-control">
      <option value="1">Data Warehouse</option>
      <option value="2">Web Lanjut</option>
      <option value="3">Basis Data</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nim">NIM</label>  
  <div class="col-md-4">
  <input id="nim" name="nim" placeholder="nim" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>		
</div>

<?php
include_once 'footer.php';
?>