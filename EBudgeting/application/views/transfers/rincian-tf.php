<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Transfer</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<h3>Data</h3>
<table class="table table-striped table-middle">
  <tr>
    <th>Email</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
    <tr>
    <th>No HP </th>
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
      </tr>
    <tr>
    <th>Honor Skoring Pauli</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" required></td>
  </tr>
</table>

<h3>Potongan Biaya</h3>
<table class="table table-striped table-middle">
    </tr>
    <tr>
    <th>PPH 21</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Administrasi Bank</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Total yang di bayarkan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
    <tr>
    <th>Berita</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="" required></td>
  </tr>
      </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
