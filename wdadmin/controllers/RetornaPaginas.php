<?php

require_once "../class/Paginas.class.php";

$Paginas = new Paginas();

if ($Paginas->consulta_dados()):
    print $Paginas->getRetorno_dados();
else:
    print 0;
endif;