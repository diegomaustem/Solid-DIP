<?php

class Funcionario {

    public function __construct(
        private string $cargo, 
        private int $salario, 
        private int $comissao
    ) {

    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function getSalarioComComissao()
    {
        return $this->salario + $this->comissao;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
}

?>