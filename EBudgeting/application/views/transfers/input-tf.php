<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Transfer</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<h3>A. Data</h3>
<table class="table table-striped table-middle">
  <tr>
    <th>Nama </th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
    <tr>
    <th>Email </th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
    <tr>
    <th>No HP</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
  </tr>
    <tr>
    <th>No Rekening</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
    </tr>
    <tr>
    <th>Nama BANK</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
    </tr>
    <tr>
    <th>Tanggal kirim</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
</table>

<h3>B. Assesor</h3>
<table class="table table-striped table-middle">
    </tr>
    <tr>
    <th>Honor Assesment</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Honor Evaluator</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Honor Tester</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Honor Feedback Giver</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Honor Pewawancara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Honor Konektor Pauli</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Lumpsum Konsumsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Lumpsum Uang Cuci</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Lumpsum Honor Lokal</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Lumpsum Honor Bandara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control selectlive" name="agama_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katholik">Katholik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghucu">Konghucu</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pendidikan Terakhir</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="pendidikan_terakhir_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Tidak Sekolah">Tidak Sekolah</option>
        <option value="Tidak Tamat SD">Tidak Tamat SD</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pekerjaan_warga"></td>
  </tr>
  <tr>
    <th>Status Perkawinan</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="status_perkawinan_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Kawin">Kawin</option>
        <option value="Tidak Kawin">Tidak Kawin</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Status Tinggal</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="status_warga" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
      </select>
    </td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
