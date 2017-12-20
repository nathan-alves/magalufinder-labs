<?php
	include_once "./model/model.usuario.php";
	
	//Classe de Comunicação com Model e View (Regra de negócios)
	class UsuarioController extends UsuarioModel {
		
		//Método Construtor
		public function __construct(){}
		
		//Encapsulamento
		public function setId($p_id) {
			$this->id = $p_id;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function setNome($p_nome) {
			$this->nome = $p_nome;
		}
		
		public function getNome() {
			return $this->nome;
		}
		
		public function setUsuario($p_usuario) {
			$this->usuario = $p_usuario;
		}
		
		public function getUsuario() {
			return $this->usuario;
		}
		
		public function setSenha($p_senha) {
			$this->senha = $p_senha;
		}
		
		public function getSenha() {
			return $this->senha;
		}
		
		public function setGrupo($p_grupo) {
			$this->grupo = $p_grupo;
		}
		
		public function getGrupo() {
			return $this->grupo;
		}
		
		public function setLoja($p_loja) {
			$this->loja = $p_loja;
		}
		
		public function getLoja() {
			return $this->loja;
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
