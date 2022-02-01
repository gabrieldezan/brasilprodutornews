<?php

require_once "../class/Paginas.class.php";

$Paginas = new Paginas();
$Paginas->setId_paginas($_POST['inputIdPaginas']);
$Paginas->setTitulo($_POST['inputTitulo']);
$Paginas->setIcone($_POST['inputIcone']);
$Paginas->setImagem_destaque($_POST['inputImagem']);
$Paginas->setTexto($_POST['inputTexto']);
$Paginas->setLink($_POST['inputLink']);
$Paginas->setData($_POST['inputData']);
$Paginas->setHora($_POST['inputHora']);
$Paginas->setPosicao($_POST['inputPosicao'] != "" ? $_POST['inputPosicao'] : "0");
$Paginas->setUrl($_POST['inputUrl']);

if ($Paginas->salva_dados()):
    print $Paginas->getRetorno_dados();
else:
    print 0;
endif;