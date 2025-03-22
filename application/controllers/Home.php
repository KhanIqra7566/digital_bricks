<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
}
