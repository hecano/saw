<div class="container">
  <br><br><br>
  <h3>Tabel Daftar Handphone</h3>
  <div class="row">
    <div id="user-content" class="col-md-10">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga (juta)</th>
            <th>RAM (GB)</th>
            <th>Memori (GB)</th>
            <th>Processor (core)</th>
            <th>Kamera (MP)</th>
            <th>Ubah</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
  <?php $j = 0;
  foreach ($tabel as $tabel_list) { ?>
          <tr>
            <td><?php echo $j+1 ?></td>
            <td><?php echo $tabel_list['nama'] ?></td>
            <td><?php echo $tabel_list['harga'] ?></td>
            <td><?php echo $tabel_list['ram'] ?></td>
            <td><?php echo $tabel_list['memori'] ?></td>
            <td><?php echo $tabel_list['processor'] ?></td>
            <td><?php echo $tabel_list['kamera'] ?></td>
            <td><a href="<?php echo site_url('data/update/'.$tabel_list['id']); ?>"> update </a></td>
            <td><a href="<?php echo site_url('data/delete/'.$tabel_list['id']); ?>"> delete </a></td>
          </tr>
  <?php $j+=1;
  } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
