<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_user extends CI_Model

{ 
    public function add_user()
    { 

    }
    public function delete_user()
    { 

    }
    public function update_user()
    { 

    }
    public function show_user($passw = null, $user = null)
    { 
        if (isset($passw) && isset($user)) {
            $query = $this->db->get_where('pegawai', array('username' => $user,'password' => $passw), 1);
            return $query->result_array()[0];
        }
        else {
            $query = $this->db->get('pegawai');
            var_dump($query->result_array());

        }
        
        


    }
    
    
}
