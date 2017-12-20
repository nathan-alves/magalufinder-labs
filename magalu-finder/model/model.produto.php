<?php

	include_once("../model/dao.php");
	
	//Classe de comunicação com BD e Controller
	class ProdutoModel {
		
		//Atributos
		protected $codigo;
		protected $nome;
		protected $descricao;
		protected $valor;
	
		//Métodos de Comunicação com banco de dados
		//Método de Inclusão
		protected function adicionar() {
			//SQL à ser executado
			$query = "	INSERT INTO tb_produto 
						(	codigo, 
							nome, 
							descricao, 
							valor) 
						VALUES 
						(	'".$this->getCodigo()."',
							'".$this->getNome()."',
							'".$this->getDescricao()."',
							'".$this->getValor()."'
						)";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Alteração
		protected function alterar() {
			//SQL à ser executado
			$query = "	UPDATE tb_produto 
						SET
							nome = '".$this->getNome()."',
							descricao = '".$this->getDescricao()."',
							valor = '".$this->getValor()."',
					  WHERE codigo = '".$this->getCodigo()."'";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Exclusão
		protected function deletar() {
			//SQL à ser executado
			$query = "DELETE FROM tb_produto 
					  WHERE codigo = '".$this->getCodigo()."'";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Listagem
		protected function listarTodos() {
			//SQL à ser executado
			$query = "SELECT * FROM tb_produto ORDER BY codigo";
			
			return Dao::getInstancia()->executeS($query);
		}
	}
?>