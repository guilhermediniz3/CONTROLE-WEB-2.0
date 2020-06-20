<?php

// recuperar os valores de configuracao
require_once 'config.php';
// criando uma conexao com o mysql
// mysqli_connect(servidor,usuario,senha,banco);






function cep($rua){

	$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	// comando sql para selecionar os dados do usuario
	$sql = " select c.descricao as 'cidade', c.uf,l.descricao as 'rua',descricao_bairro,l.cep as 'postal'
	from cidade c
	join logradouro l
	where c.id_cidade = l.id_cidade
	and cep =".$rua;
	// executar os comandos no banco de dados
	$result = $con->query($sql);
	// verificar se retornou resultados
	if($result->num_rows > 0){
		// retornar todos os dados do select no formato coluna->valor exemplo( codigo->1,nome->farlen)
		return $lista = mysqli_fetch_assoc($result);
	}else{// se o select não retornar valores devolver mensagem
		return 0;
	}

}




// criar uma funcao para retornar os dados do usuario por codigo
function listarUsuarioCodigo($codigo){
	// criar a conexao com o mysql
	$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

	// comando sql para selecionar os dados do usuario
	$sql = "select * from usuario where ID =".$codigo;

	// executar os comandos no banco de dados
	$result = $con->query($sql);

	// verificar se retornou resultados
	if($result->num_rows > 0){
		// retornar todos os dados do select no formato coluna->valor exemplo( codigo->1,nome->farlen)
		return $lista = mysqli_fetch_assoc($result);

	}else{// se o select não retornar valores devolver mensagem
		return 0;
	}
}
?>