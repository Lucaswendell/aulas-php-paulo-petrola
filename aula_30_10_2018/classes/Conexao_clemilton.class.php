<?php
final class Conexao{
	private $conexao;
	private $host;
	private $user;
	private $pwd;
	private $db;
	private $type;

	public function getConexao(){
		return $this->conexao;
	}
	public function setConexao($pdo){
		$this->conexao = (isset($pdo)) ? $pdo : NULL;
	}
	public function getHost(){
		return $this->host;
	}
	public function setHost($servidor){
		$this->host = (isset($servidor)) ? $servidor : NULL;
	}
	public function getUser(){
		return $this->user;
	}
	public function setUser($usuario){
		$this->user = (isset($usuario)) ? $usuario : NULL;
	}
	public function getPwd(){
		return $this->pwd;
	}
	public function setPwd($senha){
		$this->pwd = (isset($senha)) ? $senha : NULL;
	}
	public function getDb(){
		return $this->db;
	}
	public function setDb($banco){
		$this->db = (isset($banco)) ? $banco : NULL;
	}
	public function getType(){
		return $this->type;
	}
	public function setType($tipo){
		$this->type = (isset($tipo)) ? $tipo : NULL;
	}
	private function analisarDados(){
		if($this->getHost() == NULL || $this->getUser() == NULL || $this->getPwd() == NULL || $this->getDb() == NULL || $this->getType() == NULL){
			return false;
		}else{
			return true;
		}
	}
	public function __construct($config){
		try{
			if(file_exists("lib/{$config}")){
				$arquivo = parse_ini_file("confi/{$config}");
				$this->setHost($arquivo['host']);
				$this->setUser($arquivo['user']);
				$this->setPwd($arquivo['pass']);
				$this->setDb($arquivo['name']);
				$this->setType($arquivo['type']);
				if($this->analisarDados()){
					switch($this->getType()){
						case "mysql":
							try{
								$this->setConexao(new PDO("mysql:host={$this->getHost()};dbname={$this->getDb()}",$this->getUser(),$this->getPwd(),array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')));
							}catch(PDOException $e){
								echo "Erro ao conectar ao banco de dados: {$e->getMessage()}";
							}
							break;
						case "sqlite":
							try{
								$this->setConexao(new PDO("sqlite:$this->getDb()"));

							}catch(PDOException $e){
								$e->getMessage();
								echo "Erro ao conectar ao banco de dados";
							}
							break;
						default:
							throw new Exception("SGBD não compatível com a aplicação");
					}
					$this->getConexao()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}else{
					throw new Exception("Dados incorretos no arquivo de configuração");
				}
			}else{
				throw new Exception("Arquivo de configuração não encontrado");
			}
		}catch(Exception $ex){
			echo "Erro: {$ex->getMessage()}";
		}
	}
	public function __destruct(){
		$this->fecharConexao();
	}
	private function fecharConexao(){
		$this->setConexao(null);
	}
}
?>
