<?php

require_once "../class/RhCandidatos.class.php";

$RhCandidatos = new RhCandidatos();
$RhCandidatos->setEmail($_POST['email']);
$RhCandidatos->setSenha(md5($_POST['senha']));

if ($RhCandidatos->login()) {
    print 1;
} else {
    print 0;
}