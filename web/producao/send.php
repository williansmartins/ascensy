<?php


if(isset($_POST['InputName']) && isset($_POST['InputFone']) && isset($_POST['InputEmail1']) && isset($_POST['InputMessage'])) {

	$nome = 	$_POST['InputName'];
		$telefone = 		$_POST['InputFone'];
		$email = 		$_POST['InputEmail1'];
		$mensagem = 		$_POST['InputMessage'];


		$mensagem = "
			NOME: $nome <br />
			EMAIL: $email <br />
			TELEFONE: $telefone <br />
			MENSAGEM: $mensagem <br />
		";	

		$headers = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=UTF-8";
		$headers .= "From: $nome <$email>\n";
		$headers .= "Return-Path: <$email>\n";
                echo mail("contato@ascensy.com.br", "Contato e orçamento", $mensagem, $headers);
				?>
                <script type="text/javascript">
				{
					alert("Mensagem enviada. Muito obrigado!");
					window.location.href = "http://www.ascensy.pe.hu/contact.html"; 
				}
				</script> 
                <?php
}
		else{
		?>
                <script type="text/javascript">
				{
					alert("Mensagem não enviada. Tente novamente.");
					window.location.href = "http://www.ascensy.pe.hu/contact.html"; 
				}
				</script> 
                <?php
	}
		


?>