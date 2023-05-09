<?php
$array = array();
require "carro.php";
require_once("./produto.php");
require_once("./cliente.php");
require_once("./professor.php");



$carro1 = new Carro("Classic", "Cinza", "CPF-7521", 4);
$carro2 = new Carro("Civic", "Grafite", "FDS-1212", 4);
$produto  = new Produto("Bola","Bola de futebol, do tipo futsal",100,30);
$cliente = new Cliente("Yan Pablo Rodrigues", "56739021", "53624172890", "19064890");
$professor = new Professor("Jao da Silva", "joao@gmail.com", "998723819", "1000");



$carro1->ligar();
$carro1->acelerar();
$carro1->frear();
$carro1->acionarSeta("esquerda");
$produto->set_quantidade(10);

$carro1->set_cor("Amarelo");
echo $carro1->get_cor();
$produto->lucro_produto("Pipa", 2, 230);
$produto->cadastrar_produto("Bola","Bola de futebol, do tipo futsal",100,30, $array);
$cliente->valida_cadastro("Yan Pablo Rodrigues", "56739021", "53624172890", "19064890");
$professor->setNome("Jao da silva sauro");
$professor->verifica_curriculo();


?>
