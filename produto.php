<?php
class Produto{
    private $titulo;
    private $descricao;
    private $valor;
    private $quantidade;
 

    public function __construct($titulo, $descricao, $valor, $quantidade){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
    }

    function set_titulo($titulo){
        $this->titulo = $titulo;
    }
    function set_descricao($descricao){
        $this->descricao = $descricao;
    }
    function set_valor($valor){
        $this->valor = $valor;
    }
    function set_quantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    function get_titulo(){
        return $this->titulo;
    }

    function get_descricao(){
        return $this->descricao;
    }

    function get_valor(){
        return $this->valor;
    }
    function get_quantidade(){
        return $this->quantidade;
    }
    function lucro_produto($titulo, $valor, $quantidade){
      if($quantidade > 20){
        echo "<h1>Este produto pode ir para o estoque!</h1><br>";
      }else{
        echo "<h1>Este produto tem pouca quantidade, por isso nao deve ir para estoque!</h1>";
      } 
    }

    function cadastrar_produto($titulo, $descricao, $valor, $quantidade, $produto){
        $data[] = [
            'titulo' => $titulo,
            'descricao' => $descricao,
            'valor' => $valor,
            'quantidade' => $quantidade
        ];

        array_push($produto,  $data);

        echo "Voce cadastrou um novo produto!";
       
    }

    
}
?>