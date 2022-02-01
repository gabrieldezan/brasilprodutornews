<?php

require_once "../class/VitrineCategorias.class.php";

$VitrineCategorias = new VitrineCategorias();

if ($VitrineCategorias->consulta_dados()):
    print $VitrineCategorias->getRetorno_dados();
else:
    print 0;
endif;