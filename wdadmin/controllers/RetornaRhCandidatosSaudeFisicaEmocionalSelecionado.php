<?php

require_once "../class/RhCandidatosSaudeFisicaEmocional.class.php";

$RhCandidatosSaudeFisicaEmocional = new RhCandidatosSaudeFisicaEmocional();
$RhCandidatosSaudeFisicaEmocional->setId_rh_candidatos($_POST['viIdRhCandidatos']);

if ($RhCandidatosSaudeFisicaEmocional->edita_dados()):
    print $RhCandidatosSaudeFisicaEmocional->getRetorno_dados();
else:
    print 0;
endif;