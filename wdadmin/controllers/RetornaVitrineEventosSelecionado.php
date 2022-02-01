<?php

require_once "../class/VitrineEventos.class.php";

$VitrineEventos = new VitrineEventos();
$VitrineEventos->setId_vitrine_evento($_POST['viIdVitrineEventos']);

if ($VitrineEventos->edita_dados()):
    print $VitrineEventos->getRetorno_dados();
else:
    print 0;
endif;