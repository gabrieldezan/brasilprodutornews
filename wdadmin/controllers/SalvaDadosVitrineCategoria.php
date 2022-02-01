<?php

require_once "../class/VitrineCategorias.class.php";

$VitrineCategorias = new VitrineCategorias();
$VitrineCategorias->setId_vitrine_categoria($_POST['inputIdVitrineCategorias']);
$VitrineCategorias->setDescricao($_POST['inputDescricao']);
$VitrineCategorias->setStatus($_POST['inputStatus']);

if ($VitrineCategorias->salva_dados()):
    print $VitrineCategorias->getRetorno_dados();
else:
    print 0;
endif;