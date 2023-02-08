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
		$data = array();
		$data['header']="Home";
		$data['pec'] = $this->Model->encours($this->session->userdata('idu'));
		$data['listeProduit'] = $this->Model->mesObjets($this->session->userdata('idu'));
		$data['mail'] = $this->session->userdata('mail');
		$data['nom'] = $this->session->userdata('nom');
		$data['idu'] = $this->session->userdata('idu');
        $data['content'] = 'page/home';
		$this->load->view('index',$data);
	}

	public function demandes()
	{	
		$data = array();
		$data['header']="Demandes";
		$data['listeProduit'] = $this->Model->notif($this->session->userdata('idu'));
		$data['idg'] = $this->Model->getIdAsk($this->session->userdata('idu'));
		$data['mail'] = $this->session->userdata('mail');
		$data['nom'] = $this->session->userdata('nom');
		$data['idu'] = $this->session->userdata('idu');
        $data['content'] = 'page/demandes';
		$this->load->view('index',$data);
	}
	
	public function ajouter()
	{	
		$data = array();
		$data['header']="ajout";
		$data['mail'] = $this->session->userdata('mail');
		$data['nom'] = $this->session->userdata('nom');
		$data['idu'] = $this->session->userdata('idu');
        $data['content'] = 'page/ajouter';
		$this->load->view('index',$data);
	}

	public function echange()
	{	
		$data = array();
		$data['header']="home";
		$data['idp']=$this->input->get('p');
		$data['pec'] = $this->Model->enprepa();
		$data['listeProduit'] = $this->Model->listeProduit($this->session->userdata('idu'));
		$data['mail'] = $this->session->userdata('mail');
		$data['nom'] = $this->session->userdata('nom');
		$data['idu'] = $this->session->userdata('idu');
        $data['content'] = 'page/takalo';
		$this->load->view('index',$data);
	}
    
}