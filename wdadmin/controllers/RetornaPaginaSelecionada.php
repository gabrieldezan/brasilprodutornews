<?php

require_once "../class/Paginas.class.php";

$Paginas = new Paginas();
$Paginas->setId_paginas($_POST['viIdPaginas']);

if ($Paginas->edita_dados()):
    print $Paginas->getRetorno_dados();
else:
    print 0;
endif;