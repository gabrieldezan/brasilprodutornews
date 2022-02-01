<?php

require_once "../class/Arquivos.class.php";
require_once "../class/Informacoes.class.php";

include 'MontaUrlAmigavel.php';

$Arquivos = new Arquivos();
$Arquivos->setArquivo_atual($_POST['inputImagemAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputImagem']);
$Arquivos->setNome_amigavel(url_amigavel($_POST['hiddenTitulo']) . '-' . url_amigavel($_POST['inputTitulo']));
$Arquivos->setPasta("informacoes");

$Arquivos->insere_arquivo();

if ($Arquivos->getErro() == 0 || $Arquivos->getErro() == 4) {
    $Informacoes = new Informacoes();
    $Informacoes->setId_informacoes($_POST['inputIdInformacoes']);
    $Informacoes->setTitulo($_POST['inputTitulo']);
    $Informacoes->setIcone($_POST['inputIcone']);
    $Informacoes->setImagem_destaque($Arquivos->getRetorno_arquivo());
    $Informacoes->setTexto($_POST['inputTexto']);
    $Informacoes->setLink($_POST['inputLink']);
    $Informacoes->setData($_POST['inputData'] == "" ? "0000-00-00" : $_POST['inputData']);
    $Informacoes->setHora($_POST['inputHora'] == "" ? "00:00:00" : $_POST['inputHora']);
    $Informacoes->setId_paginas($_POST['hiddenIdPaginas']);

    if ($Informacoes->salva_dados()) {
        print $Informacoes->getRetorno_dados();
    } else {
        print 0;
    }
} else {
    print 0;
}