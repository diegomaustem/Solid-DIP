<?php

class ServicoDePagamento
{
    public function __construct(
        private PagavelInterface $quemRecebe,
        private PagadorInterface $quemPaga
    ) {

    }

    public function prepararPagamento()
    {
        $this->quemPaga->setPagavel($this->quemRecebe);
        return $this;
    }

    public function pagar()
    {
        $cargo = $this->quemRecebe->getCargo();
        $valor = $this->quemPaga->getSalario();
       
        echo "Estou pagando para o {$cargo} o valor de R$ {$valor}" . PHP_EOL;
    }
}

?>