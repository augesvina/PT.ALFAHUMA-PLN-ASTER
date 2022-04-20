<!DOCTYPE html>
<html lang="en">



				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/C_menutransfer/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
    									<th>id_anggota</th>
    									<th>nama_pengirim</th>
    									<th>email</th>
    									<th>no_telp</th>
    									<th>no_rekening</th>
    									<th>nama_bank</th>
    									<th>tgl_kirim</th>
    									<th>kategori</th>
    									<th>PPN</th>
    									<th>PPH_21</th>
    									<th>PPH_22</th>
    									<th>PPH_23</th>
    									<th>denda</th>
    									<th>administrasi_bank</th>
    									<th>total_dibayar</th>
    									<th>berita</th>
    									<th>honor_asesmen</th>
    									<th>honor_evaluator</th>
    									<th>nilai_kontrak</th>
    									<th>honor_tester</th>
    									<th>honor_feedback</th>
    									<th>pekerjaan</th>
    									<th>honor_pewawancara</th>
    									<th>honor_korektor_pauli</th>
    									<th>lumpsum_transport_bandara</th>
    									<th>lumpsum_komsumsi</th>
    									<th>lumpsum_transpoet_lok</th>
    									<th>waktu_kerja</th>
    									<th>lumpsum_uang_cod</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($transfer as $transfers): ?>
									<tr>
    									<td>
											<?php echo $transfers->id_anggota ?>
										</td>
    									<td>
											<?php echo $transfers->nama_pengirim ?>
										</td>
    									<td>
											<?php echo $transfers->email ?>
										</td>
    									<td>
											<?php echo $transfers->no_telp ?>
										</td>
    									<td>
											<?php echo $transfers->no_rekening ?>
										</td>
    									<td>
											<?php echo $transfers->nama_bank ?>
										</td>
    									<td>
											<?php echo $transfers->tgl_kirim ?>
										</td>
    									<td>
											<?php echo $transfers->kategori ?>
										</td>
    									<td>
											<?php echo $transfers->PPN ?>
										</td>
    									<td>
											<?php echo $transfers->PPH_21 ?>
										</td>
    									<td>
											<?php echo $transfers->PPH_22 ?>
										</td>
    									<td>
											<?php echo $transfers->PPH_23 ?>
										</td>
    									<td>
											<?php echo $transfers->denda ?>
										</td>
    									<td>
											<?php echo $transfers->administrasi_bank ?>
										</td>
    									<td>
											<?php echo $transfers->total_dibayar ?>
										</td>
    									<td>
											<?php echo $transfers->berita ?>
										</td>
    									<td>
											<?php echo $transfers->honor_asesmen ?>
										</td>
    									<td>
											<?php echo $transfers->honor_evaluator ?>
										</td>
    									<td>
											<?php echo $transfers->nilai_kontrak ?>
										</td>
    									<td>
											<?php echo $transfers->honor_tester ?>
										</td>
    									<td>
											<?php echo $transfers->honor_feedback ?>
										</td>
    									<td>
											<?php echo $transfers->pekerjaan ?>
										</td>
    									<td>
											<?php echo $transfers->honor_pewawancara ?>
										</td>
    									<td>
											<?php echo $transfers->honor_korektor_pauli ?>
										</td>
    									<td>
											<?php echo $transfers->lumpsum_transport_bandara ?>
										</td>
    									<td>
											<?php echo $transfers->lumpsum_komsumsi ?>
										</td>
    									<td>
											<?php echo $transfers->lumpsum_transpoet_lok ?>
										</td>
    									<td>
											<?php echo $transfers->waktu_kerja ?>
										</td>
    									<td>
											<?php echo $transfers->lumpsum_uang_cod ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/C_menutransfer/edit/'.$transfers->id_transfer) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/C_menutransfer/delete/'.$transfers->id_transfer) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
