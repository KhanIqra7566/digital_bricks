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
    public function manage_tasks()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('manage-tasks');
    }
    public function manage_bidders()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('manage-bidders');
    }
    public function active_bids()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('active-bids');
    }
    public function post_task()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('post-task');
    }
}
