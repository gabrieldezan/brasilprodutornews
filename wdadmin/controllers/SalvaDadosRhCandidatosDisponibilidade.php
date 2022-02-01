<?php

require_once "../class/RhCandidatosDisponibilidade.class.php";

include 'MontaUrlAmigavel.php';

$RhCandidatosDisponibilidade = new RhCandidatosDisponibilidade();
$RhCandidatosDisponibilidade->setId_rh_candidatos_disponibilidade($_POST['inputIdRhCandidatosDisponibilidade']);
$RhCandidatosDisponibilidade->setViagens($_POST['inputViagens']);
$RhCandidatosDisponibilidade->setTrabalhar_sabados($_POST['inputTrabalharSabados']);
$RhCandidatosDisponibilidade->setHoras_extras(url_amigavel($_POST['inputHorasExtras']));
$RhCandidatosDisponibilidade->setCursos($_POST['inputCursos']);
$RhCandidatosDisponibilidade->setMudar_cidade($_POST['inputMudarCidade']);
$RhCandidatosDisponibilidade->setId_rh_candidatos($_POST['inputIdRhCandidatosAbaDisponibilidade']);

if ($RhCandidatosDisponibilidade->salva_dados()):
    print $RhCandidatosDisponibilidade->getRetorno_dados();
else:
    print 0;
endif;