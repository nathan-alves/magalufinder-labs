<?php
		include_once "./model/dao.php";
		include_once "./controller/controller.usuario.php";
		
		$id = $_POST['txt_id'];
		$nome = $_POST['txt_nome'];
		$usuario = $_POST['txt_usuario'];
		$senha = $_POST['txt_senha'];
		$grupo = $_POST['txt_grupo'];
		$loja = $_POST['txt_loja'];
		
		$obj_usuario = new UsuarioController();
		
		$obj_usuario->setId(null);
		$obj_usuario->setNome($nome);
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setSenha($senha);
		$obj_usuario->setGrupo($grupo);
		$obj_usuario->setLoja($loja);

		$retorno = $obj_usuario->adicionar();   

		if($retorno)
		{
			echo "<h3><center>Usuário Cadastrado com Sucesso!</center></h3>";
			include("home.html");
		}
		else
		{
			echo "<h3><center>Falha ao adicionar usuário!</center></h3>";
			include("home.html");
		}
?>

