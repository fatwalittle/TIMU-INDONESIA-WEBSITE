<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index() {
        // Set rules untuk form validation dengan pesan error khusus
        $this->form_validation->set_rules(
            'username', 
            'Username', 
            'required|trim|min_length[5]', 
            [
                'required' => 'Username wajib diisi.',
                'min_length' => 'Username harus terdiri dari minimal 5 karakter.'
            ]
        );
        $this->form_validation->set_rules(
            'password', 
            'Password', 
            'required|trim|min_length[8]', 
            [
                'required' => 'Password wajib diisi.',
                'min_length' => 'Password harus terdiri dari minimal 8 karakter.'
            ]
        );
    
        // Jika form validation gagal, kembali ke halaman login dengan menampilkan pesan error
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            // Ambil input dari form
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            // Cari user berdasarkan username
            $user = $this->db->get_where('user', ['username' => $username])->row_array();
    
            // Cek apakah user ditemukan
            if ($user) {
                // Cek apakah password yang dimasukkan sama dengan password di database
                if ($password === $user['password']) {
                    // Jika password cocok, simpan data user di session
                    $data = [
                        'id' => $user['id'],
                        'username' => $user['username']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('auth');
                    }
                } else {
                    // Jika password salah, tampilkan pesan error
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Username / Password Anda Salah! </div>');
                    redirect('auth');
                }
            } else {
                // Jika username tidak ditemukan, tampilkan pesan error
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Username / Password Anda Salah! </div>');
                redirect('auth');
            }
        }
    }

    public function logout() {
        // Hapus semua data session
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
    
        // Redirect ke halaman login
        redirect('auth');
    }
}    