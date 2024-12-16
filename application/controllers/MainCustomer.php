<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainCustomer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Memuat model MainCustomer_model
        $this->load->model('MainCustomer_model');

        // Memuat library form_validation dan upload
        $this->load->library(['form_validation', 'upload']);

        // Memuat helper form dan url
        $this->load->helper(['form', 'url']);

        // Pengecekan session, apakah user sudah login atau belum
        if (!$this->session->userdata('username')) {
            // Jika belum login, redirect ke halaman login
            redirect('auth');
        }
    }

    public function index()
    {
        // Mengambil data customer dari database
        $data['customers'] = $this->db->get('main_customer')->result();

        // Mengambil data user untuk ditampilkan di view
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // Mengirim data ke view
        $this->load->view('admin/main_customer', $data);
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // Menampilkan form tambah customer
        $this->load->view('admin/create_main_customer', $data);
    }

    public function store()
    {
        // Set timezone ke Indonesia
        date_default_timezone_set('Asia/Jakarta');

        // Validasi untuk nama customer
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman form
            $this->load->view('admin/create_main_customer');
        } else {
            // Konfigurasi untuk upload logo
            $config['upload_path'] = './uploads/logos/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // ukuran maksimal 2MB
            $config['file_name'] = time() . '_' . $_FILES['logo_customer']['name'];

            $this->upload->initialize($config);

            // Jika upload berhasil
            if ($this->upload->do_upload('logo_customer')) {
                $logo_data = $this->upload->data();
                $logo_filename = $logo_data['file_name'];

                // Simpan data ke database
                $data = [
                    'nama_customer' => $this->input->post('nama_customer'),
                    'logo_customer' => $logo_filename,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                $this->db->insert('main_customer', $data);

                $this->session->set_flashdata('success', 'Data Main Customer Berhasil Ditambahkan');
                redirect('admin/main_customer');
            } else {
                // Jika gagal upload, tampilkan error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                $this->load->view('admin/create_main_customer');
            }
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // Ambil data customer berdasarkan id
        $data['customer'] = $this->MainCustomer_model->get_customer_by_id($id);

        if (!$data['customer']) {
            show_404();
        }

        // Menampilkan form edit customer
        $this->load->view('admin/edit_main_customer', $data);
    }

    public function update($id)
    {
        // Set timezone ke Indonesia
        date_default_timezone_set('Asia/Jakarta');

        // Validasi untuk nama customer
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke form edit
            $this->edit($id);
        } else {
            // Konfigurasi untuk upload logo jika ada
            $config['upload_path'] = './uploads/logos/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['logo_customer']['name'];

            $this->upload->initialize($config);

            // Jika ada file baru yang diunggah
            if ($_FILES['logo_customer']['name']) {
                if ($this->upload->do_upload('logo_customer')) {
                    $logo_data = $this->upload->data();
                    $logo_filename = $logo_data['file_name'];

                    // Jika file lama ada, hapus
                    if ($this->input->post('old_logo')) {
                        unlink('./uploads/logos/' . $this->input->post('old_logo'));
                    }
                } else {
                    // Jika gagal upload, tampilkan error
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('admin/main_customer/edit/' . $id);
                }
            } else {
                $logo_filename = $this->input->post('old_logo');
            }

            // Simpan data yang diupdate ke database
            $data = [
                'nama_customer' => $this->input->post('nama_customer'),
                'logo_customer' => $logo_filename,
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            if ($this->MainCustomer_model->update_customer($id, $data)) {
                $this->session->set_flashdata('success', 'Data Main Customer Berhasil Diperbarui');
            } else {
                $this->session->set_flashdata('error', 'Data Main Customer Gagal Diperbarui');
            }

            redirect('admin/main_customer');
        }
    }

    public function delete($id)
    {
        // Panggil model untuk menghapus data berdasarkan ID
        if ($this->MainCustomer_model->delete_customer($id)) {
            // Jika berhasil, set pesan sukses dan redirect ke halaman customer
            $this->session->set_flashdata('success', 'Data Main Customer Berhasil Dihapus');
        } else {
            // Jika gagal, set pesan error
            $this->session->set_flashdata('error', ' Data Main Customer Gagal Dihapus');
        }

        // Redirect ke halaman utama customer setelah aksi
        redirect('admin/main_customer');
    }
}
