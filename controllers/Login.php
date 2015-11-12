//Aula do dia 05-11-2015
//Controler -> Login.PHP
//Quem mexe no back é que vaidefinir quem é admin ou nao
//lanfatec99
//Session serve para autenticar e autorizar o usuario
<?php
class login extends CI_Controller {
	public function entrar() {
		$this->load-> view("formlogin");
	}
	
	//criando uma pagina de logout
	public function logout(){
		$this->session->unset_userdata("_ID");
		$this->session->unset_userdata("_NOME");
		echo "<h1>Ate logo</h1>";
	}

	//criando uma nova pagina
	public function page(){
		if($this->session->set_userdata("_NOME") != NULL){
		echo "<h1> Pagina de usuario </h1>";
		}else {
			redirect("/login/entrar");
		}		
	}

	public function auth(){
		$nome = $POST ["nome"];		
		$pass = $POST ["senha"];

		if ($nome == "root" && $pass == "root"){
			$this->session->set_userdata("_ID", "ADMIN");
			redirect("/login/admin");
		} else {
			$this->session->set_userdata("_ID", "comum");
			$this->session->set_userdata("_NOME", "$nome");
			redirect('/login/comum');
			}		
		//echo"BEM VINDO";		manda direto pro admin		redirect('/login/admin');
	}
	
	//esse metodo da aula de 12-11 é pra adc na aula do dia 05-11
	public function getUser($nome, $pass){
		$this->db-> where('nome', $nome); //esse nome e o pass sem o cifrao, devem está exatamente como no bd
		$this->db-> where('pass', $pass); //esse campo com o de cima e o de baixo, é o SELECT * from user where nome=$nome and pass=$pass
		$a = $this-> db->get('user');
		if ($a -> row() -> nome == "root"){
			return "admin";
		} else { 
			return "comum"; 
			
		}
}
	
//pagina de painel de administrador
public function admin(){
	$a = $this->session->userdata("_ID");
	if($a == "admin"){
		echo "<h1> Bem vindo ADMIN </h1>";
	} else {
	    echo "<h1> VOCÊ NÃO ESTÁ AUTORIZADO PARA VE PAGINA</h1>";
	}
}
//esse metodo precisa esta fora do AUTH
public function comum(){
	$nome =  $this->session->set_userdata("_NOME");
	echo "<h1> Bem vindo ". $nome ." </h1>";
	}
}
?>