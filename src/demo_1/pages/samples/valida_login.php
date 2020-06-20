<?php
session_start();
require_once 'config.php';

// criando uma conexao com o mysql
// mysqli_connect(servidor,usuario,senha,banco);
$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

// RECEBENDO OS DADOS DO FORMULARIO LOGIN
// isset -> verifica se a variavel existe
if(isset($_POST["nome"]) && isset($_POST["senha"])){
	// verificando se os valores nao estao vazios
	if(!empty($_POST["nome"]) && !empty($_POST["senha"])){
		// criar o comando sql / query
		$sql = "select * from usuario where nome = '".$_POST['nome']."' and senha = '".$_POST['senha']."';";
		
		// recebendo o resultado da execucao do comando no banco
		$result = $con->query($sql);
		// testando se o usuario esta correto
		if($result->num_rows > 0){


  $_SESSION['validar'] = $result;


			echo 			
			"<script>   
				alert('Bem vindo!');
				window.location.href='branco.php';
			</script>";
		}else{ 


		  unset($_SESSION['validar']);
// caso o login falhar
			echo 			
			"<script>   
				alert('Login ou senha incorretoss!');
				window.location.href='500.php';
			</script>";
		}
	
		// fechar a conexao
	$con->close();
	}
	
	else{ // redireciona para o index
		header("location:index.php");
	}

}
else{ // se as variáveis não existe redireciona para o index.php
	header("location:index.php");
}


?>