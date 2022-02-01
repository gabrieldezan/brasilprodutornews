<?php

require_once "../class/RhCandidatosCaracteristicasFisicas.class.php";

include 'MontaUrlAmigavel.php';

$RhCandidatosCaracteristicasFisicas = new RhCandidatosCaracteristicasFisicas();
$RhCandidatosCaracteristicasFisicas->setId_rh_candidatos_caracteristicas_fisicas($_POST['inputIdRhCandidatosCaracteristicasFisicas']);
$RhCandidatosCaracteristicasFisicas->setAltura($_POST['inputAltura']);
$RhCandidatosCaracteristicasFisicas->setPeso($_POST['inputPeso']);
$RhCandidatosCaracteristicasFisicas->setPossui_alguma_limitacao($_POST['inputPossuiAlgumaLimitacao']);
$RhCandidatosCaracteristicasFisicas->setQual_limitacao($_POST['inputQualLimitacao']);
$RhCandidatosCaracteristicasFisicas->setPossui_barba($_POST['inputPossuiBarba']);
$RhCandidatosCaracteristicasFisicas->setDisposto_tirar_barba($_POST['inputDispostoTirarBarba']);
$RhCandidatosCaracteristicasFisicas->setUnhas($_POST['inputUnhas']);
$RhCandidatosCaracteristicasFisicas->setCabelo($_POST['inputCabelo']);
$RhCandidatosCaracteristicasFisicas->setPrefere_manter($_POST['inputPrefereManter']);
$RhCandidatosCaracteristicasFisicas->setHabito_cuidados_restritivos($_POST['inputHabitosCuidadosRestritivos']);
$RhCandidatosCaracteristicasFisicas->setQual_habito($_POST['inputQualHabito']);
$RhCandidatosCaracteristicasFisicas->setId_rh_candidatos($_POST['inputIdRhCandidatosAbaCaracteristicasFisicas']);

if ($RhCandidatosCaracteristicasFisicas->salva_dados()):
    print $RhCandidatosCaracteristicasFisicas->getRetorno_dados();
else:
    print 0;
endif;