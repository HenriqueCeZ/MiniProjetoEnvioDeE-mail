<!DOCTYPE html>
 <html>

 <head>
 	<meta charset = "UTF-8">
    <meta name="viewport" content = "width=device-width, inital-scale=1, shrink-to-fit=no ">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 	<title>Requisição de email</title>
 </head>
 <body>
 	<?php
 	if(isset($_POST["nome"]) && empty($_POST["nome"]) == false){
 		$nome = addslashes($_POST['nome']);

 		$email =  addslashes($_POST['email']);
 		$msg = addslashes($_POST['msg']);
 		$para = "henriquecezar.jp@gmail.com";
 		$assunto ="Pergunta do contato";
 		$corpo = "Nome:".$nome." Email:".$email." Mensagem: ".$msg;
 		$cabecalho= "From: henriquecezar.jp@gmail.com"."\r\n"."Reply-To".$email."\r\n"."X-mailer:PHP/".phpversion();

 		mail($para, $assunto, $cabecalho);

 		echo "<h2> E-mail enviado com sucesso ";


 	}
 			

     ?>
 
 <form method = "POST">
  <div class="form-group">
    <label for="Input"> </label><br>
    <input type="text" name ="nome" placeholder="Nome">
  </div>
  	<div class="form-group">
    <label for="Input"></label><br>
    <input type="email" name ="email" placeholder="E-mail">
	</div>	
 		Mensagem: <br>
  <textarea name = "msg"></textarea><br>
  	<button type="submit" class="btn-black	">Enviar</button>

</form>



 	<script type="text/javascript" src = "jquery-3.6.0.min.js"></script>
  	<script type="text/javascript" src = "bootstrap.bundle.min.js"></script>	
 </body>
 </html>


 