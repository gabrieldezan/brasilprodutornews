<?php

require_once "../class/Solucoes.class.php";

$Solucoes = new Solucoes();

if ($Solucoes->consulta_dados()):
    print $Solucoes->getRetorno_dados();
else:
    print 0;
endif;