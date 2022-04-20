<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_menutransfer extends CI_Model
{
    private $_table = "transfer";

    public $id_transfer;
    public $id_anggota;
    public $nama_pengirim;
    public $email;
    public $no_telp;
    public $no_rekening;
    public $nama_bank;
    public $tgl_kirim;
    public $kategori;
    public $PPN;
    public $PPH_21;
    public $PPH_22;
    public $PPH_23;
    public $denda;
    public $administrasi_bank;
    public $total_dibayar;
    public $berita;
    public $honor_asesmen;
    public $honor_evaluator;
    public $nilai_kontrak;
    public $honor_tester;
    public $honor_feedback;
    public $pekerjaan;
    public $honor_pewawancara;
    public $honor_korektor_pauli;
    public $lumpsum_transport_bandara;
    public $lumpsum_komsumsi;
    public $lumpsum_transpoet_lok;
    public $waktu_kerja;
    public $lumpsum_uang_cod;

    // public function rules()
    // {
    //     return [
    //         ['field' => 'id_anggota',
    //         'label' => 'Id_anggota',
    //         'rules' => 'numeric'],
            
    //         ['field' => 'nama_pengirim',
    //         'label' => 'Nama_pengirim',
    //         'rules' => 'required'],
            
    //         ['field' => 'email',
    //         'label' => 'Email',
    //         'rules' => 'required'],

    //         ['field' => 'no_telp',
    //         'label' => 'No_telp',
    //         'rules' => 'numeric'],

    //         ['field' => 'no_rekening',
    //         'label' => 'No_rekening',
    //         'rules' => 'numeric'],
            
    //         ['field' => 'nama_bank',
    //         'label' => 'Nama_bank',
    //         'rules' => 'required'],
            
    //         ['field' => 'tgl_kirim',
    //         'label' => 'Tgl_kirim',
    //         'rules' => 'required'],

    //         ['field' => 'description',
    //         'label' => 'Description',
    //         'rules' => 'required'],
            
    //         ['field' => 'PPN',
    //         'label' => 'PPN',
    //         'rules' => 'numeric'],

    //         ['field' => 'PPH_21',
    //         'label' => 'PPH_21',
    //         'rules' => 'numeric'],

    //         ['field' => 'PPH_22',
    //         'label' => 'PPH_22',
    //         'rules' => 'numeric'],

    //         ['field' => 'PPH_23',
    //         'label' => 'PPH_23',
    //         'rules' => 'numeric'],

    //         ['field' => 'denda',
    //         'label' => 'Denda',
    //         'rules' => 'numeric'],

    //         ['field' => 'administrasi_bank',
    //         'label' => 'Administrasi_bank',
    //         'rules' => 'numeric'],

    //         ['field' => 'total_dibayar',
    //         'label' => 'Total_dibayar',
    //         'rules' => 'numeric'],

    //         ['field' => 'berita',
    //         'label' => 'Berita',
    //         'rules' => 'required'],

    //         ['field' => 'honor_asesmen',
    //         'label' => 'Honor_asesmen',
    //         'rules' => 'numeric'],

    //         ['field' => 'honor_evaluator',
    //         'label' => 'Honor_evaluator',
    //         'rules' => 'numeric'],

    //         ['field' => 'nilai_kontrak',
    //         'label' => 'Nilai_kontrak',
    //         'rules' => 'required'],

    //         ['field' => 'honor_tester',
    //         'label' => 'Honor_tester',
    //         'rules' => 'numeric'],

    //         ['field' => 'honor_feedback',
    //         'label' => 'Honor_feedback',
    //         'rules' => 'numeric'],

    //         ['field' => 'pekerjaan',
    //         'label' => 'Pekerjaan',
    //         'rules' => 'required'],

    //         ['field' => 'honor_pewawancara',
    //         'label' => 'Honor_pewawancara',
    //         'rules' => 'numeric'],

    //         ['field' => 'honor_korektor_pauli',
    //         'label' => 'Honor_korektor_pauli',
    //         'rules' => 'numeric'],

    //         ['field' => 'lumpsum_transport_bandara',
    //         'label' => 'Lumpsum_transport_bandara',
    //         'rules' => 'required'],

    //         ['field' => 'lumpsum_komsumsi',
    //         'label' => 'Lumpsum_komsumsi',
    //         'rules' => 'required'],

    //         ['field' => 'lumpsum_transpoet_lok',
    //         'label' => 'Lumpsum_transpoet_lok',
    //         'rules' => 'required'],

    //         ['field' => 'waktu_kerja',
    //         'label' => 'Waktu_kerja',
    //         'rules' => 'required'],

    //         ['field' => 'lumpsum_uang_cod',
    //         'label' => 'Lumpsum_uang_cod',
    //         'rules' => 'required']

    //     ];
    // }

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->$_table, ["id_transfer" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_transfer = uniqid();
        $this->id_anggota = $post["id_anggota"];
        $this->nama_pengirim = $post["nama_pengirim"];
        $this->email = $post["email"];
        $this->no_telp = $post["no_telp"];
        $this->no_rekening = $post["no_rekening"];
        $this->nama_bank = $post["nama_bank"];
        $this->tgl_kirim = $post["tgl_kirim"];
        $this->kategori = $post["kategori"];
        $this->PPN = $post["PPN"];
        $this->PPH_21 = $post["PPH_21"];
        $this->PPH_22 = $post["PPH_22"];
        $this->PPH_23 = $post["PPH_23"];
        $this->denda = $post["denda"];
        $this->administrasi_bank = $post["administrasi_bank"];
        $this->total_dibayar = $post["total_dibayar"];
        $this->berita = $post["berita"];
        $this->honor_asesmen = $post["honor_asesmen"];
        $this->honor_evaluator = $post["honor_evaluator"];
        $this->nilai_kontrak = $post["nilai_kontrak"];
        $this->honor_tester = $post["honor_tester"];
        $this->honor_feedback = $post["honor_feedback"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->honor_pewawancara = $post["honor_pewawancara"];
        $this->honor_korektor_pauli = $post["honor_korektor_pauli"];
        $this->lumpsum_transport_bandara = $post["lumpsum_transport_bandara"];
        $this->lumpsum_komsumsi = $post["lumpsum_komsumsi"];
        $this->lumpsum_transpoet_lok = $post["lumpsum_transpoet_lok"];
        $this->waktu_kerja = $post["waktu_kerja"];
        $this->lumpsum_uang_cod = $post["lumpsum_uang_cod"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_transfer = $post["id"];
        $this->id_anggota = $post["id_anggota"];
        $this->nama_pengirim = $post["nama_pengirim"];
        $this->email = $post["email"];
        $this->no_telp = $post["no_telp"];
        $this->no_rekening = $post["no_rekening"];
        $this->nama_bank = $post["nama_bank"];
        $this->tgl_kirim = $post["tgl_kirim"];
        $this->kategori = $post["kategori"];
        $this->PPN = $post["PPN"];
        $this->PPH_21 = $post["PPH_21"];
        $this->PPH_22 = $post["PPH_22"];
        $this->PPH_23 = $post["PPH_23"];
        $this->denda = $post["denda"];
        $this->administrasi_bank = $post["administrasi_bank"];
        $this->total_dibayar = $post["total_dibayar"];
        $this->berita = $post["berita"];
        $this->honor_asesmen = $post["honor_asesmen"];
        $this->honor_evaluator = $post["honor_evaluator"];
        $this->nilai_kontrak = $post["nilai_kontrak"];
        $this->honor_tester = $post["honor_tester"];
        $this->honor_feedback = $post["honor_feedback"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->honor_pewawancara = $post["honor_pewawancara"];
        $this->honor_korektor_pauli = $post["honor_korektor_pauli"];
        $this->lumpsum_transport_bandara = $post["lumpsum_transport_bandara"];
        $this->lumpsum_komsumsi = $post["lumpsum_komsumsi"];
        $this->lumpsum_transpoet_lok = $post["lumpsum_transpoet_lok"];
        $this->waktu_kerja = $post["waktu_kerja"];
        $this->lumpsum_uang_cod = $post["lumpsum_uang_cod"];
        $this->db->update($this->_table, $this, array('id_transfer' => $post['id']));
    }

    public function delete($id)
    {
        $this->db->delete($this->$_table, array("id_transfer" => $id));
    }
}
