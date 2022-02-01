<?php

require_once "../class/Arquivos.class.php";
require_once "../class/Solucoes.class.php";

include 'MontaUrlAmigavel.php';

$Arquivos = new Arquivos();
$Solucoes = new Solucoes();

$Solucoes->setId_solucoes($_POST['inputIdSolucoes']);
$Solucoes->setTitulo($_POST['inputTitulo']);
$Solucoes->setDescricao($_POST['inputDescricao']);

$Arquivos->setArquivo_atual($_POST['inputImagemIconeAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputImagemIcone']);
$Arquivos->setNome_amigavel("icone-".url_amigavel($_POST['inputTitulo']));
$Arquivos->setPasta("solucoes");
$Arquivos->insere_arquivo();
$Solucoes->setImagem_icone($Arquivos->getRetorno_arquivo());

$Arquivos->setArquivo_atual($_POST['inputImagemAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputImagem']);
$Arquivos->setNome_amigavel(url_amigavel($_POST['inputTitulo']));
$Arquivos->setPasta("solucoes");
$Arquivos->insere_arquivo();
$Solucoes->setImagem($Arquivos->getRetorno_arquivo());

$Arquivos->setArquivo_atual($_POST['inputQ1ImagemAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputQ1Imagem']);
$Arquivos->setNome_amigavel("qualidade1-" . url_amigavel($_POST['inputTitulo']));
$Arquivos->setPasta("solucoes");
$Arquivos->insere_arquivo();
$Solucoes->setQ1_imagem($Arquivos->getRetorno_arquivo());
$Solucoes->setQ1_titulo($_POST['inputQ1Titulo']);
$Solucoes->setQ1_descricao($_POST['inputQ1Descricao']);

$Arquivos->setArquivo_atual($_POST['inputQ2ImagemAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputQ2Imagem']);
$Arquivos->setNome_amigavel("qualidade2-" . url_amigavel($_POST['inputTitulo']));
$Arquivos->setPasta("solucoes");
$Arquivos->insere_arquivo();
$Solucoes->setQ2_imagem($Arquivos->getRetorno_arquivo());
$Solucoes->setQ2_titulo($_POST['inputQ2Titulo']);
$Solucoes->setQ2_descricao($_POST['inputQ2Descricao']);

$Arquivos->setArquivo_atual($_POST['inputQ3ImagemAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputQ3Imagem']);
$Arquivos->setNome_amigavel("qualidade3-" . url_amigavel($_POST['inputTitulo']));
$Arquivos->setPasta("solucoes");
$Arquivos->insere_arquivo();
$Solucoes->setQ3_imagem($Arquivos->getRetorno_arquivo());
$Solucoes->setQ3_titulo($_POST['inputQ3Titulo']);
$Solucoes->setQ3_descricao($_POST['inputQ3Descricao']);
$Solucoes->setUrl_amigavel(url_amigavel($_POST['inputTitulo']));

$Solucoes->setStatus($_POST['inputStatus']);

if ($Solucoes->salva_dados()) {
    print $Solucoes->getRetorno_dados();
} else {
    print 0;
}