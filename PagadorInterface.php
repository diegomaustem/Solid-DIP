<?php

interface PagadorInterface 
{
    public function setPagavel(PagavelInterface $pagavel);

    public function getSalario();
}

?>