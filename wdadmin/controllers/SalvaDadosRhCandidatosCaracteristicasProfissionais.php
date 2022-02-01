<?php

require_once "../class/RhCandidatosCaracteristicasProfissionais.class.php";

include 'MontaUrlAmigavel.php';

$RhCandidatosCaracteristicasProfissionais = new RhCandidatosCaracteristicasProfissionais();
$RhCandidatosCaracteristicasProfissionais->setId_rh_candidatos_caracteristicas_profissionais($_POST['inputIdRhCandidatosCaracteristicasProfissionais']);
$RhCandidatosCaracteristicasProfissionais->setNome_empresa_1($_POST['inputNomeEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setTempo_empresa_1($_POST['inputTempoEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setCargo_empresa_1($_POST['inputCargoEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setAtividades_empresa_1($_POST['inputAtividadesEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setData_inicio_empresa_1($_POST['inputDataInicioEmpresa1'] == "" ? "0000-00-00" : $_POST['inputDataInicioEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setData_saida_empresa_1($_POST['inputDataSaidaEmpresa1'] == "" ? "0000-00-00" : $_POST['inputDataSaidaEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setMotivo_saida_empresa_1($_POST['inputMotivoSaidaEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setUltimo_salario_empresa_1($_POST['inputUltimoSalarioEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setNome_responsavel_direto_empresa_1($_POST['inputNomeResponsavelDiretoEmpresa1']);
$RhCandidatosCaracteristicasProfissionais->setNome_empresa_2($_POST['inputNomeEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setTempo_empresa_2($_POST['inputTempoEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setCargo_empresa_2($_POST['inputCargoEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setAtividades_empresa_2($_POST['inputAtividadesEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setData_inicio_empresa_2($_POST['inputDataInicioEmpresa2'] == "" ? "0000-00-00" : $_POST['inputDataInicioEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setData_saida_empresa_2($_POST['inputDataSaidaEmpresa2'] == "" ? "0000-00-00" : $_POST['inputDataSaidaEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setMotivo_saida_empresa_2($_POST['inputMotivoSaidaEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setUltimo_salario_empresa_2($_POST['inputUltimoSalarioEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setNome_responsavel_direto_empresa_2($_POST['inputNomeResponsavelDiretoEmpresa2']);
$RhCandidatosCaracteristicasProfissionais->setNome_empresa_3($_POST['inputNomeEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setTempo_empresa_3($_POST['inputTempoEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setCargo_empresa_3($_POST['inputCargoEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setAtividades_empresa_3($_POST['inputAtividadesEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setData_inicio_empresa_3($_POST['inputDataInicioEmpresa3'] == "" ? "0000-00-00" : $_POST['inputDataInicioEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setData_saida_empresa_3($_POST['inputDataSaidaEmpresa3'] == "" ? "0000-00-00" : $_POST['inputDataSaidaEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setMotivo_saida_empresa_3($_POST['inputMotivoSaidaEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setUltimo_salario_empresa_3($_POST['inputUltimoSalarioEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setNome_responsavel_direto_empresa_3($_POST['inputNomeResponsavelDiretoEmpresa3']);
$RhCandidatosCaracteristicasProfissionais->setNome_empresa_4($_POST['inputNomeEmpresa4']);
$RhCandidatosCaracteristicasProfissionais->setTempo_empresa_4($_POST['inputTempoEmpresa4']);
$RhCandidatosCaracteristicasProfissionais->setCargo_empresa_4($_POST['inputCargoEmpresa4']);
$RhCandidatosCaracteristicasProfissionais->setAtividades_empresa_4($_POST['inputAtividadesEmpresa4']);
$RhCandidatosCaracteristicasProfissionais->setData_inicio_empresa_4($_POST['inputDataInicioEmpresa4'] == "" ? "0000-00-00" : $_POST['inputDataInicioEmpresa4']);
$RhCandidatosCaracteristicasProfissionais->setData_saida_empresa_4($_POST['inputDataSaidaEmpresa4'] == "" ? "0000-00-00" : $_POST['inputDataSaidaEmpresa4']);
$RhCandidatosCaracteristicasProfissionais->setMotivo_saida_empresa_4($_POST['inputMotivoSaidaEmpresa4']);
$RhCandidatosCaracteristicasProfissionais->setNome_responsavel_direto_empresa_4($_POST['inputNomeResponsavelDiretoEmpresa4']);
$RhCandidatosCaracteristicasProfissionais->setExperiencias_complementares($_POST['inputExperienciasComplementares']);
$RhCandidatosCaracteristicasProfissionais->setObjetivos_curto_prazo($_POST['inputObjetivosCurtoPrazo']);
$RhCandidatosCaracteristicasProfissionais->setObjetivos_medio_prazo($_POST['inputObjetivosMedioPrazo']);
$RhCandidatosCaracteristicasProfissionais->setObjetivos_longo_prazo($_POST['inputObjetivosLongoPrazo']);
$RhCandidatosCaracteristicasProfissionais->setId_rh_candidatos($_POST['inputIdRhCandidatosAbaCaracteristicasProfissionais']);

if ($RhCandidatosCaracteristicasProfissionais->salva_dados()):
    print $RhCandidatosCaracteristicasProfissionais->getRetorno_dados();
else:
    print 0;
endif;