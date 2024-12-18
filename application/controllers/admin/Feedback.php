<?php

class Feedback extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('feedback_model');

		// memastikan user sudah login, kalau belum akan di arahkan ke halaman login
        if (!$this->session->userdata('user')) {
            redirect('adminlogin');
        }		
	}
	public function index()
	{
		$data['feedbacks'] = $this->feedback_model->get();
		if(count($data['feedbacks']) <= 0){
		$this->load->view('admin/feedback_empty');
		} else {
			$this->load->view('admin/feedback_list', $data);
		}
	}

	public function delete($id = null)
	{
		if(!$id){
			show_404();
		}

		$this->load->model('feedback_model');
		$this->feedback_model->delete($id);

		$this->session->set_flashdata('message', 'Data was deleted');
		redirect(site_url('admin/feedback'));
	}
}