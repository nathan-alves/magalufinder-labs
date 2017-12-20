<?php

	include_once "./model/dao.php";
	
	//Classe de comunicação com BD e Controller
	class UsuarioModel {
		
		//Atributos
		protected $id;
		protected $nome;
		protected $usuario;
		protected $senha;
		protected $grupo;
		protected $loja;
	
		//Métodos de Comunicação com banco de dados
		//Método de Inclusão
		protected function adicionar() {
			//SQL à ser executado
			$query = "	INSERT INTO tb_usuario 
						(   nome, 
							usuario, 
							senha, 
							grupo, 
							loja) 
						VALUES 
						(   '".$this->getNome()."',
							'".$this->getUsuario()."',
							'".$this->getSenha()."',
							'".$this->getGrupo()."',
							'".$this->getLoja()."'
						)";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Alteração
		protected function alterar() {
			//SQL à ser executado
			$query = "	UPDATE tb_usuario 
						SET
							nome = '".$this->getNome()."',
							login = '".$this->getUsuario()."',
							senha = '".$this->getSenha()."',
							grupo = '".$this->getGrupo()."',
							loja = '".$this->getLoja()."',
					  WHERE id = '".$this->getId()."'";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Exclusão
		protected function deletar() {
			//SQL à ser executado
			$query = "DELETE FROM tb_usuario 
					  WHERE id = '".$this->getId()."'";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Listagem
		protected function listarTodos() {
			//SQL à ser executado
			$query = "SELECT * FROM tb_usuario ORDER BY id";
			
			return Dao::getInstancia()->executeS($query);
		}
	}
?>