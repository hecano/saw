<?php $i=0;
  foreach ($tabel as $tabel_list) {
    $naman[$i] = $tabel_list['nama'];

    $harhar[$i] = $min_harga / $tabel_list['harga'];
    $ramram[$i] = $tabel_list['ram'] / $max_ram;
    $memmem[$i] = $tabel_list['memori'] / $max_memori;
    $propro[$i] = $tabel_list['processor'] / $max_processor;
    $kamkam[$i] = $tabel_list['kamera'] / $max_kamera;

    $Whar[$i] = $harhar[$i] * 0.1;
    $Wram[$i] = $ramram[$i] * 0.25;
    $Wmem[$i] = $memmem[$i] * 0.3;
    $Wpro[$i] = $propro[$i] * 0.3;
    $Wkam[$i] = $kamkam[$i] * 0.05;

    $vv[$i] = $Whar[$i] + $Wram[$i] + $Wmem[$i] + $Wpro[$i] + $Wkam[$i];

    $i+=1;
    } ?>
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
      			  </tr>
  <?php $j+=1;
  } ?>
  </tbody>
  </table>
</div>
  </div>
  <h3>Tabel Normalisasi</h3>
  <div class="row">
    <div id="user-content" class="col-md-10">
      <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
            </tr>
          </thead>
          <tbody>
  <?php $j = 0;
  foreach ($tabel as $tabel_list) { ?>

            <tr>
              <td><?php echo $j+1 ?></td>
              <td><?php echo $tabel_list['nama'] ?></td>
              <td><?php echo $ramram[$j] ?></td>
              <td><?php echo $ramram[$j] ?></td>
              <td><?php echo $memmem[$j] ?></td>
              <td><?php echo $propro[$j] ?></td>
              <td><?php echo $kamkam[$j] ?></td>
            </tr>

  <?php $j+=1;
  } ?>
          </tbody>
          </table>
  </div>
    </div>

  <h3>Nilai Ranking</h3>
  <div class="row">
    <div id="user-content" class="col-md-10">
      <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody>
  <?php $j = 0;
  foreach ($tabel as $tabel_list) { ?>
            <tr>
              <td><?php echo $j+1 ?></td>
              <td><?php echo $tabel_list['nama'] ?></td>
              <td><?php echo $vv[$j] ?></td>
            </tr>

  <?php $j+=1;
  } ?>
        </tbody>
        </table>
      </div>
    </div>

<?php
  $jumlah = count($vv);
  $maxam = $vv[0];
  $ind = 0;
  for($x = 1; $x < $jumlah; $x++){
    if ($vv[$x] > $maxam) {
		    $maxam = $vv[$x];
        $ind = $x;
	     }
     }
 ?>
  <h3>Kesimpulan</h3>
    <p>Dari hasil perhitungan ranking diatas, maka penilaian Handphone terbaik adalah <b><?php echo $naman[$ind] ?></b> dengan nilai <?php echo $maxam ?> </p>
</div>
