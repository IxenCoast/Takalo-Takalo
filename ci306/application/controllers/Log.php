<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller 
{
	public function index()
	{
		$this->load->view('page/login');
	}

	public function register()
	{	
		$this->load->view('page/register');
	}

	public function signup()
	{	
		$n = $this->input->post("name");
		$m = $this->input->post("mail");
		$p = $this->input->post("pwd");

		$this->load->model('Model');

		$this->Model->signup($n,$m, $p);
		redirect('index.php/home/index');
	}

	public function login()
	{
		$mail = $this->input->post("mail");
		$pwd = $this->input->post("pwd");

		$this->load->model('Model');
		if($this->Model->checkLogin($mail,$pwd))
		{
			$info = $this->Model->info($mail);
			$this->session->set_userdata('mail', $mail);
			$this->session->set_userdata('nom', $info['nom']);
			$this->session->set_userdata('idu', $info['idu']);
			redirect('index.php/home/index');
		}
		redirect('index.php/log/index');

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('index.php/log/index');
	}
	
}
