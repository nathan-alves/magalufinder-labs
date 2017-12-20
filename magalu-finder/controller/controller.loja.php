<?php
	include_once("../model/model.loja.php");
	
	//Classe de Comunicação com Model e View (Regra de negócios)
	class LojaController extends LojaModel {
		
		//Método Construtor
		public function __construct(){}
		
		//Encapsulamento
		public function setId($p_id) {
			$this->id = $p_id;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function setFilial($p_filial) {
			$this->filial = $p_filial;
		}
		
		public function getFilial() {
			return $this->filial;
		}
		
		public function setDescricao($p_descricao) {
			$this->descricao = $p_descricao;
		}
		
		public function getDescricao() {
			return $this->descricao;
		}
		
		public function setEndereco($p_endereco) {
			$this->endereco = $p_endereco;
		}
		
		public function getEndereco() {
			return $this->endereco;
		}

		public function setCidade($p_cidade){
			$this->cidade = $p_cidade;
		}

		public function getCidade(){
			return $this->cidade;
		}
		
		public function setBairro($p_bairro) {
			$this->bairro = $p_bairro;
		}
		
		public function getBairro() {
			return $this->bairro;
		}
		
		public function setCep($p_cep) {
			$this->cep = $p_cep;
		}
		
		public function getCep() {
			return $this->cep;
		}
		
		//Regras de negócios
		//Incluir
		public function adicionar() {
			
			return parent::adicionar();
		}
		
		//Alterar
		public function alterar() {
			
			return parent::alterar();
		}
		
		//Excluir
		public function deletar() {
			
			return parent::deletar();
		}
		
		//Listar Todos
		public function listarTodos()
		{
			return parent::listarTodos();
		}	
	}
?>