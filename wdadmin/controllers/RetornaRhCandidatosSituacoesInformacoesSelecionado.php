<?php

require_once "../class/RhCandidatosSituacoesInformacoes.class.php";

$RhCandidatosSituacoesInformacoes = new RhCandidatosSituacoesInformacoes();
$RhCandidatosSituacoesInformacoes->setId_rh_candidatos($_POST['viIdRhCandidatos']);

if ($RhCandidatosSituacoesInformacoes->edita_dados()):
    print $RhCandidatosSituacoesInformacoes->getRetorno_dados();
else:
    print 0;
endif;