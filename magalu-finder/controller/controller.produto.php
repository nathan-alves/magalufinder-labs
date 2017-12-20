<?php
	include_once("../model/model.produto.php");
	
	//Classe de Comunicação com Model e View (Regra de negócios)
	class ProdutoController extends ProdutoModel {
		
		//Método Construtor
		public function __construct(){}
		
		//Encapsulamento
		public function setCodigo($p_codigo) {
			$this->codigo = $p_codigo;
		}
		
		public function getCodigo() {
			return $this->codigo;
		}
		
		public function setNome($p_nome) {
			$this->nome = $p_nome;
		}
		
		public function getNome() {
			return $this->nome;
		}
		
		public function setDescricao($p_descricao) {
			$this->descricao = $p_descricao;
		}
		
		public function getDescricao() {
			return $this->descricao;
		}
		
		public function setValor($p_valor) {
			$this->valor = $p_valor;
		}
		
		public function getValor() {
			return $this->valor;
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