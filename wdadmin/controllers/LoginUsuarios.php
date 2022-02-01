<?php

require_once "../class/Usuarios.class.php";

$Usuarios = new Usuarios();
$Usuarios->setLogin($_POST['login']);
$Usuarios->setSenha(md5($_POST['senha']));

if ($Usuarios->login()) {
    print 1;
} else {
    print 0;
}