<?php
	if( isset($_POST['email']) ) {
		
		$email = $_POST['email'];
		$message = "Email cadastrado pelo site: $email <br />";	

		$headers = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "From: <$email>\n";
		$headers .= "Return-Path: <$email>\n";
		$headers .= "Bcc: professorwillians@gmail.com\r\n";
		echo mail("fernanda_abdallaserrano@hotmail.com", "Email cadastrado no site", $message, $headers);
		echo "Seu IP foi identificado...";
	}else{
		echo "não deveria estar fazendo isso ...";
	}

?>