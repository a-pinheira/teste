<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Outro extends CI_Controller {
    public function ola(){
        $this->load->view("index2");
    }   
    
 
	public function lista(){
		$this->load->view('lista');
	}
	
	public function doPost(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert(new Usuario($_POST["nome"]));
		$m->insert(new Usuario($_POST["email"]));
		$m->insert(new Usuario($_POST["tel"]));
	}
	
	public function listar(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$usuarios = $m->searchAll();
		print_r($usuarios);
		$data['usuarios'] = $usuarios;
		$this->load->view("lista",$data);
	}
}
    



