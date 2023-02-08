<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
        // if(!$this->session->has_userdata('mail'))
		// {
		// 	 redirect('index.php/log/index');  
		// }
		$this->load->model('Model');
    }
    public function index()
	{	
		$id=1;
		$data = array();
		$data['listeProduit'] = $this->Model->listeProduit($id);
		$data['mail'] = $this->session->userdata('mail');
        $data['content'] = 'page/home';
		$this->load->view('index',$data);
	}
    
}