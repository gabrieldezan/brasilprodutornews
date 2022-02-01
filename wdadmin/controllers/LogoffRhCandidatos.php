<?php

require_once "../class/RhCandidatos.class.php";

$RhCandidatos = new RhCandidatos();

if ($RhCandidatos->logoff()):
    print 1;
else:
    print 0;
endif;