<!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8"> 
        <title> Listar  </title>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/estilo.css"/>              
        </head>
        <body>
            <?php 
            foreach ($usuarios as $u){
                echo "<h2>". $u->nome. "</h2>";
                echo "<h1>" . $u->email. "/h1";
                echo "<h1>" . $u->tel. "/h1";
    
            }
                echo($outravar);
            ?>
        
        
        	public function insere_noticia() {
	
		/* 
		Verifica se algo foi postado e se está vindo do form que tem o campo
		insere_noticia.
		*/
		if ( 'POST' != $_SERVER['REQUEST_METHOD'] || empty( $_POST['insere_noticia'] ) ) {
			return;
		}
		
		/*
		Para evitar conflitos apenas inserimos valores se o parâmetro edit
		não estiver configurado.
		*/
		if ( chk_array( $this->parametros, 0 ) == 'edit' ) {
			return;
		}
		
		// Só pra garantir que não estamos atualizando nada
		if ( is_numeric( chk_array( $this->parametros, 1 ) ) ) {
			return;
		}
			
		// Tenta enviar a imagem
		$imagem = $this->upload_imagem();
		
		// Verifica se a imagem foi enviada
		if ( ! $imagem ) {
			return;		
		}
</body>
</html>


