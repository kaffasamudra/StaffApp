<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Image_model');
        $this->load->library('upload');
    }

    // Menampilkan daftar gambar
    public function index() {
        $data['users'] = $this->Image_model->get_users();
        $this->load->view('image_list', $data);
    }

    // Form untuk mengunggah gambar
    public function upload() {
        $this->load->view('image_upload');
    }

    // Menyimpan gambar yang diunggah
    public function save() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('avatar')) {
            $fileData = $this->upload->data();
            $data['avatar'] = $fileData['file_name'];

            // Simpan data ke database
            $this->Image_model->save_image($data);
            redirect('image/index');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('image/upload');
        }
    }

    // Menampilkan form edit gambar
    public function edit($id) {
        $data['avatar'] = $this->Image_model->get_image($id);
        $this->load->view('image_edit', $data);
    }

    // Menyimpan perubahan gambar
    public function update($id) {
        // Load model jika belum di-load
        $this->load->model('Image_model');

        $avatar = $this->Image_model->get_image($id);

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('avatar')) {
            // Hapus gambar lama hanya jika itu file, bukan direktori
            if (is_file('./uploads/' . $avatar->avatar)) {
                unlink('./uploads/' . $avatar->avatar);
            }

            // Simpan gambar baru
            $fileData = $this->upload->data();
            $data['avatar'] = $fileData['file_name'];

            // Update data gambar di database
            $this->Image_model->update_image($id, $data);
            redirect('image/index');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('image/edit/' . $id);
        }
    }



    // Menghapus gambar
    public function delete($id) {
        $avatar = $this->Image_model->get_image($id);
        if (file_exists('./uploads/' . $avatar->avatar)) {
            unlink('./uploads/' . $avatar->avatar);
        }
        $this->Image_model->delete_image($id);
        redirect('image/index');
    }
}
