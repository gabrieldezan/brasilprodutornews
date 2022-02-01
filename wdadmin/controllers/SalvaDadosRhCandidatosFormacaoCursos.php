<?php

require_once "../class/RhCandidatosFormacaoCursos.class.php";

include 'MontaUrlAmigavel.php';

$RhCandidatosFormacaoCursos = new RhCandidatosFormacaoCursos();
$RhCandidatosFormacaoCursos->setId_rh_candidatos_formacao_cursos($_POST['inputIdRhCandidatosFormacaoCursos']);
$RhCandidatosFormacaoCursos->setEscolaridade($_POST['inputEscolaridade']);
$RhCandidatosFormacaoCursos->setProfissao($_POST['inputProfissao']);
$RhCandidatosFormacaoCursos->setFormacao_cursos_complementares($_POST['inputFormacaoCursosComplementares']);
$RhCandidatosFormacaoCursos->setCurso_conhecimento($_POST['inputCursoConhecimento']);
$RhCandidatosFormacaoCursos->setInformatica($_POST['inputInformatica']);
$RhCandidatosFormacaoCursos->setExcel($_POST['inputExcel']);
$RhCandidatosFormacaoCursos->setExperiencia_elaboracao_planilhas($_POST['inputExperienciaElaboracaoPlanilhas']);
$RhCandidatosFormacaoCursos->setIngles($_POST['inputIngles']);
$RhCandidatosFormacaoCursos->setEspanhol($_POST['inputEspanhol']);
$RhCandidatosFormacaoCursos->setOutros($_POST['inputOutros']);
$RhCandidatosFormacaoCursos->setTem_experiencia($_POST['inputTemExperiencia']);
$RhCandidatosFormacaoCursos->setPossui_habito_leitura($_POST['inputPossuiHabitoLeitura']);
$RhCandidatosFormacaoCursos->setNome_ultimo_livro($_POST['inputNomeUltimoLivro']);
$RhCandidatosFormacaoCursos->setData_conclusao_leitura($_POST['inputDataConclusaoLeitura'] == "" ? "0000-00-00" : $_POST['inputDataConclusaoLeitura']);
$RhCandidatosFormacaoCursos->setId_rh_candidatos($_POST['inputIdRhCandidatosAbaFormacaoCursos']);

if ($RhCandidatosFormacaoCursos->salva_dados()):
    print $RhCandidatosFormacaoCursos->getRetorno_dados();
else:
    print 0;
endif;