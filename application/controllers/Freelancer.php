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

    public function dashboard()
    {
        $data['title'] = '';
        $this->load->view('freelancer/dashboard');
    }
}