<?php
	$host="localhost";
	$username="root";
	$password="usbw";
	$db_name="ratatouille";
	
	$connect = @mysqli_connect($host,$username,$password,$db_name) 
	or die ("Problemas com a conexao do Banco de Dados");
?>