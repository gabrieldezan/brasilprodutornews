<?php
require_once "../class/VitrineEventos.class.php";

$VitrineEventos = new VitrineEventos();

if ($VitrineEventos->consulta_dados()):
    print $VitrineEventos->getRetorno_dados();
else:
    print 0;
endif;