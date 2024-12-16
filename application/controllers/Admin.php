<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Memuat model MainCustomer_model
        $this->load->model('MainCustomer_model');

        // Memuat model Scope_model
        $this->load->model('Scope_model');

        // Pengecekan session, apakah user sudah login atau belum
        if (!$this->session->userdata('username')) {
            // Jika belum login, redirect ke halaman login
            redirect('auth');
        }
    }

    public function index() {
        // Ambil jumlah customer
        $data['total_customers'] = $this->MainCustomer_model->get_total_customers();

        // Ambil jumlah scope
        $data['total_scopes'] = $this->Scope_model->get_total_scope();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/index', $data);
    }
}