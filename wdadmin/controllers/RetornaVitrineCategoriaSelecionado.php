<?php

require_once "../class/VitrineCategorias.class.php";

$VitrineCategorias = new VitrineCategorias();
$VitrineCategorias->setId_vitrine_categoria($_POST['viIdVitrineCategorias']);

if ($VitrineCategorias->edita_dados()):
    print $VitrineCategorias->getRetorno_dados();
else:
    print 0;
endif;