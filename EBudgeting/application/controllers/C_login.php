<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('session');
		$this->load->model('M_ajuananggaran');
	}

	public function index()
	{
		$id_jabatan = $this->session->userdata('id_jabatan');

		if (isset($id_jabatan)) {
			# code...
			redirect('C_login/login_admin');
		} else {
			$this->load->view('login/login');
		}
	}

	public function authentikasi_admin()
	{


		$this->load->library('form_validation');
		// Form Validation
		$this->form_validation->set_rules('user', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');


		$user = $this->input->post('user');
		$pass = $this->input->post('pass');





		if ($this->form_validation->run() == FALSE) {
			redirect(base_url("C_login"));
		} else {
			$query = $this->M_user->show_user($pass, $user);
			// var_dump($query);
			$id_jabatan = $query['id_jabatan'];
			$nama_anggota = $query['nama_anggota'];
			$id_anggota = $query['id_anggota'];
			$akun = array(
				'id_jabatan' => $id_jabatan,
				'nama_anggota' => $nama_anggota,
				'id_anggota' =>  $id_anggota
			);
			$this->session->set_userdata($akun);
			redirect('C_login/login_admin');
		}





		// $status_admin = $_POST['status'];



	}
	public function login_admin()
	{
		$id_anggota = $this->session->userdata('id_anggota');
		$pengajuan = $this->M_ajuananggaran->showbyid_pengajuan($id_anggota);

		$data['nomor'] = $pengajuan['nomor'];
		$data['pengajuan'] = $pengajuan['pengajuan'];




		$id_jabatan = $this->session->userdata('id_jabatan');
		if ($id_jabatan == "3") {
			$this->load->view('dashboard/dashboard');
		} elseif ($id_jabatan == "2") {
			$this->load->view('templatesub/header', $data);
			$this->load->view('templatesub/sidebar', $data);
			$this->load->view('dashboard/dashboard_bidang.php', $data);
			$this->load->view('templatesub/footer', $data);
		} elseif ($id_jabatan == "1") {
			$this->load->view('templatesub/header', $data);
			$this->load->view('templatesub/sidebar', $data);
			$this->load->view('dashboard/dashboard_subbidang.php', $data);
			$this->load->view('templatesub/footer', $data);
		} else {
			redirect(base_url("C_login"));
		}


		// $this->load->view('dashboard/dashboard');
	}
	public function logout_admin()
	{
		$akun = array('id_jabatan', 'nama_anggota', 'id_anggota');


		$this->session->unset_userdata($akun);


		$this->session->sess_destroy();
		redirect(base_url("C_login"));
	}
}
