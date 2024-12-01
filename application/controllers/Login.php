<?php

class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_login');
    }
 
    function index(){
        $this->load->view('v_login');
    }

    public function login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'user', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Kembali ke halaman login jika validasi gagal
            $this->load->view('v_login');
        } else {
            $input_user = $this->input->post('user');
            $input_password = $this->input->post('password');
            
            // Cek user dari model
            $user_data = $this->m_login->get_user($input_user, $input_password);
            
            if ($user_data && $user_data->password == $input_password) {
                $this->session->set_userdata('user', $user_data->user);
                $this->session->set_userdata('id_user', $user_data->id);
                // Redirect ke dashboard admin
                redirect(base_url("admin"));
            } else { 
                // Jika user atau password salah, set flashdata dan kembali ke halaman login
                $this->session->set_flashdata('error', 'User atau password salah');
                redirect('login'); // Redirect ke halaman login
            }
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
