<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('page/#');
	}

	public function login()
	{
		$mail = $this->input->post("mail");
		$pass = $this->input->post("pwd");

		$this->load->model('Model');
		if($this->Model->checkLogin($mail,$pass))
		{
			$this->session->set_userdata('mail', $mail);
			redirect('#');
		}else{
			redirect('#');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('#');
	}		
}
