<?php

require_once "../class/VitrineEventoTimes.php";

$VitrineEventoTimes = new VitrineEventoTimes();

$VitrineEventoTimes->setId_vitrine_evento_times($_POST['inputIdVitrineEventoTimes']);
$VitrineEventoTimes->setId_vitrine_evento($_POST['inputIdVitrineEvento']);
$VitrineEventoTimes->setTime($_POST['inputTime']);

if ($VitrineEventoTimes->salva_dados()) {
    print $VitrineEventoTimes->getRetorno_dados();
} else {
    print 0;
}
