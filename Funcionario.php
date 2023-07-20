<?php
class Funcionario implements PagavelInterface 
{
    public function __construct(
        private string $cargo, 
        private int $salario, 
        private int $comissao = 0
    ) {

    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getRemuneracao() 
    {
        if($this->getCargo() === "Representante") {
            return $this->salario + $this->comissao;
        }
        return $this->salario;
    }
}

?>