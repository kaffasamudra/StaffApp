<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Menyimpan data gambar ke database
    public function save_image($data) {
        return $this->db->insert('users', $data);
    }

    // Mendapatkan semua gambar
    public function get_users() {
        return $this->db->get('users')->result();
    }

    // Mendapatkan gambar berdasarkan id
    public function get_image($id) {
        return $this->db->get_where('users', array('id' => $id))->row();
    }

    public function update_image($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }


    // Menghapus gambar
    public function delete_image($id) {
        return $this->db->delete('users', array('id' => $avatar));
    }
}
