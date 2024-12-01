<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Model {

    public function getAllUsers() {
        return $this->db->get('users')->result();
    }

    public function addAvatar($data) {
        $this->db->insert('users', $data);
    }

    public function updateAvatar($id, $avatar) {
        $this->db->set('avatar', $avatar);
        $this->db->where('id', $id);
        $this->db->update('users');
    }

    public function deleteAvatar($id) {
        $user = $this->db->get_where('users', ['id' => $id])->row();
        if ($user && $user->avatar) {
            unlink('./uploads/' . $user->avatar);
        }
        $this->db->set('avatar', NULL);
        $this->db->where('id', $id);
        $this->db->update('users');
    }
}
