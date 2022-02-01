<?php

require_once "../class/RhCandidatos.class.php";

$RhCandidatos = new RhCandidatos();
$RhCandidatos->setId_rh_candidatos($_POST['viIdRhCandidatos']);

if ($RhCandidatos->edita_dados()):
    print $RhCandidatos->getRetorno_dados();
else:
    print 0;
endif;