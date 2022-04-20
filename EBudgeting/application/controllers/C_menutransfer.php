<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_menutransfer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_menutransfer");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["transfer"] = $this->M_menutransfer->getAll();
        $this->load->view("transfers/menutransfer", $data);
    }

    public function add()
    {
        $transfers = $this->M_menutransfer;
        $validation = $this->form_validation;
       

        if ($validation->run()) {
            $transfers->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("transfers/addtransfer");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/C_menutransfer');
       
        $transfers = $this->M_menutransfer;
        $validation = $this->form_validation;
        $validation->set_rules($transfers->rules());

        if ($validation->run()) {
            $transfers->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["transfers"] = $transfers->getById($id);
        if (!$data["transfers"]) show_404();
        
        $this->load->view("admin/transfers/edit_form", $data);
    }

    public function delete($id=null)
    {
    
        if (isset($id)) {
            $this->M_menutransfer->delete($id);
            redirect(site_url('transfers/menutransfer'));
        }else {
            echo "test";
        }
    }
}
