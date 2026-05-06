<?php
require_once 'Veiculo.php';

class VeiculoPassageiro extends Veiculo{

    public function getEspecie(): string{
        return "Passageiro";
    }
}