<?php

require_once "../class/VitrineEventoTimes.php";

$VitrineEventoTimes = new VitrineEventoTimes();

$VitrineEventoTimes->setId_vitrine_evento($_POST['viIdVitrineEvento']);

if ($VitrineEventoTimes->consulta_dados()):
    print $VitrineEventoTimes->getRetorno_dados();
else:
    print 0;
endif;