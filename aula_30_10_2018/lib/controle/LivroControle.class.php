<?php
    require_once("lib/Conexao.class.php");
    require_once("lib/modelo/Livro.class.php");
    final class ControleLivro{
        public function consultaTodos($ordem, $coluna){
            $conexao = new Conexao("confi/confi.ini");
            //COMANDO SQL PARA SELECIONAR OS DADOS
            $sql = "SELECT * FROM livro ORDER BY $coluna $ordem";
            $comando = $conexao->getConexao()->prepare($sql);
            //executa o comando sql
            $comando->execute();
            $resu = $comando->fetchAll();
            //faz a varredura do array
            $lista = array();
            foreach($resu as $item){
                $livro = new Livro();
                $livro->setId($item->id);
                $livro->setTitulo($item->titulo);
                $livro->setPaginas($item->paginas);
                $livro->setTema($item->tema);
                array_push($lista, $livro);
            }
            $conexao->__destruct();
            return $lista;
        }
        public function adicionarLivro($livro){
            //faz a conexao
            $conexao = new Conexao("confi/confi.ini");
            //COMANDO SQL PARA INSERIR OS DADOS
            $sql = "INSERT INTO livro(titulo, paginas, tema) VALUES (:ti,:pa,:te)";
            //prepara para ser modificada pelo php
            $comando = $conexao->getConexao()->prepare($sql);
            //substitue os valores de referencia para os valores das variaveis do livro
            $comando->bindValue(":ti",$livro->getTitulo());
            $comando->bindValue(":pa",$livro->getPaginas());
            $comando->bindValue(":te",$livro->getTema());
            //executa o comando sql
            if($comando->execute()){
                $conexao->__destruct();
                return true;
            }else{
                $conexao->__destruct();
                return false;
            }
        }
        //atualiza registro do banco
        public function atualizaLivro($livro){
            $conexao = new Conexao("confi/confi.ini");
            //prepara a query para atualizar registro do banco 
            $up = $conexao->getConexao()->prepare("UPDATE livro SET titulo=:titulo, tema=:tema, paginas=:paginas WHERE id=:id;");
            $up->bindValue(":titulo", $livro->getTitulo());
            $up->bindValue(":tema", $livro->getTema());
            $up->bindValue(":paginas", $livro->getPaginas());
            $up->bindValue(":id", $livro->getId());
            if($up->execute()){
                $conexao->__destruct();
                return true;
            }else{
                $conexao->__destruct();
                return false;
            }
        }
        public function deletaLivro($id){
            $conexao = new Conexao("confi/confi.ini");
            //deleta livro
            $del = $conexao->getConexao()->prepare("DELETE FROM livro WHERE id=:id");
            $del->bindValue(":id",$id);
            if($del->execute()){
                $conexao->__destruct();
                return true;
            }else{
                $conexao->__destruct();
                return false;
            }
        }
        public function selecionarId($id){
            $conexao = new Conexao("confi/confi.ini");
            //seleciona o livro pelo id
            $sql = "SELECT * FROM livro WHERE id=:id";
            $comando = $conexao->getConexao()->prepare($sql);
            $comando->bindValue(":id", $id);
            $comando->execute();
            $resu = $comando->fetch();
            $livro = new Livro();
            $livro->setId($resu->id);
            $livro->setTitulo($resu->titulo);
            $livro->setPaginas($resu->paginas);
            $livro->setTema($resu->tema);
            $conexao->__destruct();
            return $livro;
        }
        public function selecionarNome($nome){
            $conexao = new Conexao("confi/confi.ini"); 
            //seleciona pelo nome         
            $sql = "SELECT * FROM livro WHERE titulo LIKE :nome";
            $comando = $conexao->getConexao()->prepare($sql);
            $comando->bindValue(":nome", "%$nome%");
            $comando->execute();
            $lista = [];
            $resu = $comando->fetchAll();
            foreach($resu as $item){
                $livro = new Livro(); 
                $livro->setId($item->id);
                $livro->setTitulo($item->titulo);
                $livro->setPaginas($item->paginas);
                $livro->setTema($item->tema);
                array_push($lista,$livro);
            }
            $conexao->__destruct();
            return $lista;
        }
        public function selecionarTema($tema){
            $conexao = new Conexao("confi/confi.ini");
            /* seleciona pelo tema */          
            $comando = $conexao->getConexao()->prepare("SELECT * FROM livro WHERE  tema LIKE :tema");
            $comando->bindValue(":tema","%$tema%");
            $comando->execute();
            $lista = [];
            $resu = $comando->fetchAll();
            foreach($resu as $item){
                $livro = new Livro(); 
                $livro->setId($item->id);
                $livro->setTitulo($item->titulo);
                $livro->setPaginas($item->paginas);
                $livro->setTema($item->tema);
                array_push($lista,$livro);
            }
            $conexao->__destruct();
            return $lista;
        }
        public function selecionarPaginas($paginas){
            $conexao = new Conexao("confi/confi.ini");
            //seleciona pelo numero de paginas
            $comando = $conexao->getConexao()->prepare("SELECT * FROM livro WHERE paginas LIKE :paginas");
            $comando->bindValue(":paginas","%$paginas%");
            $comando->execute();
            $resu = $comando->fetchAll();
            $lista = [];
            foreach($resu as $item){
                $livro = new Livro(); 
                $livro->setId($item->id);
                $livro->setTitulo($item->titulo);
                $livro->setPaginas($item->paginas);
                $livro->setTema($item->tema);
                array_push($lista,$livro);
            }
            $conexao->__destruct();
            return $lista;
        }
    }


?>