<?php
require_once "Veiculo.php";

class VeiculoCarga extends Veiculo{

public function __construct(
    private float $kg,
    private float $altura,
    private float $largura,
    private float $profundidade
){}

    public function getCapacidadeKg(): float{
        return $this->kg;
    }

    public function getCapacidadeAltura(): float{
        return $this->altura;
    }

    public function getCapacidadeLargura(): float{
        return $this->largura;
    }

    public function getCapacidadeProfundidade(): float{
        return $this->profundidade;
    }

    public function getEspecie(): string{
        return "Carga";
    }
}