<?php

class Pagamento {

    public function __construct(
        private Funcionario $funcionario
    ) {

    }

    public function getSalario()
    {
        if($this->funcionario->getCargo() === "Representante") {
            return $this->funcionario->getSalarioComComissao();
        }

        return $this->funcionario->getSalario();
    }
}

?>