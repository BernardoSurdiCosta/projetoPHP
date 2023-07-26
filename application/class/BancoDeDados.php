<?php
    class BancoDeDados {
        private $dbNome = 'db_produtos';
        private $dbHost = 'localhost';
        private $dbUsuario = 'root';
        private $dbSenha = 'senai';
        private $conexao;

        //CONECTAR
        public function conectar() {
            $strConnection = "mysql:host={$this->dbHost};dbname={$this->dbNome}";

            try{
                $this->conexao = new PDO($strConnection, $this->dbUsuario, $this->dbSenha);

            }catch(PDOException $error){
                throw new ErrorException($error->getMessage());
            }
        }

        //BUSCAR
        public function buscarUm($sql, $param = []) {
            try{
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute($param);
                return $stmt->fetch(PDO::FETCH_ASSOC);

            }catch(PDOException $error){
                throw new ErrorException($error->getMessage());
            }
        }

        public function buscarTodos($sql, $param = []) {
            try{
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute($param);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
                
            }catch(PDOException $error){
                throw new ErrorException($error->getMessage());
            }
        }

        //INSERIR
        public function inserir($sql, $param = []){
            try{
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute();
                return TRUE;
            }catch(PDOException $error){
                throw new ErrorException($error->getMessage());
            }
        }

        //REMOVER
        public function deletar($sql, $param = []){
            try{
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute();
                return TRUE;
            }catch(PDOException $error){
                throw new ErrorException($error->getMessage());
            }
        }

        //ALTERAR
        public function atualizar($sql, $param = []){
            try{
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute();
                return TRUE;
            }catch(PDOException $error){
                throw new ErrorException($error->getMessage());
            }
        }

        //DESCONECTAR   
        public function desconectar(){
            $this->conexao = null;
        }
    }