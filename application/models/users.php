<?php 

class Users extends CI_Model {

    public function login($username, $password) {
        $this->db->select('id, username, password');
        $this->db->where(['username' => $username, 'password' => $password]);
        $this->db->from('users');
        $query = $this->db->get()->row();

        return $query;
    }
}

?>