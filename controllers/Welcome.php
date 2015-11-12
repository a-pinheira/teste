<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	// index.php/welcome/pagina
	public function pagina(){
		$this->load->view("pagina1");
	}
	
	// index.php/welcome/teste
	public function teste(){
		//chamando a pagina mypage
		// eu quero que essa rota teste me mostre o mypage
		$this->load->view('listar');
	}
	
	// index.php/welcome/index
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	// index.php/welcome/doPost
	public function doPost(){
		// controller enxergar o model
		// APPPATH onde esta o codeIgnitor
		require_once APPPATH."models/user.php";
		// 'model' eh o Model, aqui passa com letra minuscula
		$this->load->model('model');
		$m = $this->model;
		// "nome" eh o nome do campo do formulario que estou extraindo a informacao para gravar no banco
		$m->insert(new Usuario($_POST["nome"])); // new Usuario eh a classe Usuario de user.php
		$m->insert(new Usuario($_POST["email"]));
		$m->insert(new Usuario($_POST["tel"]));
	}
	
	// index.php/welcome/listar
	public function listar(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		// soh para ver se deu certo
		$usuarios = $m->searchAll();
//		print_r($usuarios);
		//data eh o dicionario em PHP
		$data [$usuarios] = $usuarios; //o nome $usuario deve ser o mesmo nome da VIEW (lista.php) e do controller Welcome.php
		//lista é o nome da View
		//$data é o vetor da variavel usuarios
		$this->load->view("lista", $data);
	}
	
	
		// index.php/welcome/form
	public function form(){
		$this->load->view('form');
	}
			// a classe Usuario associa a tabela que eu quero
			
	public function form1(){
		$this->load->view('form1');
	}

	public function indexPag1(){
		$this->load->view('indexPag1');
	}
	
	public function indexPag2(){
		$this->load->view('indexPag2');
	}			
	
	public function Pag3(){
		$this->load->view('pag3');
		
	}	
	
	public function Index2(){
		$this->load->view('index2');
	}	

	public function lista(){
		$this->load->view('lista');
	}	

	
}
	


