<?php

Class Veiculo {

    var $marca;
    var $modelo;
    var $ano;
    var $cor;
    var $valorDiaria;
    var $alugado;
    var $_ tipo (Passeio, Utilitario)

}

Class Passeio {

    var $velocMaxima;
    var $tetosolar;
    var $som;
    var $numPortas;

    function Detalhe(){
    }

}

Class Utilitario {
    var $carga;
    var $categoria;
    var $quantEixos;

    function Detalhe(){
     }

}

Class Locadora {
    var $codReserva;
    var $veiculo;
    var $locatario;
    var $data;
    var $numdiarias;

    function Alugar(){
    }

    function Desalugar(){
    }


    function Reservar(){
    }

    function ListarCarros(){
    }

}

Class Cliente {
    var $nome;
    var $cidade;
    var $idade;

    function DetalheCliente(){
    }

}