<?php

require_once "../class/RhVagas.class.php";

$RhVagas = new RhVagas();
$RhVagas->setId_clientes($_POST['viFiltroIdClientes']);
$RhVagas->setStatus($_POST['viFiltroStatus']);

if ($RhVagas->consulta_dados()):
    print $RhVagas->getRetorno_dados();
else:
    print 0;
endif;