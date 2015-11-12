<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <title> Formulario </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/estilo.css"/>    
</head>
<body>
    <!-- vou na classe welcome que vai ter que ter uma funcao doPost -->
    <h1> <marquee> Sejam Bem Vindos </marquee> </h1> 
    <form action="/index.phpwelcome/doPost" method="POST">
        
    Nome:
    <input type="text" name="nome"/>
    E-mail:
    <input type="email" name="email"/>
    Telefone:
    <input type="tel" name="telefone"/></br>
    <input type="submit" value="Ok"/>  
    
    
    </form>
</body>
</html>