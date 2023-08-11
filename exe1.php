<?php

class Cachorro
{
    public string $cor;
    public int $Patas;
    public int $velocidade;
    public bool $olhos;
    public bool $guiaManual;

    public function setCor(string $cor): void
    {
        $this->cor = $cor;
    }

    public function setPatas(int $patas): void 
    {
        $this->Patas = $patas;
    }

    public function setVelocidade(int $velocidade): void
    {
        $this->velocidade = $velocidade;
    }

    public function setOlhos(bool $olhos): void
    {
        $this->olhos = $olhos;
    }

    public function setGuiaManual(bool $guiaManual): void
    {
        $this->guiaManual = $guiaManual;
    }
}