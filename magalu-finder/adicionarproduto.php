<?php
		include_once("./model/dao.php");
		include_once("./controller/controller.produto.php");
		
		$codigo = $_POST['txt_codigo'];
		$nome = $_POST['txt_nome'];
		$descricao = $_POST['txt_descricao'];
		$valor = $_POST['txt_valor'];
		
		$obj_produto = new ProdutoController();
		
		$obj_produto->setCodigo($codigo);
		$obj_produto->setNome($nome);
		$obj_produto->setDescricao($descricao);
		$obj_produto->setValor($valor);

		$retorno = $obj_produto->adicionar();          
							  
		if($retorno)	
		{
			echo "<h3><center>Produto Cadastrado com Sucesso!</center></h3>";
			include("home.html");
		}
		else
		{
			echo "<h3><center>Falha ao adicionar produto!</center></h3>";
			include("home.html");
		}
?>
<!--<br /><br />

<div align="center">
	<input type="submit" value="Cadastrar novo Cliente" target="_parent" onClick="document.location='./cad-usuario.html'">
	<input type="submit" value="Listar todos os Clientes" target="_parent" onClick="document.location='./lista_clientes.php'">
</div> -->

