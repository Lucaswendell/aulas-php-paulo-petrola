<?php
final class Conexao{
    //atributos
    private $conexao;
    private $user;
    private $db;
    private $pwd;
    private $type;
    private $host;
    //encapsulamento
    public function getHost(){
      return $this->host;
    }
    public function setHost($host){
        $this->host = (isset($host)) ? $host : null;
    }
    public function getConexao(){
        return $this->conexao;
    }
    public function setConexao($con){
        $this->conexao = (isset($con)) ? $con : null;
    }
    public function getUser(){
        return $this->user;
    }
    public function setUser($user){
        $this->user = (isset($user)) ? $user : null;
    }
    public function getDb(){
        return $this->db;
    }
    public function setDb($db){
        $this->db = (isset($db)) ? $db : null;
    }
    public function getPwd(){
        return $this->pwd;
    }
    public function setPwd($pwd){
        $this->pwd = (isset($pwd)) ? $pwd : null;
    }
    public function getType(){
        return $this->type;
    }
    public function setType($type){
        $this->type = (isset($type)) ? $type : null;
    }
    private function verificar(){
      if($this->getHost() == NULL || $this->getUser() == NULL || $this->getPwd() == NULL || $this->getDb() == NULL || $this->getType() == NULL){
  			return false;
  		}else{
  			return true;
  		}
    }
    //abre a conexao com o banco
    public function __construct($config){
      try{
        if(file_exists("confi/{$config}")){
          $arquivo = parse_ini_file("confi/{$config}"); //armazena o conteudo do arquivo como um array associativo
          $this->setHost($arquivo['host']);
          $this->setUser($arquivo['user']);
          $this->setPwd($arquivo['pwd']);
          $this->setType($arquivo['type']);
          $this->setDb($arquivo['name']);
          if($this->verificar()){
            //código
          }else{
            throw new Exception("Sem informações necessárias");
          }
        }else{
          //cria uma exeção da propria aplicação
          throw new Exception("Arquivo não encontrado");
        }
      }catch(Exception $e){
        //mostra o erro da exeção
        //getMessage() -> retorna a mensagem
        echo "Erro na aplicação: ".$e->getMessage();
        die(); //faz a aplicação para como se fosse um erro fatal
      }
    }
    //fecha a conexao
    public function __destruct(){
      $this->setConexao(null);
    }
}
?>
