<?php

class Carro{

    //Atributos
    private $modelo;
    private $cor;
    private $placa;
    private $numeroPortas;

    //Construtor
    function __construct($modelo, $cor, $placa, $numeroPortas){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->numeroPortas = $numeroPortas;
    }

    //Getters e Setters
    function set_modelo($modelo){
        $this->modelo = $modelo;
    }

    function get_modelo(){
        return($this->modelo);
    }

    function set_cor($cor){
        $this->cor = $cor;
    }

    function get_cor(){
        return($this->cor);
    }

    function set_placa($placa){
        $this->placa = $placa;
    }

    function get_placa(){
        return($this->placa);
    }

    function set_numeroPortas($numeroPortas){
        $this->modelo = $numeroPortas;
    }

    function get_numeroPortas(){
        return($this->numeroPortas);
    }

    //Métodos
    function ligar(){
        echo "O carro " . $this->modelo . " ligado!";
    }

    function acelerar(){
        echo "O carro " . $this->modelo . " está acelerando...";
    }

    function frear(){
        echo "O carro " . $this->modelo . " está freando...";
    }

    function acionarSeta($orientacao){
        if($orientacao == "esquerda") echo $this->modelo . ", seta para esquerda acionada...";
        else if ($orientacao == "direita") echo $this->modelo . ", seta para direita acionada...";
        else echo "Prudentino...";
    }
}

?>