<?php 

class User_model extends CI_Model {

    public function get_users($user_id) {

        $this->db->where('id', $user_id);
        $query = $this->db->get('users');

        return $query->result();
        //  $query = $this->db->get('users');

        // return $query->result();
    }

    public function create_user($data) {
        $this->db->insert('users', $data);
    }

}

?>