<?php

	include_once("../model/dao.php");
	
	//Classe de comunicação com BD e Controller
	class LojaModel {
		
		//Atributos
		protected $id;
		protected $filial;
		protected $descricao;
		protected $endereco;
		protected $cidade;
		protected $bairro;
		protected $cep;
	
		//Métodos de Comunicação com banco de dados
		//Método de Inclusão
		protected function adicionar() {
			//SQL à ser executado
			$query = "	INSERT INTO tb_loja 
						(	filial, 
							descricao, 
							endereco, 
							cidade,
							bairro, 
							cep) 
						VALUES 
						(	'".$this->getFilial()."',
							'".$this->getDescricao()."',
							'".$this->getEndereco()."',
							'".$this->getCidade()."',
							'".$this->getBairro()."',
							'".$this->getCep()."'
						)";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Alteração
		protected function alterar() {
			//SQL à ser executado
			$query = "	UPDATE tb_loja 
						SET
							filial = '".$this->getFilial()."',
							descricao = '".$this->getDescricao()."',
							endereco = '".$this->getEndereco()."',
							cidade = '".$this->getCidade()."',
							bairro = '".$this->getBairro()."',
							cep = '".$this->getCep()."',
					  WHERE id = '".$this->getId()."'";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Exclusão
		protected function deletar() {
			//SQL à ser executado
			$query = "DELETE FROM tb_loja 
					  WHERE id = '".$this->getId()."'";
			
			return Dao::getInstancia()->execute($query);
		}
		
		//Método de Listagem
		protected function listarTodos() {
			//SQL à ser executado
			$query = "SELECT * FROM tb_loja ORDER BY id";
			
			return Dao::getInstancia()->executeS($query);
		}
	}
?>