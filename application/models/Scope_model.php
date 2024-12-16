<?php
class Scope_model extends CI_Model
{

    // Konstruktor model
    public function __construct()
    {
        parent::__construct();
    }

    // Ambil semua data scope
    public function get_all_scope()
    {
        return $this->db->get('scope')->result_array();
    }

    // Ambil data scope berdasarkan ID
    public function get_scope_by_id($id)
    {
        return $this->db->get_where('scope', ['id' => $id])->row_array();
    }

    // Insert data scope baru
    public function insert_scope($data)
    {
        return $this->db->insert('scope', $data);
    }

    // Update data scope
    public function update_scope($id, $data)
    {
        return $this->db->update('scope', $data, ['id' => $id]);
    }

    // Hapus data scope
    public function delete_scope($id)
    {
        return $this->db->delete('scope', ['id' => $id]);
    }

    //Total jumlah data scope
    public function get_total_scope()
    {
        return $this->db->count_all('scope');
    }
}
