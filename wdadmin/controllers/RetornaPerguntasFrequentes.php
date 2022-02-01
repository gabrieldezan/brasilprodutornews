<?php

require_once "../class/PerguntasFrequentes.class.php";

$PerguntasFrequentes = new PerguntasFrequentes();
$PerguntasFrequentes->setId_servicos($_POST['viFiltroIdServicos']);

if ($PerguntasFrequentes->consulta_dados()):
    print $PerguntasFrequentes->getRetorno_dados();
else:
    print 0;
endif;