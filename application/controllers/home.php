<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    public function index()
    {
        $this->load->model('Scope_model');  // Load model

        // Ambil data scope
        $data['scope'] = $this->Scope_model->get_all_scope();

        $this->load->model('MainCustomer_model');

        $data['main_customer'] = $this->MainCustomer_model->get_all_customers();

        $this->load->view('template/home_header');
        $this->load->view('home/index', $data);
        $this->load->view('template/home_footer');
    }

    public function about()
    {
        $this->load->view('template/home_header');
        $this->load->view('home/about');
        $this->load->view('template/home_footer');
    }

    public function scope_of_work()
    {
        $this->load->model('Scope_model');  // Load model

        // Ambil data scope
        $data['scope'] = $this->Scope_model->get_all_scope();

        $this->load->view('template/home_header');
        $this->load->view('home/scope_of_work', $data);
        $this->load->view('template/home_footer');
    }

    public function main_customer()
    {
        $this->load->model('MainCustomer_model');

        $data['main_customer'] = $this->MainCustomer_model->get_all_customers();

        $this->load->view('template/home_header');
        $this->load->view('home/main_customer', $data);
        $this->load->view('template.home_footer');
    }
}
