<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scope extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Memuat model Scope_model
        $this->load->model('Scope_model');

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
        $data['scopes'] = $this->db->get('scope')->result();

        // Mengambil data user untuk ditampilkan di view
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // Mengirim data ke view
        $this->load->view('admin/scope', $data);
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // Menampilkan form tambah scope
        $this->load->view('admin/create_scope', $data);
    }

    public function store()
    {
        // Set timezone ke Indonesia
        date_default_timezone_set('Asia/Jakarta');

        // Validasi untuk data scope
        $this->form_validation->set_rules('jenis_scope', 'Jenis Scope', 'required');
        $this->form_validation->set_rules('penjelasan_scope', 'Penjelasan Scope', 'required');

        // Jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            // Muat kembali tampilan form dengan pesan kesalahan
            $this->load->view('admin/create_scope');
        } else {
            // Konfigurasi untuk upload gambar
            $config['upload_path'] = './uploads/gambar_scope/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // ukuran maksimal 2MB
            $config['file_name'] = time() . '_' . $_FILES['gambar_scope']['name'];

            $this->upload->initialize($config);

            // Jika upload berhasil
            if ($this->upload->do_upload('gambar_scope')) {
                $gambar_data = $this->upload->data();
                $gambar_filename = $gambar_data['file_name'];

                // Simpan data ke database
                $data = [
                    'jenis_scope' => $this->input->post('jenis_scope'),
                    'penjelasan_scope' => $this->input->post('penjelasan_scope'),
                    'gambar_scope' => $gambar_filename,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                $this->db->insert('scope', $data);

                $this->session->set_flashdata('success', 'Data Scope Berhasil Ditambahkan');
                redirect('admin/scope');
            } else {
                // Jika gagal upload, tampilkan error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                $this->load->view('admin/create_scope');
            }
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // Ambil data scope berdasarkan id
        $data['scope'] = $this->Scope_model->get_scope_by_id($id);

        if (!$data['scope']) {
            show_404();
        }

        // Menampilkan form edit scope
        $this->load->view('admin/edit_scope', $data);
    }

    public function update($id)
    {
        // Set timezone ke Indonesia
        date_default_timezone_set('Asia/Jakarta');

        // Validasi untuk data scope
        $this->form_validation->set_rules('jenis_scope', 'Jenis Scope', 'required');
        $this->form_validation->set_rules('penjelasan_scope', 'Penjelasan Scope', 'required');

        // Jika validasi gagal, kembali ke form edit
        if ($this->form_validation->run() == FALSE) {
            // Menampilkan form edit scope jika validasi gagal
            $this->edit($id);
        } else {
            // Konfigurasi untuk upload logo jika ada
            $config['upload_path'] = './uploads/gambar_scope/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['gambar_scope']['name'];

            $this->upload->initialize($config);

            // Jika ada file baru yang diunggah
            if ($_FILES['gambar_scope']['name']) {
                if ($this->upload->do_upload('gambar_scope')) {
                    $gambar_data = $this->upload->data();
                    $gambar_filename = $gambar_data['file_name'];

                    // Jika file lama ada, hapus
                    if ($this->input->post('old_gambar')) {
                        unlink('./uploads/gambar_scope/' . $this->input->post('old_gambar'));
                    }
                } else {
                    // Jika gagal upload, tampilkan error
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('admin/scope/edit/' . $id);
                }
            } else {
                $gambar_filename = $this->input->post('old_gambar');
            }

            // Simpan data yang diupdate ke database
            $data = [
                'jenis_scope' => $this->input->post('jenis_scope'),
                'penjelasan_scope' => $this->input->post('penjelasan_scope'),
                'gambar_scope' => $gambar_filename,
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            if ($this->Scope_model->update_scope($id, $data)) {
                $this->session->set_flashdata('success', 'Data Scope Berhasil Diperbarui');
            } else {
                $this->session->set_flashdata('error', 'Data Scope Gagal Diperbarui');
            }

            redirect('admin/scope');
        }
    }

    public function delete($id)
    {
        // Panggil model untuk menghapus data berdasarkan ID
        if ($this->Scope_model->delete_scope($id)) {
            // Jika berhasil, set pesan sukses dan redirect ke halaman scope
            $this->session->set_flashdata('success', 'Data Scope Berhasil Dihapus');
        } else {
            // Jika gagal, set pesan error
            $this->session->set_flashdata('error', ' Data Scope Gagal Dihapus');
        }

        // Redirect ke halaman utama customer setelah aksi
        redirect('admin/scope');
    }
}
