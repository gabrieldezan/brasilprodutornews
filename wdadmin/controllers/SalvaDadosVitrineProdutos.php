<?php

require_once "../class/Arquivos.class.php";
require_once "../class/VitrineProdutos.class.php";

include 'MontaUrlAmigavel.php';

$Arquivos = new Arquivos();
$VitrineProdutos = new VitrineProdutos();

$VitrineProdutos->setId_vitrine_produto($_POST['inputIdVitrineProdutosCadastro']);
$VitrineProdutos->setDescricao($_POST['inputDescricao']);
$VitrineProdutos->setDetalhes($_POST['inputDetalhes']);
$VitrineProdutos->setGarantia($_POST['inputGarantia']);
$VitrineProdutos->setPeso($_POST['inputPeso']);
$VitrineProdutos->setDimensoes($_POST['inputDimensoes']);
$VitrineProdutos->setMateriais($_POST['inputMateriais']);

$Arquivos->setArquivo_atual($_POST['inputManualAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputManual']);
$Arquivos->setNome_amigavel(url_amigavel($_POST['inputDescricao']));
$Arquivos->setPasta("vitrine_produtos");
$Arquivos->insere_arquivo();
$VitrineProdutos->setManual($Arquivos->getRetorno_arquivo());

$VitrineProdutos->setValor($_POST['inputValor']);
$VitrineProdutos->setId_vitrine_grupo($_POST['inputIdVitrineGrupo']);
$VitrineProdutos->setId_vitrine_subgrupo($_POST['inputIdVitrineSubgrupo']);
$VitrineProdutos->setId_vitrine_categoria($_POST['inputCategoria']);
$VitrineProdutos->setSituacao($_POST['inputSituacao']);
$VitrineProdutos->setStatus($_POST['inputStatus']);
$VitrineProdutos->setUrl_amigavel(url_amigavel($_POST['inputDescricao']));

if ($VitrineProdutos->salva_dados()) {
    print $VitrineProdutos->getRetorno_dados();
} else {
    print 0;
}
