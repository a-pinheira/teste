<?php

// Classe do banco de dados
class Usuario{
    
    // atributo nome
    public $nome, $email, $tel;
    
    // construtor
    public function __construct($nome, $email, $tel){
        $this->nome = $nome;
        $this->email = $email;
        $this->tel = $tel;
    }
    
    
}
?>