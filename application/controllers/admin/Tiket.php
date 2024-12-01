<?php
class Tiket extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_tiket');

        // memastikan user sudah login, kalau belum akan di arahkan ke halaman login
        if (!$this->session->userdata('user')) {
            redirect('adminlogin');
        }
    }

    // Admin melihat semua tiket
    public function index() {
        $data['tickets'] = $this->M_tiket->get_all_tickets();
        $this->load->view('admin/tiket_list', $data);
    }

    // Admin mengedit tiket
    public function edit($id) {
        $data['ticket'] = $this->M_tiket->get_ticket_by_id($id);
        $this->load->view('admin/tiket_edit', $data);
    }

    // Admin memperbarui tiket
    public function update($id) {
        $data = array(
            'username' => $this->input->post('username'),
            'bagian' => $this->input->post('bagian'),
            'tipe_request' => $this->input->post('tipe_request'),
            'detail' => $this->input->post('detail'),
            'prioritas' => $this->input->post('prioritas'),
            'status' => $this->input->post('status'),
        );
        $this->M_tiket->update_ticket($id, $data);
        redirect('tiket');
    }
}
