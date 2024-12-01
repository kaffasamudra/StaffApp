<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($username,$password) {
        $where = array( 
            'username' => $username, 
            'password' => $password, 
        );
        $this->db->where($where);
        $query = $this->db->get('users')->result();
        foreach ($query as $key => $value) {
            return $value;
        }
    }

    public function get_user_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    public function get_users() {
        $id=$this->session->userdata("id_user");
        $this->db->where("id",$id);
        return $this->db->get('users')->result();
    }
    
    public function get_user_by_phone($phone) {
        $this->db->where('phone', $phone);
        $query = $this->db->get('users');
        return $query->row();
    }

        // Mendapatkan gambar berdasarkan id
    public function get_image($id) {
        return $this->db->get_where('users', array('id' => $id))->row();
    }

    public function update_image($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
    
    public function update_password($id_user, $password) {
        $this->db->where('id', $id_user);
        $this->db->update('users', ['password' => $password]);
    }
}
