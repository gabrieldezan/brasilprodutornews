<?php

date_default_timezone_set('America/Sao_Paulo');

require_once "../class/RhVagas.class.php";

include 'MontaUrlAmigavel.php';

$RhVagas = new RhVagas();
$RhVagas->setId_rh_vagas($_POST["inputIdRhVagas"]);
$RhVagas->setData_registro(date("Y-m-d H:i:s", time()));
$RhVagas->setEscolaridade($_POST["inputEscolaridade"]);
$RhVagas->setTempo_experiencia($_POST["inputTempoExperiencia"]);
$RhVagas->setIdiomas($_POST["inputIdiomas"]);
$RhVagas->setInformatica($_POST["inputInformatica"]);
$RhVagas->setHabilitacao($_POST["inputHabilitacao"]);
$RhVagas->setDisponibilidade_viagens($_POST["inputDisponibilidadeViagens"]);
$RhVagas->setDepartamento($_POST["inputDepartamento"]);
$RhVagas->setCargo($_POST["inputCargo"]);
$RhVagas->setSuperior_imediato($_POST["inputSuperiorImediato"]);
$RhVagas->setCargo_superior($_POST["inputCargoSuperior"]);
$RhVagas->setPeriodo($_POST["inputPeriodo"]);
$RhVagas->setDias_semana($_POST["inputDiasSemana"]);
$RhVagas->setHorario_trabalho($_POST["inputHorarioTrabalho"]);
$RhVagas->setSexo($_POST["inputSexo"]);
$RhVagas->setRemuneracao($_POST["inputRemuneracao"]);
$RhVagas->setBonus($_POST["inputBonus"]);
$RhVagas->setTransporte($_POST["inputTransporte"]);
$RhVagas->setAlimentacao_local($_POST["inputAlimentacaoLocal"]);
$RhVagas->setVale_refeicao($_POST["inputValeRefeicao"]);
$RhVagas->setAssistencia_medica($_POST["inputAssistenciaMedica"]);
$RhVagas->setAssistencia_odontologica($_POST["inputAssistenciaOdontologica"]);
$RhVagas->setOutros_beneficios($_POST["inputOutrosBeneficios"]);
$RhVagas->setConhecimentos($_POST["inputConhecimentos"]);
$RhVagas->setHabilidades($_POST["inputHabilidades"]);
$RhVagas->setAtitudes_esperadas($_POST["inputAtitudesEsperadas"]);
$RhVagas->setPrincipais_ativdades($_POST["inputPrincipaisAtividades"]);
$RhVagas->setObservacoes($_POST["inputObservacoes"]);
$RhVagas->setData_recebimento($_POST["inputDataRecebimento"]);
$RhVagas->setData_entrevista($_POST["inputDataEntrevista"]);
$RhVagas->setData_iniciar($_POST["inputDataIniciar"]);
$RhVagas->setStatus($_POST["inputStatus"]);
$RhVagas->setUrl_amigavel(url_amigavel($_POST["inputIdRhVagas"])."-".url_amigavel($_POST["inputDepartamento"])."-".url_amigavel($_POST["inputCargo"]));
$RhVagas->setId_clientes($_POST['inputIdClientes']);

if ($RhVagas->salva_dados()) {
    print $RhVagas->getRetorno_dados();
} else {
    print 0;
}