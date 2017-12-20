<?php
	class Dao {
		
		//Declaração dos atributos
		private $servidor 	= "localhost";
		private $usuario 	= "id4033850_magalufinder";
		private $senha 		= "magfinder1";
		private $nome_banco = "id4033850_db_magalufinder";
		private $conexao;
		private $resultado;
		private $sql;
		
		//Método Construtor
		private function __construct() {}
		
		//Método que abre conexão com banco
		public function openConn() {
			//Realizo a conexão e a seleção do banco de dados
			$this->conexao = new mysqli($this->servidor, 
				$this->usuario, $this->senha, $this->nome_banco);
				
			//Verifico se não houve erros
			if ($this->conexao->connect_errno) {
				printf("Falha na conex&atilde;o:\n%s", 
					$this->conexao->connect_error);
			}
		}
		
		//Método para fechar conexão
		public function closeConn() {
			return $this->conexao->close();
		}
		
		//Método para execução (INSERT, UPDATE and DELETE)
		public function execute($sql) {
			$this->openConn(); //abre conexao
			$retorno = $this->conexao->query($sql); //executa o comando
			
			$this->closeConn(); //fechar a conexão
			return $retorno;
		}
		
		//Método para consulta (SELECT)
		public function executeS($sql) {
			$this->openConn(); //abre conexao
			$retorno = $this->conexao->query($sql); //executa o comando
			
			if ($retorno) { //Caso retorne a coleção de dados
				$array_dados = array();
				while($objeto = $retorno->fetch_object()) {
					$array_dados[] = $objeto;					
				}
				$this->closeConn();
				return $array_dados;
			
			} else { //Caso não tenha retorno de coleção de dados
				$this->closeConn();
				return false;
			}
		}
		
		//Método padrão SINGLETON (garante apenas 1 instancia de objeto)
		public static function getInstancia() {
			return new Dao();
		}
	}
?>
