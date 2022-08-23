<?php 

class About extends CI_Controller {

    public function my_profile() {

        $data['title'] = 'About Page';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header');

        $this->load->view('layouts/about');

        $this->load->view('templates/footer');
    }
}


?>