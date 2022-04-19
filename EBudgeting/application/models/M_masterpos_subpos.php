<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_masterpos_subpos extends CI_Model

{
    public function add_posM()
    {
        $data = array (
            'id_pos' => '',
            'nama_pos' => $this->input->post('nama')
        );
        $this->db->insert('pos', $data);
    }
    public function delete_posM($id)
    {
        $this->db->delete('pos', array('id_pos' => $id));
    }
    public function update_posM()
    {
        $id = $this->input->post('id_pos');
        $data = array (
            'id_pos' => $id,
            'nama_pos' => $this->input->post('nama')
        );

        $this->db->update('pos', $data, array('id_pos' => $id));
    }
    public function show_posM($id = null)
    {
        if (isset($id)) {
            $query = $this->db->get_where('pos', array('id_pos' => $id));
            return $query->result_array();
            
        }
        else {
            $query = $this->db->get('pos');
            return $query->result_array();
        }
        
    }
    public function addsubposM()
    {
    }
    public function delete_subposM()
    {
    }
    public function update_subposM()
    {
    }
    public function show_subposM($id = null)
    {
        $query = $this->db->get('sub_pos');
        return $query->result_array()[0];
    }
    public function addsubpos2M()
    {
    }
    public function delete_subpos2M()
    {
    }
    public function update_subpos2M()
    {
    }
    public function show_subpos2M($id = null)
    {
        $query = $this->db->get('sub_pos2');
        return $query->result_array()[0];
    }
}
