<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Example');
        $this->load->library('upload');
    }

    public function index() {
        $data['users'] = $this->Example->getAllUsers();
        $this->load->view('example', $data);
    }

    public function addAvatar() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('avatar')) {
            $fileData = $this->upload->data();
            $avatar = $fileData['file_name'];

            $data = [
                'avatar' => $avatar
            ];

            $this->Example->addAvatar($data);
            redirect('user');
        } else {
            echo $this->upload->display_errors();
        }
    }

    public function editAvatar($id) {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('avatar')) {
            $fileData = $this->upload->data();
            $avatar = $fileData['file_name'];

            $this->Example->updateAvatar($id, $avatar);
            redirect('user');
        } else {
            echo $this->upload->display_errors();
        }
    }

    public function deleteAvatar($id) {
        $this->Example->deleteAvatar($id);
        redirect('user');
    }
}
