<?php
	include_once './controller/controller.loja.php';
        include_once './model/dao.php';
		
		$filial = $_POST['txt_filial'];
		$descricao = $_POST['txt_descricao'];
		$endereco = $_POST['txt_endereco'];
		$cidade = $_POST['txt_cidade'];
		$bairro = $_POST['txt_bairro'];
		$cep = $_POST['txt_cep'];
		
		$obj_loja = new LojaController();

		$obj_loja->setFilial($filial);
		$obj_loja->setDescricao($descricao);
		$obj_loja->setEndereco($endereco);
		$obj_loja->setCidade($cidade);
		$obj_loja->setBairro($bairro);
		$obj_loja->setCep($cep);

		$retorno = $obj_loja->adicionar();          
							  
		if($retorno)
		{
			echo "<h3><center>Loja Cadastrada com Sucesso!</center></h3>";
			include("home.html");
		
		}
		else
		{
			echo "<h3><center>Falha ao adicionar loja!</center></h3>";
			include("home.html");
		}
?>


