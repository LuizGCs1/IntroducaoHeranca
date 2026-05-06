<?php
class Veiculo{
    public function __construct(
        private string $placa,
        private string $marca,
        private string $modelo,
        private int $anoModelo,
        private int $anoFabricacao,
        private string $chassi,
        private string $renavam,
        private string $procedencia,
        private string $corExterna,
        private string $corInterna,
        private string $tipoCombustivel,
        private string $motor,
        private float $quilometragem,
        private float $consumoMedio,
        private int $numPortas,
        private int $numPassageiros,
        private array $opcionais = []
    ){}

    public function getPlaca(): string{
        return $this->placa;
    }

    public function getMarca(): string{
        return $this->marca;
    }       

    public function getModelo(): string{
        return $this->modelo;
    }   

    public function getAnoModelo(): int{
        return $this->anoModelo;
    }   
    
    public function getAnoFabricacao(): int{
        return $this->anoFabricacao;
    }

    public function getChassi(): string{
        return $this->chassi;
    }

    public function getRenavam(): string{
        return $this->renavam;
    }

    public function getProcedencia(): string{
        return $this->procedencia;
    }

    public function getCorExterna(): string{
        return $this->corExterna;
    }

    public function getCorInterna(): string{
        return $this->corInterna;
    }

    public function getTipoCombustivel(): string{
        return $this->tipoCombustivel;
    }

    public function getMotor(): string{
        return $this->motor;
    }

    public function getQuilometragem(): float{
        return $this->quilometragem;
    }

    public function getConsumoMedio(): float{
        return $this->consumoMedio;
    }

    public function getNumPortas(): int{
        return $this->numPortas;
    }

    public function getNumPassageiros(): int{
        return $this->numPassageiros;
    }

    public function getOpcionais(): array{
        return $this->opcionais;
    }
}