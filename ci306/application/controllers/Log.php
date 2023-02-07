<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller 
{
	public function __construct()
	{
		$this->load->model('Model');
	}

	public function index()
	{
		$this->load->view('page/login');
	}

	public function login()
	{
		$mail = $this->input->post("mail");
		$pwd = $this->input->post("pwd");

		
		if($this->Model->checkLogin($mail,$pwd))
		{
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
	
	public function index($nom , $img)
	{
		$nom->$this->post("nom");
		$image->$this->post("img");
		

	}
}
