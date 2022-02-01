$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Candidatos de RH");

    if ($("#inputFormacaoCursosComplementares").length > 0) {
        tinymce.init({
            selector: "textarea#inputFormacaoCursosComplementares",
            language: 'pt_BR',
            language_url: vsUrl + '/js/pt_BR.js',
            theme: "modern",
            height: 300,
            width: '100%',
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

        });
    }

    if ($("#inputRedacao").length > 0) {
        tinymce.init({
            selector: "textarea#inputRedacao",
            language: 'pt_BR',
            language_url: vsUrl + '/js/pt_BR.js',
            theme: "modern",
            height: 300,
            width: '100%',
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

        });
    }

    $("#inputCelularWhats").mask("(99) 99999-9999");
    $("#inputTelefoneRecados").mask("(99) 99999-9999");
    $("#inputCnh").mask("99999999999");
    $("#inputCPF").mask("999.999.999-99");
    $("#inputRG").mask("99.999.999-9");
    $("#inputAltura").mask("9,99");
    $("#inputPeso").mask("999,9", {reverse: true});
    $("#inputUltimoSalarioEmpresa1").mask("999.999.999,99", {reverse: true});
    $("#inputUltimoSalarioEmpresa2").mask("999.999.999,99", {reverse: true});
    $("#inputUltimoSalarioEmpresa3").mask("999.999.999,99", {reverse: true});
    $("#inputUltimoSalarioEmpresa4").mask("999.999.999,99", {reverse: true});
    $("#inputPretencaoSalario").mask("999.999.999,99", {reverse: true});

    /*FORM RH CANDIDATOS*/
    $("#form_rh_candidatos").on('submit', (function (e) {

        Loading();

        $("#inputDoador").val($("#selectDoador").val());

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhCandidatos.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data === "CE") {
                    CloseLoading();
                    AvisoPersonalizado("E-mail ou CPF já cadastrado!");
                } else if (data > 0) {
                    $("#inputIdRhCandidatos").val(data);
                    $("#inputIdRhCandidatosAbaDisponibilidade").val(data);
                    $("#inputIdRhCandidatosAbaCaracteristicasFisicas").val(data);
                    $("#inputIdRhCandidatosAbaDadosFamiliares").val(data);
                    $("#inputIdRhCandidatosAbaFormacaoCursos").val(data);
                    $("#inputIdRhCandidatosAbaSaudeFisicaEmocional").val(data);
                    $("#inputIdRhCandidatosAbaCaracteristicasProfissionais").val(data);
                    $("#inputIdRhCandidatosAbaSituacoesInformacoes").val(data);
                    verifica_edicao();
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*FORM RH CANDIDATOS DISPONIBILIDADE*/
    $("#form_disponibilidade").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhCandidatosDisponibilidade.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdRhCandidatosDisponibilidade").val(data);
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*FORM RH CANDIDATOS CARACTERISTICAS FISICAS*/
    $("#form_caracteristicas_fisicas").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhCandidatosCaracteristicasFisicas.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdRhCandidatosCaracteristicasFisicas").val(data);
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*FORM RH CANDIDATOS DADOS FAMILIARES*/
    $("#form_dados_familiares").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhCandidatosDadosFamiliares.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdRhCandidatosDadosFamiliares").val(data);
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*FORM RH CANDIDATOS FORMAÇÃO/CURSOS*/
    $("#form_formacao_cursos").on('submit', (function (e) {

        Loading();

        $("#inputInformatica").val($("#selectInformatica").val());
        $("#inputIngles").val($("#selectIngles").val());
        $("#inputEspanhol").val($("#selectEspanhol").val());
        $("#inputTemExperiencia").val($("#selectTemExperiencia").val());

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhCandidatosFormacaoCursos.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdRhCandidatosFormacaoCursos").val(data);
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*FORM RH CANDIDATOS SAÚDE FÍSICA E EMOCIONAL*/
    $("#form_saude_fisica_emocional").on('submit', (function (e) {

        Loading();

        $("#inputDoencas").val($("#selectDoencas").val());
        $("#inputLentes").val($("#selectLentes").val());
        $("#inputDanosAcidente").val($("#selectDanosAcidente").val());

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhCandidatosSaudeFisicaEmocional.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdRhCandidatosSaudeFisicaEmocional").val(data);
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*FORM RH CANDIDATOS CARACTERISTICAS PROFISSIONAIS*/
    $("#form_caracteristicas_profissionais").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhCandidatosCaracteristicasProfissionais.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdRhCandidatosCaracteristicasProfissionais").val(data);
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*FORM RH CANDIDATOS SITUAÇÕES, PENDÊNCIAS LEGAIS E INFORMAÇÕES*/
    $("#form_situacoes_informacoes").on('submit', (function (e) {

        Loading();

        $("#inputPreocupacoesMomento").val($("#selectPreocupacoesMomento").val());
        $("#inputComoEstaSentindoMomento").val($("#selectComoEstaSentindoMomento").val());

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhCandidatosSituacoesInformacoes.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdRhCandidatosSituacoesInformacoes").val(data);
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*CHAMA FUNÇÃO PARA VERIFICAR EDIÇÃO OU CADASTRO*/
    verifica_edicao();

});

/*FUNÇÃO QUE VERIFICA SE EXISTE UM ID*/
function verifica_edicao() {

    /*PEGA ID*/
    var id = $("#inputIdRhCandidatos").val();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_rh_candidatos(id);
        edita_disponibilidade(id);
        edita_caracteristicas_fisicas(id);
        edita_dados_familiares(id);
        edita_formacao_cursos(id);
        edita_saude_fisica_emocional(id);
        edita_caracteristicas_profissionais(id);
        edita_situacoes_informacoes(id);
        $("#inputEmail").attr("readonly", "true");
        $("#inputSenha").removeAttr("required");
        $('ul li a[href="#disponibilidade"]').removeClass("disabled");
        $('ul li a[href="#caracteristicas_fisicas"]').removeClass("disabled");
        $('ul li a[href="#dados_familiares"]').removeClass("disabled");
        $('ul li a[href="#formacao_cursos"]').removeClass("disabled");
        $('ul li a[href="#saude_fisica_emocional"]').removeClass("disabled");
        $('ul li a[href="#caracteristicas_profissionais"]').removeClass("disabled");
        $('ul li a[href="#situacoes_informacoes"]').removeClass("disabled");
    } else {
        $("#inputEmail").removeAttr("readonly");
        $("#inputSenha").attr("required", "true");
        $('ul li a[href="#disponibilidade"]').addClass("disabled");
        $('ul li a[href="#caracteristicas_fisicas"]').addClass("disabled");
        $('ul li a[href="#dados_familiares"]').addClass("disabled");
        $('ul li a[href="#formacao_cursos"]').addClass("disabled");
        $('ul li a[href="#saude_fisica_emocional"]').addClass("disabled");
        $('ul li a[href="#caracteristicas_profissionais"]').addClass("disabled");
        $('ul li a[href="#situacoes_informacoes"]').addClass("disabled");
    }
    CloseLoading();
}

/*CARREGA DADOS DO USUÁRIO SELECIONADO*/
function edita_rh_candidatos(viIdRhCandidatos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatosSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhCandidatos: viIdRhCandidatos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputIdRhCandidatosAbaDisponibilidade").val(viIdRhCandidatos);
                $("#inputNomeCompleto").val(data[0].nome_completo);
                $("#inputEmail").val(data[0].email);
                $("#inputCelularWhats").val(data[0].celular_whats);
                $("#inputTelefoneRecados").val(data[0].telefone_recados);
                $("#inputNaturalidade").val(data[0].naturalidade);
                $("#inputNacionalidade").val(data[0].nacionalidade);
                $("#inputDataNascimento").val(data[0].data_nascimento);
                $("#inputIdade").val(data[0].idade);
                $("#inputSexo").val(data[0].sexo);
                $("#inputCnh").val(data[0].cnh);
                $("#inputCnhCategoria").val(data[0].cnh_categoria);
                $("#inputCnhValidade").val(data[0].cnh_validade);
                $("#inputRG").val(data[0].rg);
                $("#inputCPF").val(data[0].cpf);
                $("#inputPis").val(data[0].pis);
                $("#inputEndereco").val(data[0].endereco);
                $("#inputNumero").val(data[0].numero);
                $("#inputBairro").val(data[0].bairro);
                $("#inputCidade").val(data[0].cidade);
                $("#inputQuantoTempoMoraCidade").val(data[0].quanto_tempo_mora_cidade);
                $("#inputMoraComQuem").val(data[0].mora_com_quem);
                $("#inputImovel").val(data[0].imovel);
                $("#inputPossuiVeiculo").val(data[0].possui_veiculo);
                $("#inputDoador").val(data[0].doador);
                $.each(data[0].doador.split(","), function (i, e) {
                    $("#selectDoador option[value='" + e + "']").prop("selected", true);
                });
                $("#inputTipoSanguineo").val(data[0].tipo_sanguineo);
                $("#inputReligiao").val(data[0].religiao);
                $("#inputVagaInteresse").val(data[0].vaga_interesse);
                $("#inputComoSoubeVaga").val(data[0].como_soube_vaga);
                $("#inputParticipouProcessosSeletivosAp").val(data[0].participou_processos_seletivos_ap);
                $("#inputDataProcessosSeletivosAp").val(data[0].data_processos_seletivos_ap);
                $("#inputParaQualVaga").val(data[0].para_qual_vaga);
                $("#inputTestesPsicologicosAp").val(data[0].testes_psicologicos_ap);
                $("#inputParticipouOutrosProcessosSeletivos").val(data[0].participou_outros_processos_seletivos);
                $("#inputParaQuaisEmpresas").val(data[0].para_quais_empresas);
            } else {
                AvisoPersonalizado("Dados não encontrados!");
                $("#inputIdRhCandidatos").val("");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DA DISPONIBILIDADE DO CANDIDATO SELECIONADO*/
function edita_disponibilidade(viIdRhCandidatos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatosDisponibilidadeSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhCandidatos: viIdRhCandidatos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputIdRhCandidatosDisponibilidade").val(data[0].id_rh_candidatos_disponibilidade);
                $("#inputViagens").val(data[0].viagens);
                $("#inputTrabalharSabados").val(data[0].trabalhar_sabados);
                $("#inputHorasExtras").val(data[0].horas_extras);
                $("#inputCursos").val(data[0].cursos);
                $("#inputMudarCidade").val(data[0].mudar_cidade);
            } else {
                $("#inputIdRhCandidatosDisponibilidade").val("");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DA CARACTERISTICAS FISICAS DO CANDIDATO SELECIONADO*/
function edita_caracteristicas_fisicas(viIdRhCandidatos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatosCaracteristicasFisicasSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhCandidatos: viIdRhCandidatos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputIdRhCandidatosCaracteristicasFisicas").val(data[0].id_rh_candidatos_caracteristicas_fisicas);
                $("#inputAltura").val(data[0].altura);
                $("#inputPeso").val(data[0].peso);
                $("#inputPossuiAlgumaLimitacao").val(data[0].possui_alguma_limitacao);
                $("#inputQualLimitacao").val(data[0].qual_limitacao);
                $("#inputPossuiBarba").val(data[0].possui_barba);
                $("#inputDispostoTirarBarba").val(data[0].disposto_tirar_barba);
                $("#inputUnhas").val(data[0].unhas);
                $("#inputCabelo").val(data[0].cabelo);
                $("#inputPrefereManter").val(data[0].prefere_manter);
                $("#inputHabitosCuidadosRestritivos").val(data[0].habito_cuidados_restritivos);
                $("#inputQualHabito").val(data[0].qual_habito);
            } else {
                $("#inputIdRhCandidatosCaracteristicasFisicas").val("");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DA DADOS FAMILIARES DO CANDIDATO SELECIONADO*/
function edita_dados_familiares(viIdRhCandidatos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatosDadosFamiliaresSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhCandidatos: viIdRhCandidatos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputIdRhCandidatosDadosFamiliares").val(data[0].id_rh_candidatos_dados_familiares);
                $("#inputNomeMae").val(data[0].nome_mae);
                $("#inputIdadeMae").val(data[0].idade_mae);
                $("#inputAtividadesAtuaisMae").val(data[0].atividade_atuais_mae);
                $("#inputSaudeMae").val(data[0].saude_mae);
                $("#inputNomePai").val(data[0].nome_pai);
                $("#inputIdadePai").val(data[0].idade_pai);
                $("#inputAtividadesAtuaisPai").val(data[0].atividade_atuais_pai);
                $("#inputSaudePai").val(data[0].saude_pai);
                $("#inputEstadoCivil").val(data[0].estado_civil);
                $("#inputQuantoTempoRelacionamento").val(data[0].quanto_tempo_relacionamento);
                $("#inputNomeConjuge").val(data[0].nome_conjuge);
                $("#inputIdadeConjuge").val(data[0].idade_conjunge);
                $("#inputAtividadesAtuaisConjuge").val(data[0].atividades_atuais_conjuge);
                $("#inputSaudeConjuge").val(data[0].saude_conjuge);
                $("#inputProblemasSaudeConjuge").val(data[0].quais_problemas_saude_conjuge);
                $("#inputTemFilhos").val(data[0].tem_filhos);
                $("#inputQuantosFilhos").val(data[0].quantos_filhos);
                $("#inputIdadesFilhos").val(data[0].idades_filhos);
                $("#inputSaudeFilhos").val(data[0].saude_filhos);
                $("#inputProblemasSaudeFilhos").val(data[0].quais_problemas_saude_filhos);
                $("#inputQuemCuidaFilhos").val(data[0].quem_cuida_filhos);
            } else {
                $("#inputIdRhCandidatosDadosFamiliares").val("");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DE FORMAÇÄO/CURSOS DO CANDIDATO SELECIONADO*/
function edita_formacao_cursos(viIdRhCandidatos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatosFormacaoCursosSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhCandidatos: viIdRhCandidatos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputIdRhCandidatosFormacaoCursos").val(data[0].id_rh_candidatos_formacao_cursos);
                $("#inputEscolaridade").val(data[0].escolaridade);
                $("#inputProfissao").val(data[0].profissao);
                $("#inputFormacaoCursosComplementares").val(data[0].formacao_cursos_complementares);
                $("#inputCursoConhecimento").val(data[0].curso_conhecimento);
                $("#inputInformatica").val(data[0].informatica);
                $.each(data[0].informatica.split(","), function (i, e) {
                    $("#selectInformatica option[value='" + e + "']").prop("selected", true);
                });
                $("#inputExcel").val(data[0].excel);
                $("#inputExperienciaElaboracaoPlanilhas").val(data[0].experiencia_elaboracao_planilhas);
                $("#inputIngles").val(data[0].ingles);
                $.each(data[0].ingles.split(","), function (i, e) {
                    $("#selectIngles option[value='" + e + "']").prop("selected", true);
                });
                $("#inputEspanhol").val(data[0].espanhol);
                $.each(data[0].espanhol.split(","), function (i, e) {
                    $("#selectEspanhol option[value='" + e + "']").prop("selected", true);
                });
                $("#inputOutros").val(data[0].outros);
                $("#inputTemExperiencia").val(data[0].tem_experiencia);
                $.each(data[0].tem_experiencia.split(","), function (i, e) {
                    $("#selectTemExperiencia option[value='" + e + "']").prop("selected", true);
                });
                $("#inputPossuiHabitoLeitura").val(data[0].possui_habito_leitura);
                $("#inputNomeUltimoLivro").val(data[0].nome_ultimo_livro);
                $("#inputDataConclusaoLeitura").val(data[0].data_conclusao_leitura);
            } else {
                $("#inputIdRhCandidatosFormacaoCursos").val("");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DA SAÚDE FÍSICA E EMOCIONAL DO CANDIDATO SELECIONADO*/
function edita_saude_fisica_emocional(viIdRhCandidatos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatosSaudeFisicaEmocionalSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhCandidatos: viIdRhCandidatos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputIdRhCandidatosSaudeFisicaEmocional").val(data[0].id_rh_candidatos_saude_fisica_emocional);
                $("#inputDoencas").val(data[0].doencas);
                $.each(data[0].doencas.split(","), function (i, e) {
                    $("#selectDoencas option[value='" + e + "']").prop("selected", true);
                });
                $("#inputFumante").val(data[0].fumante);
                $("#inputFumanteQuantoTempo").val(data[0].fumante_quanto_tempo);
                $("#inputParouFumar").val(data[0].parou_fumar);
                $("#inputQuantoTempoParou").val(data[0].quanto_tempo_parou);
                $("#inputTomaAlgumMedicamento").val(data[0].toma_algum_medicamento);
                $("#inputQualMedicamento").val(data[0].qual_medicamento);
                $("#inputDormeBemNoite").val(data[0].dorme_bem_noite);
                $("#inputJustifiqueDormeBemNoite").val(data[0].justifique_dorme_bem_noite);
                $("#inputDormiuBemNoitePassada").val(data[0].dormiu_bem_noite_passada);
                $("#inputJustifiqueDormiuBemNoitePassada").val(data[0].justifique_dormiu_bem_noite_passada);
                $("#inputUsaOculos").val(data[0].usa_oculos);
                $("#inputEstaUsandoAgora").val(data[0].esta_usando_agora);
                $("#inputLentes").val(data[0].lentes);
                $.each(data[0].lentes.split(","), function (i, e) {
                    $("#selectLentes option[value='" + e + "']").prop("selected", true);
                });
                $("#inputPraticaExerciciosFisicos").val(data[0].pratica_exercicios_fisicos);
                $("#inputQuaisExercicios").val(data[0].qual_exercicio);
                $("#inputConsomeBebidasAlcoolicas").val(data[0].consome_bebidas_alcoolicas);
                $("#inputUsaUsouDrogaIlicita").val(data[0].usa_usou_droga_ilicita);
                $("#inputQualDrogaIlicita").val(data[0].qual_droga_ilicia);
                $("#inputEnvolveuAcidenteTransito").val(data[0].envolveu_acidente_transito);
                $("#inputDanosAcidente").val(data[0].danos_acidente);
                $.each(data[0].danos_acidente.split(","), function (i, e) {
                    $("#selectDanosAcidente option[value='" + e + "']").prop("selected", true);
                });
                $("#inputQuantoTempoFaz").val(data[0].quanto_tempo_faz);
                $("#inputVoceFoiResponsavelAcidente").val(data[0].voce_foi_responsavel_acidente);
                $("#inputJustifique").val(data[0].justifique);
            } else {
                $("#inputIdRhCandidatosSaudeFisicaEmocional").val("");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DAS CARACTERISTICAS PROFISSIONAIS DO CANDIDATO SELECIONADO*/
function edita_caracteristicas_profissionais(viIdRhCandidatos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatosCaracteristicasProfissionaisSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhCandidatos: viIdRhCandidatos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputIdRhCandidatosSituacoesInformacoes").val(data[0].id_rh_candidatos_caracteristicas_profissionais);
                $("#inputNomeEmpresa1").val(data[0].nome_empresa_1);
                $("#inputTempoEmpresa1").val(data[0].nome_empresa_1);
                $("#inputCargoEmpresa1").val(data[0].cargo_empresa_1);
                $("#inputAtividadesEmpresa1").val(data[0].atividades_empresa_1);
                $("#inputDataInicioEmpresa1").val(data[0].data_inicio_empresa_1);
                $("#inputDataSaidaEmpresa1").val(data[0].data_saida_empresa_1);
                $("#inputMotivoSaidaEmpresa1").val(data[0].motivo_saida_empresa_1);
                $("#inputUltimoSalarioEmpresa1").val(data[0].ultimo_salario_empresa_1);
                $("#inputNomeResponsavelDiretoEmpresa1").val(data[0].nome_responsavel_direto_empresa_1);
                $("#inputNomeEmpresa2").val(data[0].nome_empresa_2);
                $("#inputTempoEmpresa2").val(data[0].nome_empresa_2);
                $("#inputCargoEmpresa2").val(data[0].cargo_empresa_2);
                $("#inputAtividadesEmpresa2").val(data[0].atividades_empresa_2);
                $("#inputDataInicioEmpresa2").val(data[0].data_inicio_empresa_2);
                $("#inputDataSaidaEmpresa2").val(data[0].data_saida_empresa_2);
                $("#inputMotivoSaidaEmpresa2").val(data[0].motivo_saida_empresa_2);
                $("#inputUltimoSalarioEmpresa2").val(data[0].ultimo_salario_empresa_2);
                $("#inputNomeResponsavelDiretoEmpresa2").val(data[0].nome_responsavel_direto_empresa_2);
                $("#inputNomeEmpresa3").val(data[0].nome_empresa_3);
                $("#inputTempoEmpresa3").val(data[0].nome_empresa_3);
                $("#inputCargoEmpresa3").val(data[0].cargo_empresa_3);
                $("#inputAtividadesEmpresa3").val(data[0].atividades_empresa_3);
                $("#inputDataInicioEmpresa3").val(data[0].data_inicio_empresa_3);
                $("#inputDataSaidaEmpresa3").val(data[0].data_saida_empresa_3);
                $("#inputMotivoSaidaEmpresa3").val(data[0].motivo_saida_empresa_3);
                $("#inputUltimoSalarioEmpresa3").val(data[0].ultimo_salario_empresa_3);
                $("#inputNomeResponsavelDiretoEmpresa3").val(data[0].nome_responsavel_direto_empresa_3);
                $("#inputNomeEmpresa4").val(data[0].nome_empresa_4);
                $("#inputTempoEmpresa4").val(data[0].nome_empresa_4);
                $("#inputCargoEmpresa4").val(data[0].cargo_empresa_4);
                $("#inputAtividadesEmpresa4").val(data[0].atividades_empresa_4);
                $("#inputDataInicioEmpresa4").val(data[0].data_inicio_empresa_4);
                $("#inputDataSaidaEmpresa4").val(data[0].data_saida_empresa_4);
                $("#inputMotivoSaidaEmpresa4").val(data[0].motivo_saida_empresa_4);
                $("#inputUltimoSalarioEmpresa4").val(data[0].ultimo_salario_empresa_4);
                $("#inputNomeResponsavelDiretoEmpresa4").val(data[0].nome_responsavel_direto_empresa_4);
                $("#inputExperienciasComplementares").val(data[0].experiencias_complementares);
                $("#inputObjetivosCurtoPrazo").val(data[0].objetivos_curto_prazo);
                $("#inputObjetivosMedioPrazo").val(data[0].objetivos_medio_prazo);
                $("#inputObjetivosLongoPrazo").val(data[0].objetivos_longo_prazo);
            } else {
                $("#inputIdRhCandidatosCaracteristicasProfissionais").val("");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DAS CARACTERISTICAS PROFISSIONAIS DO CANDIDATO SELECIONADO*/
function edita_situacoes_informacoes(viIdRhCandidatos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatosSituacoesInformacoesSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhCandidatos: viIdRhCandidatos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputIdRhCandidatosSituacoesInformacoes").val(data[0].id_rh_candidatos_situacoes_informacoes);
                $("#inputProblemasJustica").val(data[0].problemas_justica);
                $("#inputQuantoTempoFaz").val(data[0].quanto_tempo_faz);
                $("#inputTipoSituacaoOcorreu").val(data[0].tipo_situacao_ocorreu);
                $("#inputPreocupacoesMomento").val(data[0].procupacoes_momento);
                $.each(data[0].procupacoes_momento.split(","), function (i, e) {
                    $("#selectPreocupacoesMomento option[value='" + e + "']").prop("selected", true);
                });
                $("#inputComoEstaSentindoMomento").val(data[0].como_esta_sentindo_momento);
                $.each(data[0].como_esta_sentindo_momento.split(","), function (i, e) {
                    $("#selectComoEstaSentindoMomento option[value='" + e + "']").prop("selected", true);
                });
                $("#inputPrincipalCaracteristica").val(data[0].principal_caracteristica);
                $("#inputPrincipalLimitacao").val(data[0].principal_limitacao);
                $("#inputSituacaoMaisDificilVida").val(data[0].situacao_mais_dificil_vida);
                $("#inputReferenciasProfissionais").val(data[0].referencias_profissionais);
                $("#inputReferenciasPessoais").val(data[0].referencias_pessoais);
                $("#inputEmpresaDeveEscolherVoce").val(data[0].empresa_deve_escolher_voce);
                $("#inputPretencaoSalario").val(data[0].pretencao_salario);
                $("#inputDisponibilidadeHorario").val(data[0].disponibilidade_horario);
                $("#inputInformacoesAdicionais").val(data[0].informacoes_adicionais);
                $("#inputRedacao").val(data[0].redacao);
            } else {
                $("#inputIdRhCandidatosSituacoesInformacoes").val("");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}