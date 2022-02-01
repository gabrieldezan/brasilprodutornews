<?php

require_once "../class/Usuarios.class.php";

$Usuarios = new Usuarios();

if ($Usuarios->logoff()):
    print 1;
else:
    print 0;
endif;