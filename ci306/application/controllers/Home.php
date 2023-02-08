<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
        if(!$this->session->has_userdata('mail'))
		{
			 redirect('index.php/log/index');  
		}
		$this->load->model('Model');
    }
    public function index()
	{	
		$id=1;
		$data = array();
		$data['header']="Home";
		$data['pec'] = $this->Model->encours($id);
		$data['listeProduit'] = $this->Model->mesObjets($id);
		$data['mail'] = $this->session->userdata('mail');
		$data['nom'] = $this->session->userdata('nom');
		$data['idu'] = $this->session->userdata('idu');
        $data['content'] = 'page/home';
		$this->load->view('index',$data);
	}

	public function demandes()
	{	
		$id=2;
		$data = array();
		$data['header']="Demandes";
		$data['listeProduit'] = $this->Model->notif($id);
		$data['mail'] = $this->session->userdata('mail');
        $data['content'] = 'page/demandes';
		$this->load->view('index',$data);
	}

	public function echange()
	{	
		$id=1;
		$data = array();
		$data['header']="home";
		$data['idp']=$this->input->get('p');
		$data['pec'] = $this->Model->enprepa();
		$data['listeProduit'] = $this->Model->listeProduit($id);
		$data['mail'] = $this->session->userdata('mail');
        $data['content'] = 'page/takalo';
		$this->load->view('index',$data);
	}
    
}