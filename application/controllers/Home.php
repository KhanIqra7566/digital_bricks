<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('home');
    }


    public function login()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('login');
    }

    public function register()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('register');
    }

    public function notification()
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('notification');
    }

    public function wallet(): void
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('wallet');
    }
    public function profile_update(): void
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('profile_update');
    }

    public function posted_task(): void
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('posted_task');
    }

    public function view_posted(): void
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('view_posted');
    }

    public function role_employment(): void
    {
        $data['title'] = '';
        $this->load->view('includes/header-link', $data);
        $this->load->view('role_employment');
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

