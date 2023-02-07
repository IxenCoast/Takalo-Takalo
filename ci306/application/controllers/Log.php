<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function index()
	{
		$this->load->view('page/#');
	}

	public function login()
	{
		$mail = $this->input->post("mail");
		$pwd = $this->input->post("pwd");

		$this->load->model('Model');
		if($this->Model->checkLogin($mail,$pwd))
		{
			$this->session->set_userdata('mail', $mail);
			redirect('#');
		}else{
			redirect('log/index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('log/index');
	}		
}
