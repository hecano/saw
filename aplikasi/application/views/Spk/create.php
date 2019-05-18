<?php echo validation_errors(); ?>

<div class="container-fluid">
  <h3>Input Data Baru</h3>

<?php echo form_open('create'); ?>
  <label for="nama" class="col-sm-2 control-label">Nama</label>
  <input type="text" name="nama"><br>

  <label for="harga" class="col-sm-2 control-label">Harga (Juta)</label>
  <input type="text" name="harga"><br>

  <label for="ram" class="col-sm-2 control-label">RAM (GB)</label>
  <input type="text" name="ram"><br>

  <label for="memori" class="col-sm-2 control-label">Memori Internal (GB)</label>
  <input type="text" name="memori"><br>

  <label for="processor" class="col-sm-2 control-label">Processor (Core)</label>
  <input type="text" name="processor"><br>

  <label for="kamera" class="col-sm-2 control-label">Kamera (MP)</label>
  <input type="text" name="kamera"><br>

  <input type="submit" name="submit" value="Kirim" class="btn btn-primary">

<?php echo form_close(); ?>
</div>
