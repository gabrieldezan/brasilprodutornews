<?php

require_once "../class/RhCandidatosDadosFamiliares.class.php";

include 'MontaUrlAmigavel.php';

$RhCandidatosDadosFamiliares = new RhCandidatosDadosFamiliares();
$RhCandidatosDadosFamiliares->setId_rh_candidatos_dados_familiares($_POST['inputIdRhCandidatosDadosFamiliares']);
$RhCandidatosDadosFamiliares->setNome_mae($_POST['inputNomeMae']);
$RhCandidatosDadosFamiliares->setIdade_mae($_POST['inputIdadeMae']);
$RhCandidatosDadosFamiliares->setAtividade_atuais_mae($_POST['inputAtividadesAtuaisMae']);
$RhCandidatosDadosFamiliares->setSaude_mae($_POST['inputSaudeMae']);
$RhCandidatosDadosFamiliares->setNome_pai($_POST['inputNomePai']);
$RhCandidatosDadosFamiliares->setIdade_pai($_POST['inputIdadePai']);
$RhCandidatosDadosFamiliares->setAtividade_atuais_pai($_POST['inputAtividadesAtuaisPai']);
$RhCandidatosDadosFamiliares->setSaude_pai($_POST['inputSaudePai']);
$RhCandidatosDadosFamiliares->setEstado_civil($_POST['inputEstadoCivil']);
$RhCandidatosDadosFamiliares->setQuanto_tempo_relacionamento($_POST['inputQuantoTempoRelacionamento']);
$RhCandidatosDadosFamiliares->setNome_conjuge($_POST['inputNomeConjuge']);
$RhCandidatosDadosFamiliares->setIdade_conjunge($_POST['inputIdadeConjuge']);
$RhCandidatosDadosFamiliares->setAtividades_atuais_conjuge($_POST['inputAtividadesAtuaisConjuge']);
$RhCandidatosDadosFamiliares->setSaude_conjuge($_POST['inputSaudeConjuge']);
$RhCandidatosDadosFamiliares->setQuais_problemas_saude_conjuge($_POST['inputProblemasSaudeConjuge']);
$RhCandidatosDadosFamiliares->setTem_filhos($_POST['inputTemFilhos']);
$RhCandidatosDadosFamiliares->setQuantos_filhos($_POST['inputQuantosFilhos']);
$RhCandidatosDadosFamiliares->setIdades_filhos($_POST['inputIdadesFilhos']);
$RhCandidatosDadosFamiliares->setSaude_filhos($_POST['inputSaudeFilhos']);
$RhCandidatosDadosFamiliares->setQuais_problemas_saude_filhos($_POST['inputProblemasSaudeFilhos']);
$RhCandidatosDadosFamiliares->setQuem_cuida_filhos($_POST['inputQuemCuidaFilhos']);
$RhCandidatosDadosFamiliares->setId_rh_candidatos($_POST['inputIdRhCandidatosAbaDadosFamiliares']);

if ($RhCandidatosDadosFamiliares->salva_dados()):
    print $RhCandidatosDadosFamiliares->getRetorno_dados();
else:
    print 0;
endif;