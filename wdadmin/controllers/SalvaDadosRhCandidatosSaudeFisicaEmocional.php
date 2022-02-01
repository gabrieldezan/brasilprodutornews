<?php

require_once "../class/RhCandidatosSaudeFisicaEmocional.class.php";

include 'MontaUrlAmigavel.php';

$RhCandidatosSaudeFisicaEmocional = new RhCandidatosSaudeFisicaEmocional();
$RhCandidatosSaudeFisicaEmocional->setId_rh_candidatos_saude_fisica_emocional($_POST['inputIdRhCandidatosSaudeFisicaEmocional']);
$RhCandidatosSaudeFisicaEmocional->setDoencas($_POST['inputDoencas']);
$RhCandidatosSaudeFisicaEmocional->setFumante($_POST['inputFumante']);
$RhCandidatosSaudeFisicaEmocional->setFumante_quanto_tempo($_POST['inputFumanteQuantoTempo']);
$RhCandidatosSaudeFisicaEmocional->setParou_fumar($_POST['inputParouFumar']);
$RhCandidatosSaudeFisicaEmocional->setQuanto_tempo_parou($_POST['inputQuantoTempoParou']);
$RhCandidatosSaudeFisicaEmocional->setToma_algum_medicamento($_POST['inputTomaAlgumMedicamento']);
$RhCandidatosSaudeFisicaEmocional->setQual_medicamento($_POST['inputQualMedicamento']);
$RhCandidatosSaudeFisicaEmocional->setDorme_bem_noite($_POST['inputDormeBemNoite']);
$RhCandidatosSaudeFisicaEmocional->setJustifique_dorme_bem_noite($_POST['inputJustifiqueDormeBemNoite']);
$RhCandidatosSaudeFisicaEmocional->setDormiu_bem_noite_passada($_POST['inputDormiuBemNoitePassada']);
$RhCandidatosSaudeFisicaEmocional->setJustifique_dormiu_bem_noite_passada($_POST['inputJustifiqueDormiuBemNoitePassada']);
$RhCandidatosSaudeFisicaEmocional->setUsa_oculos($_POST['inputUsaOculos']);
$RhCandidatosSaudeFisicaEmocional->setEsta_usando_agora($_POST['inputEstaUsandoAgora']);
$RhCandidatosSaudeFisicaEmocional->setLentes($_POST['inputLentes']);
$RhCandidatosSaudeFisicaEmocional->setPratica_exercicios_fisicos($_POST['inputPraticaExerciciosFisicos']);
$RhCandidatosSaudeFisicaEmocional->setQual_exercicio($_POST['inputQuaisExercicios']);
$RhCandidatosSaudeFisicaEmocional->setConsome_bebidas_alcoolicas($_POST['inputConsomeBebidasAlcoolicas']);
$RhCandidatosSaudeFisicaEmocional->setUsa_usou_droga_ilicita($_POST['inputUsaUsouDrogaIlicita']);
$RhCandidatosSaudeFisicaEmocional->setQual_droga_ilicia($_POST['inputQualDrogaIlicita']);
$RhCandidatosSaudeFisicaEmocional->setEnvolveu_acidente_transito($_POST['inputEnvolveuAcidenteTransito']);
$RhCandidatosSaudeFisicaEmocional->setDanos_acidente($_POST['inputDanosAcidente']);
$RhCandidatosSaudeFisicaEmocional->setQuanto_tempo_faz($_POST['inputQuantoTempoFaz']);
$RhCandidatosSaudeFisicaEmocional->setVoce_foi_responsavel_acidente($_POST['inputVoceFoiResponsavelAcidente']);
$RhCandidatosSaudeFisicaEmocional->setJustifique($_POST['inputJustifique']);
$RhCandidatosSaudeFisicaEmocional->setId_rh_candidatos($_POST['inputIdRhCandidatosAbaSaudeFisicaEmocional']);

if ($RhCandidatosSaudeFisicaEmocional->salva_dados()):
    print $RhCandidatosSaudeFisicaEmocional->getRetorno_dados();
else:
    print 0;
endif;