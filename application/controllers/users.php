<?php 

class Users extends CI_Controller {


    public function show() {
        // $this->load->model('user_model');

        $data['users'] = $this->user_model->get_users(2);


        $this->load->view('user_view', $data);

        // foreach ($result as $object) {
        //     echo $object->username . "<br>";
        // }
    }

    public function insert() {

        $username = 'peter';
        $password = '123';

        $this->user_model->create_user([
            'username' => $username,
            'password' => $password
        ]);
    }
}


?>