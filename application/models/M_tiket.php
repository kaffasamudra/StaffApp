<?php
class M_tiket extends CI_Model {

    public function get()
    {
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function get_all_tickets() {
        return $this->db->get('tiket')->result();
    }

    public function get_ticket_by_id($id) {
        return $this->db->get_where('tiket', ['id' => $id])->row();
    }

    public function insert_ticket($data) {
        return $this->db->insert('tiket', $data);
    }

    public function get_tickets_by_user($username) {
        $this->db->where('username', $username);
        return $this->db->get('tiket')->result();
    }

    public function update_ticket($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tiket', $data);
    }
}
?>
