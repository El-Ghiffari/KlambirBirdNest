<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('rolemodel');
		$this->load->model('loginmodel');
	}

	public function login()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
			'username' => $username,
			'password' => $password
		);
		$check = $this->loginmodel->checkLogin("admin",$where)->num_rows();
		if ($check > 0) {
			$data_session = array(
				'name' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 			redirect(base_url("index.php/admin"));
 
		} else {
			$this->session->set_flashdata('flash', 'Wrong Username or Password!');
			redirect("home");
		}
	}

	public function index()
	{
		$this->load->view('homeview');
	}

	public function about()
	{
		$this->load->view('AboutView');
	}

	public function news()
	{
		$data['news'] = $this->rolemodel->getNews();
		$this->load->view('NewsView',$data);
	}

	public function contacts()
	{
		$this->load->view('ContactView');
	}

	public function service()
	{
		$this->load->view('ServicesView');
	}

	public function product()
	{
		$this->load->view('ProductsView');
	}

	public function registrasi()
	{
		$this->load->view('RegisterPage');
	}

	public function postpage()
	{
		$this->load->view('PostPage');
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
		$this->session->set_flashdata('alert', 'Message has been sent!');
		redirect('home/contacts','refresh');
	}
}
