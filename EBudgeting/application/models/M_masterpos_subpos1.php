<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_masterpos_subpos1 extends CI_Model

{
    public function add_posM()
    {
        $data = array (
            'id_subpos' => '',
            'nama_subpos' => $this->input->post('nama')
        );
        $this->db->insert('sub_pos', $data);
    }
    public function delete_posM($id)
    {
        $this->db->delete('sub_pos', array('id_subpos' => $id));
    }
    public function update_posM()
    {
        $id = $this->input->post('id_subpos');
        $data = array (
            'id_subpos' => $id,
            'nama_subpos' => $this->input->post('nama')
        );

        $this->db->update('sub_pos', $data, array('id_subpos' => $id));
    }
    public function show_posM($id = null)
    {
        if (isset($id)) {
            $query = $this->db->get_where('sub_pos', array('id_subpos' => $id));
            return $query->result_array();
            
        }
        else {
            $query = $this->db->get('sub_pos');
            return $query->result_array();
        }
        
    }

}
