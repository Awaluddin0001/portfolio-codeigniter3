<?php 

class Home extends CI_Controller {

    public function index() {

        $data['title'] = 'Home Page';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header');

        $this->load->view('layouts/home');

        $this->load->view('templates/footer');
    }
}


?>