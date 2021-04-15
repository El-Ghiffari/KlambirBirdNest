<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('rolemodel');
		$this->load->model('loginmodel');
		$this->load->helper(array('form', 'url'));
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/home'));
	}

	public function index()
	{
		$this->load->view('admin/adminview');
	}

	public function about()
	{
		$this->load->view('admin/aaview');
	}

	public function news()
	{
		$data['news'] = $this->rolemodel->getNews();
		$this->load->view('admin/anview',$data);
	}

	public function messages()
	{
		$data['messages'] = $this->rolemodel->getMessages();
		$this->load->view('admin/amview',$data);
	}


	public function addContacts()
	{
		$data = [
			"fname" => $this->input->post('fname', true),
			"lname" => $this->input->post('lname', true),
			"email" => $this->input->post('email', true),
			"subject" => $this->input->post('subject', true),
			"message" => $this->input->post('message', true),
		];

		$this->rolemodel->addContacts($data);
		$this->session->set_flashdata('flash', 'Message has been sent!');
		redirect('home/contacts','refresh');
	}

	public function removeMessages($id)
	{
		$this->rolemodel->removeMessages($id);
		redirect('admin/messages','refresh');
	}


	public function manageNews()
	{
		$data['news'] = $this->rolemodel->getNews();
		$this->load->view('admin/managenews',$data);
	}

	public function removeNews($id)
	{
		$this->rolemodel->removeNews($id);
		redirect('admin/news','refresh');
	}

	public function addN()
	{
		$this->load->view('admin/addn', array('error' => ' ' ));
	}

	public function addNews()
	{
		$data = [
			"title" => $this->input->post('title', true),
			"description" => $this->input->post('description', true),
			"date" => date('y-m-d'),
			"views" => 0,
			"picture" => "",
		];
		$this->uploadImage();
		$file_info = $this->upload->data();
		$data['picture'] = $file_info['file_name'];
		$this->rolemodel->addNews($data);
		$this->session->set_flashdata('alert', 'News has been added!');
		redirect('admin/news','refresh');
	}

	public function uploadImage()
	{
	    $config['upload_path'] 		= './assets/images/';
	    $config['allowed_types']    = 'gif|jpg|png';
	    $config['max_size']         = 5024;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('userfile')) {
			$data = array('upload_data' => $this->upload->data());
		} else {
			$error = array('error' => $this->upload->display_errors());
		}
	}


	public function addD()
	{
		$this->load->view('admin/addd', array('error' => ' ' ));
	}

}
