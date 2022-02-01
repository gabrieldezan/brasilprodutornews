<?php

require_once "../class/VitrineEventoTimes.php";

$VitrineEventoTimes = new VitrineEventoTimes();
$VitrineEventoTimes->setId_vitrine_evento_times($_POST['viIdEventoTimes']);

if ($VitrineEventoTimes->edita_dados()):
    print $VitrineEventoTimes->getRetorno_dados();
else:
    print 0;
endif;