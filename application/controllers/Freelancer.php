<?php
class Freelancer extends CI_Controller

{
    public function registration()
    {
        $data['title'] = '';
        $this->load->view('freelancer/registration');
    }

    public function applied_task()
    {
        $data['title'] = '';
        $this->load->view('freelancer/applied_task');
    }
    public function available_task()
    {
        $data['title'] = '';
        $this->load->view('freelancer/available_task');
    }

    public function dashboard()
    {
        $data['title'] = '';
        $this->load->view('freelancer/dashboard');
    }

    public function freelancer_login(): void
    {
        $data['title'] = '';
        $this->load->view('freelancer/freelancer_login');
    }
    public function my_wallet(): void
    {
        $data['title'] = '';
        $this->load->view('freelancer/my_wallet');
    }

    public function freelancer_notification(): void
    {
        $data['title'] = '';
        $this->load->view('freelancer/freelancer_notification');
    }

    public function ongoing_task(): void
    {
        $data['title'] = '';
        $this->load->view('freelancer/ongoing_task');
    }

    public function completed_task(): void
    {
        $data['title'] = '';
        $this->load->view('freelancer/completed_task');
    }
    public function view_bids(): void
    {
        $data['title'] = '';
        $this->load->view('freelancer/view_bids');
    }

}


