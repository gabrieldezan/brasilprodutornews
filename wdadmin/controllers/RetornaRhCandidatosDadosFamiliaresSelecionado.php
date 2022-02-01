<?php

require_once "../class/RhCandidatosDadosFamiliares.class.php";

$RhCandidatosDadosFamiliares = new RhCandidatosDadosFamiliares();
$RhCandidatosDadosFamiliares->setId_rh_candidatos($_POST['viIdRhCandidatos']);

if ($RhCandidatosDadosFamiliares->edita_dados()):
    print $RhCandidatosDadosFamiliares->getRetorno_dados();
else:
    print 0;
endif;