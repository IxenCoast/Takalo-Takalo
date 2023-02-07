<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller 
{
	// public function __construct()
	// {
	// 	
	// }

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
	}

	public function login()
	{
		$mail = $this->input->post("mail");
		$pwd = $this->input->post("pwd");

		$this->load->model('Model');
		if($this->Model->checkLogin($mail,$pwd))
		{
			$this->session->set_userdata('mail', $mail);
			redirect('index.php/home/index');
		}
		redirect('index.php/log/index');
		// {
		// 	$this->session->set_userdata('mail', $mail);
		// 	redirect('home');
		// }else{
		// 	redirect('log/index');
		// }

		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('log/index');
	}
	
	// public function index($nom , $img)
	// {
	// 	$nom->$this->post("nom");
	// 	$image->$this->post("img");
		

	// }
}
