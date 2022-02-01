<?php

date_default_timezone_set('America/Sao_Paulo');

require_once "../class/RhCandidatos.class.php";

include 'MontaUrlAmigavel.php';

$RhCandidatos = new RhCandidatos();
$RhCandidatos->setId_rh_candidatos(isset($_POST['inputIdRhCandidatos']) ? $_POST['inputIdRhCandidatos'] : "");
$RhCandidatos->setNome_completo($_POST['inputNomeCompleto']);
$RhCandidatos->setEmail($_POST['inputEmail']);
$RhCandidatos->setSenha(md5($_POST['inputSenha']));
$RhCandidatos->setData_preenchimento(date("Y-m-d H:i:s"));
$RhCandidatos->setCelular_whats(isset($_POST['inputCelularWhats']) ? $_POST['inputCelularWhats'] : "");
$RhCandidatos->setTelefone_recados(isset($_POST['inputTelefoneRecados']) ? $_POST['inputTelefoneRecados'] : "");
$RhCandidatos->setNaturalidade(isset($_POST['inputNaturalidade']) ? $_POST['inputNaturalidade'] : "");
$RhCandidatos->setNacionalidade(isset($_POST['inputNacionalidade']) ? $_POST['inputNacionalidade'] : "");
$RhCandidatos->setData_nascimento(isset($_POST['inputDataNascimento']) && $_POST['inputDataNascimento'] !== "" ? $_POST['inputDataNascimento'] : "0000-00-00");
$RhCandidatos->setIdade(isset($_POST['inputIdade']) ? $_POST['inputIdade'] : "");
$RhCandidatos->setSexo(isset($_POST['inputSexo']) ? $_POST['inputSexo'] : "1");
$RhCandidatos->setCnh(isset($_POST['inputCnh']) ? $_POST['inputCnh'] : "");
$RhCandidatos->setCnh_categoria(isset($_POST['inputCnhCategoria']) ? $_POST['inputCnhCategoria'] : "");
$RhCandidatos->setCnh_validade(isset($_POST['inputCnhValidade']) && $_POST['inputCnhValidade'] !== "" ? $_POST['inputCnhValidade'] : "0000-00-00");
$RhCandidatos->setRg(isset($_POST['inputRG']) ? $_POST['inputRG'] : "");
$RhCandidatos->setCpf($_POST['inputCPF']);
$RhCandidatos->setPis(isset($_POST['inputPis']) ? $_POST['inputPis'] : "");
$RhCandidatos->setEndereco(isset($_POST['inputEndereco']) ? $_POST['inputEndereco'] : "");
$RhCandidatos->setNumero(isset($_POST['inputNumero']) ? $_POST['inputNumero'] : "");
$RhCandidatos->setBairro(isset($_POST['inputBairro']) ? $_POST['inputBairro'] : "");
$RhCandidatos->setCidade(isset($_POST['inputCidade']) ? $_POST['inputCidade'] : "");
$RhCandidatos->setQuanto_tempo_mora_cidade(isset($_POST['inputQuantoTempoMoraCidade']) ? $_POST['inputQuantoTempoMoraCidade'] : "");
$RhCandidatos->setMora_com_quem(isset($_POST['inputMoraComQuem']) ? $_POST['inputMoraComQuem'] : "");
$RhCandidatos->setImovel(isset($_POST['inputImovel']) ? $_POST['inputImovel'] : "1");
$RhCandidatos->setPossui_veiculo(isset($_POST['inputPossuiVeiculo']) ? $_POST['inputPossuiVeiculo'] : "1");
$RhCandidatos->setDoador(isset($_POST['inputDoador']) ? $_POST['inputDoador'] : "");
$RhCandidatos->setTipo_sanguineo(isset($_POST['inputTipoSanguineo']) ? $_POST['inputTipoSanguineo'] : "");
$RhCandidatos->setReligiao(isset($_POST['inputReligiao']) ? $_POST['inputReligiao'] : "");
$RhCandidatos->setVaga_interesse(isset($_POST['inputVagaInteresse']) ? $_POST['inputVagaInteresse'] : "");
$RhCandidatos->setComo_soube_vaga(isset($_POST['inputComoSoubeVaga']) ? $_POST['inputComoSoubeVaga'] : "");
$RhCandidatos->setParticipou_processos_seletivos_ap(isset($_POST['inputParticipouProcessosSeletivosAp']) ? $_POST['inputParticipouProcessosSeletivosAp'] : "1");
$RhCandidatos->setData_processos_seletivos_ap(isset($_POST['inputDataProcessosSeletivosAp']) && $_POST['inputDataProcessosSeletivosAp'] !== "" ? $_POST['inputDataProcessosSeletivosAp'] : "0000-00-00");
$RhCandidatos->setPara_qual_vaga(isset($_POST['inputParaQualVaga']) ? $_POST['inputParaQualVaga'] : "");
$RhCandidatos->setTestes_psicologicos_ap(isset($_POST['inputTestesPsicologicosAp']) ? $_POST['inputTestesPsicologicosAp'] : "1");
$RhCandidatos->setParticipou_outros_processos_seletivos(isset($_POST['inputParticipouOutrosProcessosSeletivos']) ? $_POST['inputParticipouOutrosProcessosSeletivos'] : "1");
$RhCandidatos->setPara_quais_empresas(isset($_POST['inputParaQuaisEmpresas']) ? $_POST['inputParaQuaisEmpresas'] : "");

/* VERIFICA SE É INSERT OU UPDATE */
if ($RhCandidatos->getId_rh_candidatos() === "") {
    /* VERIFICA SE JÁ EXISTE UM CADASTRO COM BASE NO EMAIL E CPF */
    if ($RhCandidatos->verifica_cadastro_existente() == false) {
        /* INSERE DADOS */
        if ($RhCandidatos->insere_dados()) {
            print $RhCandidatos->getRetorno_dados();
        } else {
            print 0;
        }
    } else {
        print "CE";
    }
} else {
    /* ATUALIZA DADOS */
    if ($RhCandidatos->atualiza_dados()) {
        /* ATUALIZA SENHA CASO O USUÁRIO INFORME UMA NOVA SENHA */
        if (!empty($_POST['inputSenha'])) {
            $RhCandidatos->setId_rh_candidatos($RhCandidatos->getRetorno_dados());
            $RhCandidatos->atualiza_senha();
        }
        print $RhCandidatos->getRetorno_dados();
    } else {
        print 0;
    }
}