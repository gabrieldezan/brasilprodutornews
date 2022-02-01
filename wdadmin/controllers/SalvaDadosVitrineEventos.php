<?php

require_once "../class/Arquivos.class.php";
require_once "../class/VitrineEventos.class.php";

include 'MontaUrlAmigavel.php';

$Arquivos = new Arquivos();
$VitrineEventos = new VitrineEventos();

$VitrineEventos->setId_vitrine_evento($_POST['inputIdVitrineEventosCadastro']);
$VitrineEventos->setDescricao($_POST['inputDescricao']);
$VitrineEventos->setDetalhes($_POST['inputDetalhes']);
$VitrineEventos->setEtiqueta($_POST['inputEtiqueta']);
$VitrineEventos->setCorEtiqueta($_POST['inputCorEtiqueta']);
$VitrineEventos->setStatus($_POST['inputStatus']);

$VitrineEventos->setValor($_POST['inputValor']);
$VitrineEventos->setValor_combatshirt($_POST['inputValorCombatShirt']);
$VitrineEventos->setDataEvento($_POST['inputDataEvento']);
$VitrineEventos->setMaisInformacoes($_POST['inputMaisInformacoes']);
$VitrineEventos->setMapa($_POST['inputMapa']);
$VitrineEventos->setUrlAmigavel(url_amigavel($_POST['inputDescricao']));

$Arquivos->setArquivo_atual($_POST['inputImagem']);
$Arquivos->setNovo_arquivo($_FILES['inputImagem']);
$Arquivos->setNome_amigavel("evento");
$Arquivos->setPasta("eventos");
$Arquivos->insere_arquivo();
$VitrineEventos->setImagem($Arquivos->getRetorno_arquivo());

if ($VitrineEventos->salva_dados()) {
    print $VitrineEventos->getRetorno_dados();
} else {
    print 0;
}
