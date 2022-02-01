<?php

require_once "../class/Informacoes.class.php";

$Informacoes = new Informacoes();
$Informacoes->setId_paginas($_POST['vsIdPagina']);

if ($Informacoes->consulta_dados()):
    print $Informacoes->getRetorno_dados();
else:
    print 0;
endif;