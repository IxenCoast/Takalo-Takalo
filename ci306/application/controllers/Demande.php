<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demande extends CI_Controller 
{
    public function ask()
	{	
		$p = $this->input->get("p");
		$pf = $this->input->get("pf");

		$this->load->model('Model');

		$this->Model->demander($p,$pf);
		redirect('index.php/home/index');
	} 

	public function add()
	{	
		$nom = $this->input->get("nom");
		$prix = $this->input->get("prix");
		$title = $this->input->get("title");
		$desc = $this->input->get("desc");

		$this->load->model('Model');

		$idu=$this->session->userdata('idu');

		$this->Model->ins($nom,$idu, $title, $desc, $prix);
		redirect('index.php/home/index');
	} 

	public function yes()
	{	
		$p = $this->input->get("p");
		$idu = $this->input->get("idu");
		$idf = $this->input->get("idf");
		$idp = $this->input->get("idp");
		$idpf = $this->input->get("idpf");
		$this->load->model('Model');
		$this->Model->accepter($p, $idu, $idf, $idp, $idpf);

		redirect('index.php/home/demandes');
	}

	public function no()
	{	
		$p = $this->input->get("p");

		$this->load->model('Model');

		$this->Model->refuser($p);
		redirect('index.php/home/demandes');
	}
}