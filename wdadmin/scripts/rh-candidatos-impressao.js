$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Impressão Ficha de Candidatos de RH");

    $("#botao_imprimir").click(function () {
        window.print();
    });

    String.prototype.replaceArray = function (find, replace) {
        var replaceString = this;
        for (var i = 0; i < find.length; i++) {
            replaceString = replaceString.replace(find[i], replace[i]);
        }
        return replaceString;
    };

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
        edita_informacoes_gerais();
        edita_enderecos(1);
    } else {
        AvisoPersonalizado("Nenhuma informação encontrada!");
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

                //SUBSTITUI STRINGS
                var sexo = data[0].sexo;
                var find = ["1", "2"];
                var replace = ["Masculino", "Feminino"];
                sexo = sexo.replaceArray(find, replace);

                var imovel = data[0].imovel;
                var find = ["1", "2", "3", "4"];
                var replace = ["Próprio", "Alugado", "Emprestado", "Financiado"];
                imovel = imovel.replaceArray(find, replace);

                var possui_veiculo = data[0].possui_veiculo;
                var find = ["1", "2", "3"];
                var replace = ["Não", "Quitado", "Financiado"];
                possui_veiculo = possui_veiculo.replaceArray(find, replace);

                var doador = data[0].doador;
                var find = ["1", "2"];
                var replace = ["Sangue", "Órgãos"];
                doador = doador.replaceArray(find, replace);

                var participou_processos_seletivos_ap = data[0].participou_processos_seletivos_ap;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                participou_processos_seletivos_ap = participou_processos_seletivos_ap.replaceArray(find, replace);

                var testes_psicologicos_ap = data[0].testes_psicologicos_ap;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                testes_psicologicos_ap = testes_psicologicos_ap.replaceArray(find, replace);

                var participou_outros_processos_seletivos = data[0].participou_outros_processos_seletivos;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                participou_outros_processos_seletivos = participou_outros_processos_seletivos.replaceArray(find, replace);

                //ATRIBUI VALORES DADOS PESSOAIS
                $("#inputNomeCompleto").html(data[0].nome_completo);
                $("#inputEmail").html(data[0].email);
                $("#inputCelularWhats").html(data[0].celular_whats);
                $("#inputTelefoneRecados").html(data[0].telefone_recados);
                $("#inputNaturalidade").html(data[0].naturalidade);
                $("#inputNacionalidade").html(data[0].nacionalidade);
                $("#inputDataNascimento").html(data[0].data_nascimento_br);
                $("#inputIdade").html(data[0].idade);
                $("#inputSexo").html(sexo);
                $("#inputCnh").html(data[0].cnh);
                $("#inputCnhCategoria").html(data[0].cnh_categoria);
                $("#inputCnhValidade").html(data[0].cnh_validade_br);
                $("#inputRG").html(data[0].rg);
                $("#inputCPF").html(data[0].cpf);
                $("#inputPis").html(data[0].pis);
                $("#inputEndereco").html(data[0].endereco);
                $("#inputNumero").html(data[0].numero);
                $("#inputBairro").html(data[0].bairro);
                $("#inputCidade").html(data[0].cidade);
                $("#inputQuantoTempoMoraCidade").html(data[0].quanto_tempo_mora_cidade);
                $("#inputMoraComQuem").html(data[0].mora_com_quem);
                $("#inputImovel").html(imovel);
                $("#inputPossuiVeiculo").html(possui_veiculo);
                $("#inputDoador").html(doador);
                $("#inputTipoSanguineo").html(data[0].tipo_sanguineo);
                $("#inputReligiao").html(data[0].religiao);
                $("#inputVagaInteresse").html(data[0].vaga_interesse);
                $("#inputComoSoubeVaga").html(data[0].como_soube_vaga);
                $("#inputParticipouProcessosSeletivosAp").html(participou_processos_seletivos_ap);
                $("#inputDataProcessosSeletivosAp").html(data[0].data_processos_seletivos_ap_br);
                $("#inputParaQualVaga").html(data[0].para_qual_vaga);
                $("#inputTestesPsicologicosAp").html(testes_psicologicos_ap);
                $("#inputParticipouOutrosProcessosSeletivos").html(participou_outros_processos_seletivos);
                $("#inputParaQuaisEmpresas").html(data[0].para_quais_empresas);
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

                //SUBSTITUI STRINGS
                var viagens = data[0].viagens;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                viagens = viagens.replaceArray(find, replace);

                var trabalhar_sabados = data[0].trabalhar_sabados;
                var find = ["1", "2", "3"];
                var replace = ["Não", "Esporadicamente", "Sempre"];
                trabalhar_sabados = trabalhar_sabados.replaceArray(find, replace);

                var horas_extras = data[0].horas_extras;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                horas_extras = horas_extras.replaceArray(find, replace);

                var cursos = data[0].cursos;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                cursos = cursos.replaceArray(find, replace);

                var mudar_cidade = data[0].mudar_cidade;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                mudar_cidade = mudar_cidade.replaceArray(find, replace);

                $("#inputViagens").html(viagens);
                $("#inputTrabalharSabados").html(trabalhar_sabados);
                $("#inputHorasExtras").html(horas_extras);
                $("#inputCursos").html(cursos);
                $("#inputMudarCidade").html(mudar_cidade);
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

                //SUBSTITUI STRINGS
                var possui_alguma_limitacao = data[0].possui_alguma_limitacao;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                possui_alguma_limitacao = possui_alguma_limitacao.replaceArray(find, replace);

                var possui_barba = data[0].possui_barba;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                possui_barba = possui_barba.replaceArray(find, replace);

                var possui_barba = data[0].possui_barba;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                possui_barba = possui_barba.replaceArray(find, replace);

                var unhas = data[0].unhas;
                var find = ["1", "2", "3", "4"];
                var replace = ["Longas", "Curtas", "Esmaltadas", "Sem Esmaltação"];
                unhas = unhas.replaceArray(find, replace);

                var cabelo = data[0].cabelo;
                var find = ["1", "2"];
                var replace = ["Longo", "Curto"];
                cabelo = cabelo.replaceArray(find, replace);

                var prefere_manter = data[0].prefere_manter;
                var find = ["1", "2"];
                var replace = ["Preso", "Solto"];
                prefere_manter = prefere_manter.replaceArray(find, replace);

                var habito_cuidados_restritivos = data[0].habito_cuidados_restritivos;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                habito_cuidados_restritivos = habito_cuidados_restritivos.replaceArray(find, replace);

                $("#inputAltura").html(data[0].altura);
                $("#inputPeso").html(data[0].peso);
                $("#inputPossuiAlgumaLimitacao").html(possui_alguma_limitacao);
                $("#inputQualLimitacao").html(data[0].qual_limitacao);
                $("#inputPossuiBarba").html(possui_barba);
                $("#inputDispostoTirarBarba").html(data[0].disposto_tirar_barba);
                $("#inputUnhas").html(unhas);
                $("#inputCabelo").html(cabelo);
                $("#inputPrefereManter").html(prefere_manter);
                $("#inputHabitosCuidadosRestritivos").html(habito_cuidados_restritivos);
                $("#inputQualHabito").html(data[0].qual_habito);
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

                //SUBSTITUI STRINGS
                var saude_mae = data[0].saude_mae;
                var find = ["1", "2", "3", "4"];
                var replace = ["Está bem de saúde", "Problemas de Saúde", "Já Falecida", "Não Conhece"];
                saude_mae = saude_mae.replaceArray(find, replace);

                var saude_pai = data[0].saude_pai;
                var find = ["1", "2", "3", "4"];
                var replace = ["Está bem de saúde", "Problemas de Saúde", "Já Falecido", "Não Conhece"];
                saude_pai = saude_pai.replaceArray(find, replace);

                var estado_civil = data[0].estado_civil;
                var find = ["1", "2", "3", "4", "5", "6", "7"];
                var replace = ["Casado(a)", "Solteiro(a)", "Amasiado(a)", "Divorciado(a)", "Viúvo(a)", "Noivo(a)", "Namorando"];
                estado_civil = estado_civil.replaceArray(find, replace);

                var saude_conjuge = data[0].saude_conjuge;
                var find = ["1", "2"];
                var replace = ["Está bem de saúde", "Problemas de Saúde"];
                saude_conjuge = saude_conjuge.replaceArray(find, replace);

                var tem_filhos = data[0].tem_filhos;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                tem_filhos = tem_filhos.replaceArray(find, replace);

                var saude_filhos = data[0].saude_filhos;
                var find = ["1", "2"];
                var replace = ["Estão bem de saúde", "Problemas de Saúde"];
                saude_filhos = saude_filhos.replaceArray(find, replace);

                $("#inputNomeMae").html(data[0].nome_mae);
                $("#inputIdadeMae").html(data[0].idade_mae);
                $("#inputAtividadesAtuaisMae").html(data[0].atividade_atuais_mae);
                $("#inputSaudeMae").html(saude_mae);
                $("#inputNomePai").html(data[0].nome_pai);
                $("#inputIdadePai").html(data[0].idade_pai);
                $("#inputAtividadesAtuaisPai").html(data[0].atividade_atuais_pai);
                $("#inputSaudePai").html(saude_pai);
                $("#inputEstadoCivil").html(estado_civil);
                $("#inputQuantoTempoRelacionamento").html(data[0].quanto_tempo_relacionamento);
                $("#inputNomeConjuge").html(data[0].nome_conjuge);
                $("#inputIdadeConjuge").html(data[0].idade_conjunge);
                $("#inputAtividadesAtuaisConjuge").html(data[0].atividades_atuais_conjuge);
                $("#inputSaudeConjuge").html(saude_conjuge);
                $("#inputProblemasSaudeConjuge").html(data[0].quais_problemas_saude_conjuge);
                $("#inputTemFilhos").html(tem_filhos);
                $("#inputQuantosFilhos").html(data[0].quantos_filhos);
                $("#inputIdadesFilhos").html(data[0].idades_filhos);
                $("#inputSaudeFilhos").html(saude_filhos);
                $("#inputProblemasSaudeFilhos").html(data[0].quais_problemas_saude_filhos);
                $("#inputQuemCuidaFilhos").html(data[0].quem_cuida_filhos);
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

                //SUBSTITUI STRINGS
                var informatica = data[0].informatica;
                var find = ["1", "2", "3", "4"];
                var replace = ["Word", " Excel", " PowerPoint", " Software"];
                informatica = informatica.replaceArray(find, replace);

                var excel = data[0].excel;
                var find = ["1", "2"];
                var replace = ["Básico", "Avançado"];
                excel = excel.replaceArray(find, replace);

                var experiencia_elaboracao_planilhas = data[0].experiencia_elaboracao_planilhas;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                experiencia_elaboracao_planilhas = experiencia_elaboracao_planilhas.replaceArray(find, replace);

                var ingles = data[0].ingles;
                var find = ["1", "2"];
                var replace = ["Curso", "Fluência"];
                ingles = ingles.replaceArray(find, replace);

                var espanhol = data[0].espanhol;
                var find = ["1", "2"];
                var replace = ["Curso", "Fluência"];
                espanhol = espanhol.replaceArray(find, replace);

                var tem_experiencia = data[0].tem_experiencia;
                var find = ["1", "2", "3"];
                var replace = ["Operacional", " Administrativo", " Gerencial"];
                tem_experiencia = tem_experiencia.replaceArray(find, replace);

                var possui_habito_leitura = data[0].possui_habito_leitura;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                possui_habito_leitura = possui_habito_leitura.replaceArray(find, replace);

                $("#inputEscolaridade").html(data[0].escolaridade);
                $("#inputProfissao").html(data[0].profissao);
                $("#inputFormacaoCursosComplementares").html(data[0].formacao_cursos_complementares);
                $("#inputCursoConhecimento").html(data[0].curso_conhecimento);
                $("#inputInformatica").html(informatica);
                $("#inputExcel").html(excel);
                $("#inputExperienciaElaboracaoPlanilhas").html(experiencia_elaboracao_planilhas);
                $("#inputIngles").html(ingles);
                $("#inputEspanhol").html(espanhol);
                $("#inputOutros").html(data[0].outros);
                $("#inputTemExperiencia").html(tem_experiencia);
                $("#inputPossuiHabitoLeitura").html(possui_habito_leitura);
                $("#inputNomeUltimoLivro").html(data[0].nome_ultimo_livro);
                $("#inputDataConclusaoLeitura").html(data[0].data_conclusao_leitura_br);
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

                //SUBSTITUI STRINGS
                var doencas = data[0].doencas;
                var find = ["42", "41", "40", "39", "38", "37", "36", "35", "34", "33", "32", "31", "30", "29", "28", "27", "26", "25", "24", "23", "22", "21", "20", "19", "18", "17", "16", "15", "14", "13", "12", "11", "10", "9", "8", "7", "6", "5", "4", "3", "2", "1"];
                var replace = [" Compulsão alimentar", " Déficit de atenção", " Hiperatividade", " Esquizofrenia", " Anorexia", " Bulimia", " TOC", " Estresse crônico", " Ansiedade", " Síndrome do pânico", " Bipolaridade", " Depressão", " Deficiência física", " Problemas no fígado", " Problemas respiratórios", " Hepatites", " Problema renais", " Outras infecções", " Infecções Urinarias", " HIV", " Sífilis", " DST", " Obesidade", " Úlcera", " Gastrite", " Dependência química", " Tontura ", " Apneia do sono", " Insônia", " Problemas auditivos", " Desmaios", " Convulsão", " Problemas neurológicos", " Problemas cardíacos", " Problemas na coluna", " Dores musculares", " Problemas na visão", " Dores de Cabeça", " Tireoide", " Pressão Alta", " Colesterol", " Diabetes"];
                doencas = doencas.replaceArray(find, replace);

                var fumante = data[0].fumante;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                fumante = fumante.replaceArray(find, replace);

                var parou_fumar = data[0].parou_fumar;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                parou_fumar = parou_fumar.replaceArray(find, replace);

                var toma_algum_medicamento = data[0].toma_algum_medicamento;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                toma_algum_medicamento = toma_algum_medicamento.replaceArray(find, replace);

                var dorme_bem_noite = data[0].dorme_bem_noite;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                dorme_bem_noite = dorme_bem_noite.replaceArray(find, replace);

                var dormiu_bem_noite_passada = data[0].dormiu_bem_noite_passada;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                dormiu_bem_noite_passada = dormiu_bem_noite_passada.replaceArray(find, replace);

                var usa_oculos = data[0].usa_oculos;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                usa_oculos = usa_oculos.replaceArray(find, replace);

                var esta_usando_agora = data[0].esta_usando_agora;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                esta_usando_agora = esta_usando_agora.replaceArray(find, replace);

                var lentes = data[0].lentes;
                var find = ["1", "2"];
                var replace = ["Perto", "Longe"];
                lentes = lentes.replaceArray(find, replace);

                var pratica_exercicios_fisicos = data[0].pratica_exercicios_fisicos;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                pratica_exercicios_fisicos = pratica_exercicios_fisicos.replaceArray(find, replace);

                var consome_bebidas_alcoolicas = data[0].consome_bebidas_alcoolicas;
                var find = ["1", "2", "3", "4"];
                var replace = ["Não", "Raramente", "Socialmente", "Com Frequência"];
                consome_bebidas_alcoolicas = consome_bebidas_alcoolicas.replaceArray(find, replace);

                var usa_usou_droga_ilicita = data[0].usa_usou_droga_ilicita;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                usa_usou_droga_ilicita = usa_usou_droga_ilicita.replaceArray(find, replace);

                var envolveu_acidente_transito = data[0].envolveu_acidente_transito;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                envolveu_acidente_transito = envolveu_acidente_transito.replaceArray(find, replace);

                var danos_acidente = data[0].danos_acidente;
                var find = ["1", "2", "3"];
                var replace = ["Danos Materiais", " Feridos", " Vítimas Fatais"];
                danos_acidente = danos_acidente.replaceArray(find, replace);

                var voce_foi_responsavel_acidente = data[0].voce_foi_responsavel_acidente;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                voce_foi_responsavel_acidente = voce_foi_responsavel_acidente.replaceArray(find, replace);

                $("#inputDoencas").html(doencas);
                $("#inputFumante").html(fumante);
                $("#inputFumanteQuantoTempo").html(data[0].fumante_quanto_tempo);
                $("#inputParouFumar").html(parou_fumar);
                $("#inputQuantoTempoParou").html(data[0].quanto_tempo_parou);
                $("#inputTomaAlgumMedicamento").html(toma_algum_medicamento);
                $("#inputQualMedicamento").html(data[0].qual_medicamento);
                $("#inputDormeBemNoite").html(dorme_bem_noite);
                $("#inputJustifiqueDormeBemNoite").html(data[0].justifique_dorme_bem_noite);
                $("#inputDormiuBemNoitePassada").html(dormiu_bem_noite_passada);
                $("#inputJustifiqueDormiuBemNoitePassada").html(data[0].justifique_dormiu_bem_noite_passada);
                $("#inputUsaOculos").html(usa_oculos);
                $("#inputEstaUsandoAgora").html(esta_usando_agora);
                $("#inputLentes").html(lentes);
                $("#inputPraticaExerciciosFisicos").html(pratica_exercicios_fisicos);
                $("#inputQuaisExercicios").html(data[0].qual_exercicio);
                $("#inputConsomeBebidasAlcoolicas").html(consome_bebidas_alcoolicas);
                $("#inputUsaUsouDrogaIlicita").html(usa_usou_droga_ilicita);
                $("#inputQualDrogaIlicita").html(data[0].qual_droga_ilicia);
                $("#inputEnvolveuAcidenteTransito").html(envolveu_acidente_transito);
                $("#inputDanosAcidente").html(danos_acidente);
                $("#inputQuantoTempoFaz").html(data[0].quanto_tempo_faz);
                $("#inputVoceFoiResponsavelAcidente").html(voce_foi_responsavel_acidente);
                $("#inputJustifique").html(data[0].justifique);
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

                //SUBSTITUI STRINGS
                var periodo_empresa_1;
                if (data[0].data_inicio_empresa_1_br === "00/00/0000" && data[0].data_saida_empresa_1_br === "00/00/0000") {
                    periodo_empresa_1 = "";
                } else if (data[0].data_saida_empresa_1_br === "00/00/0000") {
                    periodo_empresa_1 = data[0].data_inicio_empresa_1_br;
                } else {
                    periodo_empresa_1 = data[0].data_inicio_empresa_1_br + " até " + data[0].data_saida_empresa_1_br;
                }

                var periodo_empresa_2;
                if (data[0].data_inicio_empresa_2_br === "00/00/0000" && data[0].data_saida_empresa_2_br === "00/00/0000") {
                    periodo_empresa_2 = "";
                } else if (data[0].data_saida_empresa_2_br === "00/00/0000") {
                    periodo_empresa_2 = data[0].data_inicio_empresa_2_br;
                } else {
                    periodo_empresa_2 = data[0].data_inicio_empresa_2_br + " até " + data[0].data_saida_empresa_2_br;
                }

                var periodo_empresa_3;
                if (data[0].data_inicio_empresa_3_br === "00/00/0000" && data[0].data_saida_empresa_3_br === "00/00/0000") {
                    periodo_empresa_3 = "";
                } else if (data[0].data_saida_empresa_3_br === "00/00/0000") {
                    periodo_empresa_3 = data[0].data_inicio_empresa_3_br;
                } else {
                    periodo_empresa_3 = data[0].data_inicio_empresa_3_br + " até " + data[0].data_saida_empresa_3_br;
                }

                var periodo_empresa_4;
                if (data[0].data_inicio_empresa_4_br === "00/00/0000" && data[0].data_saida_empresa_4_br === "00/00/0000") {
                    periodo_empresa_4 = "";
                } else if (data[0].data_saida_empresa_4_br === "00/00/0000") {
                    periodo_empresa_4 = data[0].data_inicio_empresa_4_br;
                } else {
                    periodo_empresa_4 = data[0].data_inicio_empresa_4_br + " até " + data[0].data_saida_empresa_4_br;
                }

                $("#inputNomeEmpresa1").html(data[0].nome_empresa_1);
                $("#inputTempoEmpresa1").html(data[0].nome_empresa_1);
                $("#inputCargoEmpresa1").html(data[0].cargo_empresa_1);
                $("#inputAtividadesEmpresa1").html(data[0].atividades_empresa_1);
                $("#inputPeriodoEmpresa1").html(periodo_empresa_1);
                $("#inputMotivoSaidaEmpresa1").html(data[0].motivo_saida_empresa_1);
                $("#inputUltimoSalarioEmpresa1").html(data[0].ultimo_salario_empresa_1);
                $("#inputNomeResponsavelDiretoEmpresa1").html(data[0].nome_responsavel_direto_empresa_1);
                $("#inputNomeEmpresa2").html(data[0].nome_empresa_2);
                $("#inputTempoEmpresa2").html(data[0].nome_empresa_2);
                $("#inputCargoEmpresa2").html(data[0].cargo_empresa_2);
                $("#inputAtividadesEmpresa2").html(data[0].atividades_empresa_2);
                $("#inputPeriodoEmpresa2").html(periodo_empresa_2);
                $("#inputMotivoSaidaEmpresa2").html(data[0].motivo_saida_empresa_2);
                $("#inputUltimoSalarioEmpresa2").html(data[0].ultimo_salario_empresa_2);
                $("#inputNomeResponsavelDiretoEmpresa2").html(data[0].nome_responsavel_direto_empresa_2);
                $("#inputNomeEmpresa3").html(data[0].nome_empresa_3);
                $("#inputTempoEmpresa3").html(data[0].nome_empresa_3);
                $("#inputCargoEmpresa3").html(data[0].cargo_empresa_3);
                $("#inputAtividadesEmpresa3").html(data[0].atividades_empresa_3);
                $("#inputPeriodoEmpresa3").html(periodo_empresa_3);
                $("#inputMotivoSaidaEmpresa3").html(data[0].motivo_saida_empresa_3);
                $("#inputUltimoSalarioEmpresa3").html(data[0].ultimo_salario_empresa_3);
                $("#inputNomeResponsavelDiretoEmpresa3").html(data[0].nome_responsavel_direto_empresa_3);
                $("#inputNomeEmpresa4").html(data[0].nome_empresa_4);
                $("#inputTempoEmpresa4").html(data[0].nome_empresa_4);
                $("#inputCargoEmpresa4").html(data[0].cargo_empresa_4);
                $("#inputAtividadesEmpresa4").html(data[0].atividades_empresa_4);
                $("#inputPeriodoEmpresa4").html(periodo_empresa_4);
                $("#inputMotivoSaidaEmpresa4").html(data[0].motivo_saida_empresa_4);
                $("#inputUltimoSalarioEmpresa4").html(data[0].ultimo_salario_empresa_4);
                $("#inputNomeResponsavelDiretoEmpresa4").html(data[0].nome_responsavel_direto_empresa_4);
                $("#inputExperienciasComplementares").html(data[0].experiencias_complementares);
                $("#inputObjetivosCurtoPrazo").html(data[0].objetivos_curto_prazo);
                $("#inputObjetivosMedioPrazo").html(data[0].objetivos_medio_prazo);
                $("#inputObjetivosLongoPrazo").html(data[0].objetivos_longo_prazo);
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

                //SUBSTITUI STRINGS
                var problemas_justica = data[0].problemas_justica;
                var find = ["1", "2"];
                var replace = ["Sim", "Não"];
                problemas_justica = problemas_justica.replaceArray(find, replace);

                var procupacoes_momento = data[0].procupacoes_momento;
                var find = ["1", "2", "3", "4"];
                var replace = ["Problemas Familiares", " Problemas Financeiros", " Problemas de Saúde", " Problemas Profissionais"];
                procupacoes_momento = procupacoes_momento.replaceArray(find, replace);

                var como_esta_sentindo_momento = data[0].como_esta_sentindo_momento;
                var find = ["16", "15", "14", "13", "12", "11", "10", "9", "8", "7", "6", "5", "4", "3", "2", "1"];
                var replace = [" Com Fome", " Preocupado", " Indeciso", " Com Dor", " Baixa Energia", " Ansioso", " Com Raiva", " Nervoso", " Desmotivado ", " Triste", " Com sono", " Cansado", " Motivado", " Alegre", " Tranquilo", " Bem"];
                como_esta_sentindo_momento = como_esta_sentindo_momento.replaceArray(find, replace);

                $("#inputProblemasJustica").html(problemas_justica);
                $("#inputQuantoTempoFaz").html(data[0].quanto_tempo_faz);
                $("#inputTipoSituacaoOcorreu").html(data[0].tipo_situacao_ocorreu);
                $("#inputPreocupacoesMomento").html(procupacoes_momento);
                $("#inputComoEstaSentindoMomento").html(como_esta_sentindo_momento);
                $("#inputPrincipalCaracteristica").html(data[0].principal_caracteristica);
                $("#inputPrincipalLimitacao").html(data[0].principal_limitacao);
                $("#inputSituacaoMaisDificilVida").html(data[0].situacao_mais_dificil_vida);
                $("#inputReferenciasProfissionais").html(data[0].referencias_profissionais);
                $("#inputReferenciasPessoais").html(data[0].referencias_pessoais);
                $("#inputEmpresaDeveEscolherVoce").html(data[0].empresa_deve_escolher_voce);
                $("#inputPretencaoSalario").html(data[0].pretencao_salario);
                $("#inputDisponibilidadeHorario").html(data[0].disponibilidade_horario);
                $("#inputInformacoesAdicionais").html(data[0].informacoes_adicionais);
                $("#inputRedacao").html(data[0].redacao);
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS INFORMAÇÕES GERAIS*/
function edita_informacoes_gerais() {

    $.ajax({
        url: vsUrl + "controllers/RetornaInformacoesGerais.php",
        type: "POST",
        dataType: "json",
        async: false,
        success: function (data) {
            if (data !== 0) {
                $("#imgLogoPrincipalAtual").attr("src", vsUrl + "uploads/informacoes_gerais/" + data[0].logo_principal);
                $("#inputInfoGeraisWhatsapp").html(data[0].whatsapp);
                $("#inputInfoGeraisEmail").html(data[0].email);
                $("#inputInfoGeraisTelefone").html(data[0].telefone);
            }
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DO ENDEREÇO SELECIONADO*/
function edita_enderecos(viIdEnderecos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaEnderecoSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdEnderecos: viIdEnderecos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputEnderecosEndereco").html(data[0].endereco);
                $("#inputEnderecosCidade").html(data[0].cidade);
                $("#inputEnderecosEstado").html(data[0].estado);
            }
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}