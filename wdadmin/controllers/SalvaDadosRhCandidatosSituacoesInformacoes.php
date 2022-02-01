<?php

require_once "../class/RhCandidatosSituacoesInformacoes.class.php";

include 'MontaUrlAmigavel.php';

$RhCandidatosSituacoesInformacoes = new RhCandidatosSituacoesInformacoes();
$RhCandidatosSituacoesInformacoes->setId_rh_candidatos_situacoes_informacoes($_POST['inputIdRhCandidatosSituacoesInformacoes']);
$RhCandidatosSituacoesInformacoes->setProblemas_justica($_POST['inputProblemasJustica']);
$RhCandidatosSituacoesInformacoes->setQuanto_tempo_faz($_POST['inputQuantoTempoFaz']);
$RhCandidatosSituacoesInformacoes->setTipo_situacao_ocorreu($_POST['inputTipoSituacaoOcorreu']);
$RhCandidatosSituacoesInformacoes->setProcupacoes_momento($_POST['inputPreocupacoesMomento']);
$RhCandidatosSituacoesInformacoes->setComo_esta_sentindo_momento($_POST['inputComoEstaSentindoMomento']);
$RhCandidatosSituacoesInformacoes->setPrincipal_caracteristica($_POST['inputPrincipalCaracteristica']);
$RhCandidatosSituacoesInformacoes->setPrincipal_limitacao($_POST['inputPrincipalLimitacao']);
$RhCandidatosSituacoesInformacoes->setSituacao_mais_dificil_vida($_POST['inputSituacaoMaisDificilVida']);
$RhCandidatosSituacoesInformacoes->setReferencias_profissionais($_POST['inputReferenciasProfissionais']);
$RhCandidatosSituacoesInformacoes->setReferencias_pessoais($_POST['inputReferenciasPessoais']);
$RhCandidatosSituacoesInformacoes->setEmpresa_deve_escolher_voce($_POST['inputEmpresaDeveEscolherVoce']);
$RhCandidatosSituacoesInformacoes->setPretencao_salario($_POST['inputPretencaoSalario']);
$RhCandidatosSituacoesInformacoes->setDisponibilidade_horario($_POST['inputDisponibilidadeHorario']);
$RhCandidatosSituacoesInformacoes->setInformacoes_adicionais($_POST['inputInformacoesAdicionais']);
$RhCandidatosSituacoesInformacoes->setRedacao($_POST['inputRedacao']);
$RhCandidatosSituacoesInformacoes->setId_rh_candidatos($_POST['inputIdRhCandidatosAbaSituacoesInformacoes']);

if ($RhCandidatosSituacoesInformacoes->salva_dados()):
    print $RhCandidatosSituacoesInformacoes->getRetorno_dados();
else:
    print 0;
endif;