<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Users</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Users</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif ($this->session->flashdata('error')) : ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tambah User</h3>
          </div>
          <form role="form" action="<?php base_url('users/create') ?>" method="post">
            <div class="box-body">

              <div class="form-group">
                <label for="groups">Groups</label>
                <select class="form-control" id="groups" name="groups">
                  <option value="">Select Groups</option>
                  <?php foreach ($group_data as $k => $v) : ?>
                    <option value="<?php echo $v['id'] ?>"><?php echo $v['group_name'] ?></option>
                  <?php endforeach ?>
                </select>
                <?= form_error('groups', '<medium class="text-danger">', '</medium>'); ?>
              </div>



              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                <?= form_error('username', '<medium class="text-danger">', '</medium>'); ?>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                <?= form_error('email', '<medium class="text-danger">', '</medium>'); ?>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                <?= form_error('password', '<medium class="text-danger">', '</medium>'); ?>
              </div>

              <div class="form-group">
                <label for="cpassword">Konfirmasi password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off">
                <?= form_error('cpassword', '<medium class="text-danger">', '</medium>'); ?>
              </div>

              <div class="form-group">
                <label for="fname">Nama Awal</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Nama Awal" autocomplete="off">
                <?= form_error('fname', '<medium class="text-danger">', '</medium>'); ?>
              </div>

              <div class="form-group">
                <label for="lname">Nama Akhir</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Nama Akhir" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="phone">No Hp</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="No Hp" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="male" value="1">
                    Laki-laki
                  </label>
                  <label>
                    <input type="radio" name="gender" id="female" value="2">
                    Perempuan
                  </label>
                </div>
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a hsref="<?php echo base_url('users/') ?>" class="btn btn-warning">Kembali</a>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#groups").select2();

    $("#userMainNav").addClass('active');
    $("#createUserSubNav").addClass('active');

  });
</script>