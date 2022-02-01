<?php

require_once "../class/RhVagas.class.php";

$RhVagas = new RhVagas();
$RhVagas->setId_rh_vagas($_POST['viIdRhVagas']);

if ($RhVagas->edita_dados()):
    print $RhVagas->getRetorno_dados();
else:
    print 0;
endif;