<?php

// CI_Model eh do codeIgnitor
class Model extends CI_Model{
   
    // $usu vem do controller
    public function insert(Usuario $usu){
        
        // insere seu registro no banco de dados
        // 'Usuario' - nome da tabela
        $this->db->insert('Usuario',$usu);
    }

	public function getUser($nome,$pass){
		$this->db->where('nome',$nome);
		$this->db->where('pass',$pass);
		$a = $this->db->get('User');
		if ($a->num_rows()>0){
			if($a->row()->nome === "root"){
				return "admin";
			}else{
				return "comum";
			}
		}else{
			return false;
		}
	}
	/*
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
	*/
	

    public function searchAll(){
        // faz a consulta no banco de dados
        $query =  $this->db->query("Select * from Usuario");
        
        // manda o resultado da consulta (query) para o controller
        return $query->result();
    }
    
}

?>