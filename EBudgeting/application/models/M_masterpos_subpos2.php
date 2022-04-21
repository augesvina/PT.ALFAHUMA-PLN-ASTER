<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_masterpos_subpos2 extends CI_Model

{
    public function add_posM()
    {
        $data = array (
            'id_subpos2' => '',
            'nama_subpos2' => $this->input->post('nama')
        );
        $this->db->insert('sub_pos2', $data);
    }
    public function delete_posM($id)
    {
        $this->db->delete('sub_pos2', array('id_subpos2' => $id));
    }
    public function update_posM()
    {
        $id = $this->input->post('id_subpos2');
        $data = array (
            'id_subpos2' => $id,
            'nama_subpos2' => $this->input->post('nama')
        );

        $this->db->update('sub_pos2', $data, array('id_subpos2' => $id));
    }
    public function show_posM($id = null)
    {
        if (isset($id)) {
            $query = $this->db->get_where('sub_pos2', array('id_subpos2' => $id));
            return $query->result_array();
            
        }
        else {
            $query = $this->db->get('sub_pos2');
            return $query->result_array();
        }
        
    }

}
