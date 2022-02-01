<?php

require_once "../class/RhCandidatos.class.php";

$RhCandidatos = new RhCandidatos();

if ($RhCandidatos->consulta_dados()):
    print $RhCandidatos->getRetorno_dados();
else:
    print 0;
endif;