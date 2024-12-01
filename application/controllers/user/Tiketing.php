<?php
class Tiketing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_tiket');
        
        // Pastikan user sudah login, jika tidak redirect ke halaman login
        if (!$this->session->userdata('username')) {
            redirect('userlogin');
        }
    }

    // User hanya melihat tiket yang mereka buat
    public function index() {
        // Ambil username dari session
        $username = $this->session->userdata('username');
        
        // Ambil tiket berdasarkan username yang login
        $data['tiket'] = $this->M_tiket->get_tickets_by_user($username);
        
        // Load view dengan data tiket
        $this->load->view('user/tiket_list', $data);
    }

    // User menambahkan tiket baru
    public function add() {
        $this->load->view('user/tiket_add');
    }

    // User menyimpan tiket baru
    public function save() {
        // Ambil username dari session (otomatis mengambil pengguna yang login)
        $username = $this->session->userdata('username');

        $data = array(
            'username' => $username, // Gunakan username dari session
            'bagian' => $this->input->post('bagian'),
            'tipe_request' => $this->input->post('tipe_request'),
            'detail' => $this->input->post('detail'),
            'prioritas' => $this->input->post('prioritas'),
            'status' => 'open', // Status default saat tiket dibuat
        );
        
        // Simpan tiket ke database
        $this->M_tiket->insert_ticket($data);
        
        // Redirect kembali ke halaman daftar tiket
        redirect('tiketing');
    }
}
?>
