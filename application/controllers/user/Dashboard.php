<?php

class Dashboard extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->model('M_user'); // Pastikan model M_user di-load di sini
   		$this->load->library('upload');
	}
		
	public function index() {
			$data['users'] = $this->M_user->get_users();
			$this->load->view('user/dashboard', $data);
	}

	public function contact()
	{
		if ($this->input->method() === 'post') {
			$this->load->model('feedback_model');

			// validasi sek sak durunge insert neng model

			$feedback = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'message' => $this->input->post('message')
			];

			$feedback_saved = $this->feedback_model->insert($feedback);

			if ($feedback_saved) {
				$this->session->set_flashdata('message', 'Your message has been sent!');
				redirect('user/dashboard');
			}
			// if ($feedback_saved) {
			//   return $this->load->view('user/thanks');
			// }
		}
		
			$this->load->view('user/dashboard');

	}
	public function update($id) {
		// Load model jika belum di-load
		$this->load->model('m_user');

		$image = $this->m_user->get_image($id);
			    $config['upload_path'] = './uploads/';
    			$config['allowed_types'] = 'jpg|jpeg|png|gif';
  				$config['max_size'] = 2048;

				$this->upload->initialize($config);

				if ($this->upload->do_upload('avatar')) {
						// Hapus gambar lama hanya jika itu file, bukan direktori
						if (is_file('./uploads/' . $image->avatar)) {
								unlink('./uploads/' . $image->avatar);
						}

						// Simpan gambar baru
						$fileData = $this->upload->data();
						$data['avatar'] = $fileData['file_name'];

						// Update data gambar di database
						$this->m_user->update_image($id, $data);
						redirect('user/dashboard');
				} 
				// else {
				// 		$this->session->set_flashdata('error', $this->upload->display_errors());
				// 		redirect('image/edit/' . $id);
				// }
		}
}
