<?php 

class Login extends CI_Controller {

    public function do_login() {

        $inUsername = array(
            'name' => 'username',
            'class' => 'username',
            'placeholder' => 'Masukkan username',
        );
        $inPassword = array(
            'name' => 'password',
            'class' => 'password',
            'placeholder' => 'Masukkan password',
        );
        $btnForm = array(
            "type" => "submit",
            "content" => 'Log in',
            "class" => 'btn__login'
        );
        $data['inUsername'] = $inUsername;
        $data['inPassword'] = $inPassword;
        $data['btnForm'] = $btnForm;
        $data['title'] = 'Login Page';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header');

        $this->load->view('layouts/login');

        $this->load->view('templates/footer');
    }

    public function login() {

        $this->load->library('session');

        $username = $this->input->get('username');
        $password = $this->input->get('password');

        $this->load->model('users');

        $user = $this->users->login($username, $password);
    


        // $userLogin = $this->session->has_userdata($username);

        $data['title'] = 'User Page';
        $data['user'] = $user;
        // $data['userLo'] =$userLogin; 

        if(isset($user->username)){

            $newdata = array(
                'user_id' => $user->id,
                'username' => $user->username,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);



            $this->load->view('templates/head', $data);
            $this->load->view('templates/header');
    
            $this->load->view('layouts/user');
    
            $this->load->view('templates/footer');
        } else {
            redirect('login');
        }
    }

    public function logout() {
        $data['title'] = 'LogOut Page';

            $this->session->sess_destroy();

            $this->load->view('templates/head', $data);
            $this->load->view('templates/header');
    
            $this->load->view('layouts/logout');
    
            $this->load->view('templates/footer');
    }
}


?>