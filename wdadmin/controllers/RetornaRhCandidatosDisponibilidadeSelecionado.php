<?php

require_once "../class/RhCandidatosDisponibilidade.class.php";

$RhCandidatosDisponibilidade = new RhCandidatosDisponibilidade();
$RhCandidatosDisponibilidade->setId_rh_candidatos($_POST['viIdRhCandidatos']);

if ($RhCandidatosDisponibilidade->edita_dados()):
    print $RhCandidatosDisponibilidade->getRetorno_dados();
else:
    print 0;
endif;