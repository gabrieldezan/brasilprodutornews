<?php

require_once "../class/Solucoes.class.php";

$Solucoes = new Solucoes();
$Solucoes->setId_solucoes($_POST['viIdSolucoes']);

if ($Solucoes->edita_dados()):
    print $Solucoes->getRetorno_dados();
else:
    print 0;
endif;