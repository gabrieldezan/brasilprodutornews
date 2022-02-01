<?php

require_once "../class/RhCandidatosCaracteristicasFisicas.class.php";

$RhCandidatosCaracteristicasFisicas = new RhCandidatosCaracteristicasFisicas();
$RhCandidatosCaracteristicasFisicas->setId_rh_candidatos($_POST['viIdRhCandidatos']);

if ($RhCandidatosCaracteristicasFisicas->edita_dados()):
    print $RhCandidatosCaracteristicasFisicas->getRetorno_dados();
else:
    print 0;
endif;