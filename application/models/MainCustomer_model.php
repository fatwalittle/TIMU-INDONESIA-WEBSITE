<?php
class MainCustomer_model extends CI_Model {

    // Konstruktor model
    public function __construct() {
        parent::__construct();
    }

    // Ambil semua data customer
    public function get_all_customers() {
        return $this->db->get('main_customer')->result();
    }

    // Ambil data customer berdasarkan ID
    public function get_customer_by_id($id) {
        return $this->db->get_where('main_customer', ['id' => $id])->row_array();
    }

    // Insert data customer baru
    public function insert_customer($data) {
        return $this->db->insert('main_customer', $data);
    }

    // Update data customer
    public function update_customer($id, $data) {
        return $this->db->update('main_customer', $data, ['id' => $id]);
    }

    // Hapus data customer
    public function delete_customer($id) {
        return $this->db->delete('main_customer', ['id' => $id]);
    }

    //Total jumlah data customer
    public function get_total_customers() {
        return $this->db->count_all('main_customer');
    }
}
