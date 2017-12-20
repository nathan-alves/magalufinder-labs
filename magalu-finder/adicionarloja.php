<?php
		include_once("./model/dao.php");
		include_once("./controller/controller.loja.php");
		
		$id = $_POST['txt_id'];
		$filial = $_POST['txt_filial'];
		$descricao = $_POST['txt_descricao'];
		$endereco = $_POST['txt_endereco'];
		$cidade = $_POST['txt_cidade'];
		$bairro = $_POST['txt_bairro'];
		$cep = $_POST['txt_cep'];
		
		$obj_loja = new LojaController();
		
		$obj_loja->setId(null);
		$obj_loja->setFilial($filial);
		$obj_loja->setDescricao($descricao);
		$obj_loja->setEndereco($endereco);
		$obj_loja->setCidade($cidade);
		$obj_loja->setBairro($bairro);
		$obj_loja->setCep($cep);

		$retorno = $obj_loja->adicionar();          
							  
		if($retorno)
		{
			echo "<h3><center>Filial Cadastrada com Sucesso!</center></h3>";
			include("home.html");
		}
		else
		{
			echo "<h3><center>Falha ao adicionar filial!</center></h3>";
			include("home.html");
		}
?>
<!--<br /><br />

<div align="center">
	<input type="submit" value="Cadastrar novo Cliente" target="_parent" onClick="document.location='./cad-usuario.html'">
	<input type="submit" value="Listar todos os Clientes" target="_parent" onClick="document.location='./lista_clientes.php'">
</div> -->

