<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_masterpos_subpos1 extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_masterpos_subpos1');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	public function add_pos()
	{
		$this->form_validation->set_rules('nama', 'Nama Pos', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('masterpos1/addpos');
		} else {

			$this->M_masterpos_subpos1->add_posM();
			redirect(site_url('C_masterpos_subpos1/show_pos'));
		}


		$this->load->view('masterpos1/addpos');
	}
	public function delete_pos($id)
	{
		$this->M_masterpos_subpos1->delete_posM($id);
		redirect(site_url('C_masterpos_subpos1/show_pos'));
	}
	public function update_pos($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Pos', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data['sub_pos'] = $this->M_masterpos_subpos1->show_posM($id)[0];


			$this->load->view('masterpos1/updatepos', $data);
		} else {

			$this->M_masterpos_subpos1->update_posM();
			redirect(site_url('C_masterpos_subpos1/show_pos'));
		}
	}
	public function show_pos()
	{

		$data['sub_pos'] = $this->M_masterpos_subpos1->show_posM();
		print_r($data['sub_pos']);
		$this->load->view('masterpos1/pos', $data);
	}


}
