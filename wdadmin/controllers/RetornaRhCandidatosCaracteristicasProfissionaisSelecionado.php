<?php

require_once "../class/RhCandidatosCaracteristicasProfissionais.class.php";

$RhCandidatosCaracteristicasProfissionais = new RhCandidatosCaracteristicasProfissionais();
$RhCandidatosCaracteristicasProfissionais->setId_rh_candidatos($_POST['viIdRhCandidatos']);

if ($RhCandidatosCaracteristicasProfissionais->edita_dados()):
    print $RhCandidatosCaracteristicasProfissionais->getRetorno_dados();
else:
    print 0;
endif;