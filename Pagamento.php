<?php

class Pagamento implements PagadorInterface
{

    public function __construct(
        private PagavelInterface $pagavel
    ) {

    }

    public function getSalario()
    {
        return $this->pagavel->getRemuneracao();
    }

    public function setPagavel(PagavelInterface $pagavel)
    {
        $this->pagavel = $pagavel;
    }
}

?>