<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/C_menutransfer') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/C_menutransfer/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $transfers->id_transfer?>" />

							<div class="form-group">
								<label for="id_anggota ">Id_anggota </label>
								<input class="form-control <?php echo form_error('id_anggota ') ? 'is-invalid':'' ?>"
								 type="number" name="id_anggota " min="0" placeholder="id_anggota " value="<?php echo $transfers->id_anggota  ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_anggota ') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_pengirim">Nama_pengirim*</label>
								<input class="form-control <?php echo form_error('nama_pengirim') ? 'is-invalid':'' ?>"
								 type="text" name="nama_pengirim" placeholder="nama_pengirim" value="<?php echo $transfers->nama_pengirim ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_pengirim') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="email">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="email" value="<?php echo $transfers->email ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="no_telp">No_telp</label>
								<input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
								 type="number" name="no_telp" min="0" placeholder="no_telp" value="<?php echo $transfers->no_telp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('no_telp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="no_rekening">No_rekening</label>
								<input class="form-control <?php echo form_error('no_rekening') ? 'is-invalid':'' ?>"
								 type="number" name="no_rekening" min="0" placeholder="no_rekening" value="<?php echo $transfers->no_rekening ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('no_rekening') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="nama_bank">Nama_bank*</label>
								<input class="form-control <?php echo form_error('nama_bank') ? 'is-invalid':'' ?>"
								 type="text" name="nama_bank" placeholder="nama_bank" value="<?php echo $transfers->nama_bank ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_bank') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="tgl_kirim">Tgl_kirim*</label>
								<input class="form-control <?php echo form_error('tgl_kirim') ? 'is-invalid':'' ?>"
								 type="text" name="tgl_kirim" placeholder="tgl_kirim" value="<?php echo $transfers->tgl_kirim ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_kirim') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="kategori">Kategori*</label>
								<input class="form-control <?php echo form_error('kategori') ? 'is-invalid':'' ?>"
								 type="text" name="kategori" placeholder="kategori" value="<?php echo $transfers->kategori ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kategori') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="PPN">PPN</label>
								<input class="form-control <?php echo form_error('PPN') ? 'is-invalid':'' ?>"
								 type="number" name="PPN" min="0" placeholder="PPN" value="<?php echo $transfers->PPN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('PPN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="PPH_21">PPH_21</label>
								<input class="form-control <?php echo form_error('PPH_21') ? 'is-invalid':'' ?>"
								 type="number" name="PPH_21" min="0" placeholder="PPH_21" value="<?php echo $transfers->PPH_21 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('PPH_21') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="PPH_22">PPH_22</label>
								<input class="form-control <?php echo form_error('PPH_22') ? 'is-invalid':'' ?>"
								 type="number" name="PPH_22" min="0" placeholder="PPH_22" value="<?php echo $transfers->PPH_22 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('PPH_22') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="PPH_23">PPH_23</label>
								<input class="form-control <?php echo form_error('PPH_23') ? 'is-invalid':'' ?>"
								 type="number" name="PPH_23" min="0" placeholder="PPH_23" value="<?php echo $transfers->PPH_23 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('PPH_23') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="denda">Denda</label>
								<input class="form-control <?php echo form_error('denda') ? 'is-invalid':'' ?>"
								 type="number" name="denda" min="0" placeholder="denda" value="<?php echo $transfers->denda ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('denda') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="administrasi_bank">Administrasi_bank</label>
								<input class="form-control <?php echo form_error('administrasi_bank') ? 'is-invalid':'' ?>"
								 type="number" name="administrasi_bank" min="0" placeholder="administrasi_bank" value="<?php echo $transfers->administrasi_bank ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('administrasi_bank') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="total_dibayar">Total_dibayar</label>
								<input class="form-control <?php echo form_error('total_dibayar') ? 'is-invalid':'' ?>"
								 type="number" name="total_dibayar" min="0" placeholder="total_dibayar" value="<?php echo $transfers->total_dibayar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('total_dibayar') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="berita">Berita*</label>
								<input class="form-control <?php echo form_error('berita') ? 'is-invalid':'' ?>"
								 type="text" name="berita" placeholder="berita" value="<?php echo $transfers->berita ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('berita') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="honor_asesmen">Honor_asesmen</label>
								<input class="form-control <?php echo form_error('honor_asesmen') ? 'is-invalid':'' ?>"
								 type="number" name="honor_asesmen" min="0" placeholder="honor_asesmen" value="<?php echo $transfers->honor_asesmen ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('honor_asesmen') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="honor_evaluator">Honor_evaluator</label>
								<input class="form-control <?php echo form_error('honor_evaluator') ? 'is-invalid':'' ?>"
								 type="number" name="honor_evaluator" min="0" placeholder="honor_evaluator" value="<?php echo $transfers->honor_evaluator ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('honor_evaluator') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="nilai_kontrak">Nilai_kontrak*</label>
								<input class="form-control <?php echo form_error('nilai_kontrak') ? 'is-invalid':'' ?>"
								 type="text" name="nilai_kontrak" placeholder="nilai_kontrak" value="<?php echo $transfers->nilai_kontrak ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nilai_kontrak') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="honor_tester">Honor_tester</label>
								<input class="form-control <?php echo form_error('honor_tester') ? 'is-invalid':'' ?>"
								 type="number" name="honor_tester" min="0" placeholder="honor_tester" value="<?php echo $transfers->honor_tester ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('honor_tester') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="honor_feedback">Honor_feedback</label>
								<input class="form-control <?php echo form_error('honor_feedback') ? 'is-invalid':'' ?>"
								 type="number" name="honor_feedback" min="0" placeholder="honor_feedback" value="<?php echo $transfers->honor_feedback ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('honor_feedback') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="pekerjaan">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan" placeholder="pekerjaan" value="<?php echo $transfers->pekerjaan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="honor_pewawancara">Honor_pewawancara</label>
								<input class="form-control <?php echo form_error('honor_pewawancara') ? 'is-invalid':'' ?>"
								 type="number" name="honor_pewawancara" min="0" placeholder="honor_pewawancara" value="<?php echo $transfers->honor_pewawancara ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('honor_pewawancara') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="honor_korektor_pauli">Honor_korektor_pauli</label>
								<input class="form-control <?php echo form_error('honor_korektor_pauli') ? 'is-invalid':'' ?>"
								 type="number" name="honor_korektor_pauli" min="0" placeholder="honor_korektor_pauli" value="<?php echo $transfers->honor_korektor_pauli ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('honor_korektor_pauli') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="lumpsum_transport_bandara">Lumpsum_transport_bandara*</label>
								<input class="form-control <?php echo form_error('lumpsum_transport_bandara') ? 'is-invalid':'' ?>"
								 type="text" name="lumpsum_transport_bandara" placeholder="lumpsum_transport_bandara" value="<?php echo $transfers->lumpsum_transport_bandara ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('lumpsum_transport_bandara') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="lumpsum_komsumsi">Lumpsum_komsumsi*</label>
								<input class="form-control <?php echo form_error('lumpsum_komsumsi') ? 'is-invalid':'' ?>"
								 type="text" name="lumpsum_komsumsi" placeholder="lumpsum_komsumsi" value="<?php echo $transfers->lumpsum_komsumsi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('lumpsum_komsumsi') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="lumpsum_transpoet_lok">lumpsum_transpoet_lok*</label>
								<input class="form-control <?php echo form_error('lumpsum_transpoet_lok') ? 'is-invalid':'' ?>"
								 type="text" name="lumpsum_transpoet_lok" placeholder="lumpsum_transpoet_lok" value="<?php echo $transfers->lumpsum_transpoet_lok ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('lumpsum_transpoet_lok') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="waktu_kerja">Waktu_kerja*</label>
								<input class="form-control <?php echo form_error('waktu_kerja') ? 'is-invalid':'' ?>"
								 type="text" name="waktu_kerja" placeholder="waktu_kerja" value="<?php echo $transfers->waktu_kerja ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('waktu_kerja') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="lumpsum_uang_cod">Lumpsum_uang_cod*</label>
								<input class="form-control <?php echo form_error('lumpsum_uang_cod') ? 'is-invalid':'' ?>"
								 type="text" name="lumpsum_uang_cod" placeholder="lumpsum_uang_cod" value="<?php echo $transfers->lumpsum_uang_cod ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('lumpsum_uang_cod') ?>
								</div>
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
