<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_ajuananggaran extends CI_Model

{
    public function add_pengajuan()
    { 

    }
    public function delete_pengajuan()
    { 

    }
    public function show_pengajuan()
    { 

    }
    public function update_pengajuan()
    { 

    }
    public function showbyid_pengajuan($id)
    { 
        $query = $this->db->get_where('pengajuan_anggaran', array('id_anggota ' => $id, 'status2' => '1'));
         
         return array('nomor' => $query->num_rows(),'pengajuan' => $query->result_array());



    }
    
    
}
