<?php
    class Cliente{
        private $nome;
        private $rg;
        private $cpf;
        private $cep;

        public function __construct($nome, $rg, $cpf, $cep){
            $this->nome = $nome;
            $this->rg = $rg;
            $this->cpf = $cpf;
            $this->cep = $cep;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getCep(){
            return $this->cep;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function getRG(){
            return $this->rg;
        }
       function setNome($nome){
        $this->nome = $nome;
       }
       function setCep($cep){
           $this->cep = $cep;
        }
        function setCpf($cpf){
            $this->cpf = $cpf;
        }
        function setRG($rg){
            $this->rg = $rg;
        }



        function valida_cadastro( $nome, $rg, $cpf, $cep){
            if($nome != ""|| $rg != "" || $cpf != "" || $cep != ""){
                echo "<center><h3>O cliente esta pronto pra ser cadastrado!</h3></center>";

            }else{
                echo "<center><h3>Preencha todos os campos</h3></center>";
            }

        }
    }
?>