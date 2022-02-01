<?php

require_once "../class/RhCandidatosFormacaoCursos.class.php";

$RhCandidatosFormacaoCursos = new RhCandidatosFormacaoCursos();
$RhCandidatosFormacaoCursos->setId_rh_candidatos($_POST['viIdRhCandidatos']);

if ($RhCandidatosFormacaoCursos->edita_dados()):
    print $RhCandidatosFormacaoCursos->getRetorno_dados();
else:
    print 0;
endif;