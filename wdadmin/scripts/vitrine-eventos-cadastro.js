$(document).ready(function () {

    $('#inputValor').mask("000.000.000.000.000,00", {reverse: true});
    $('#inputValorCombatShirt').mask("000.000.000.000.000,00", {reverse: true});
    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Eventos da Vitrine");

    /*APLICA CAIXA DE TEXTO*/
    $('#inputDetalhes').wysihtml5();
    $('#inputMaisInformacoes').wysihtml5();
    
    /*BOTÃO NOVO TIME*/
    $("#botao_nova_time_evento").click(function (e) {
        limpa_form_times_evento();
    });

    /*SUBMETE FORM CADASTRO*/
    $("#form_vitrine_eventos_cadastro").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosVitrineEventos.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdVitrineEventosCadastro").val(data);
                    $("#inputIdVitrineEvento").val(data);
                    verifica_edicao();
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

    /*SUBMETE FORM TIMES*/
    $("#form_vitrine_evento_times").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosVitrineEventosTimes.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    limpa_form_times_evento();
                    consulta_evento_times();
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
    var id = $("#inputIdVitrineEventosCadastro").val();

    /*LIMPA AREA DE IMAGEM*/
    $(".dropify-clear").click();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_vitrine_eventos(id);
        consulta_evento_times();
    } else {

        CloseLoading();
    }
}

/*CARREGA DADOS DO USUÁRIO SELECIONADO*/
function edita_vitrine_eventos(viIdVitrineEventos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaVitrineEventosSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdVitrineEventos: viIdVitrineEventos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputDescricao").val(data[0].descricao);
                $("#inputDetalhes").val(data[0].detalhes);
                $("#inputMaisInformacoes").val(data[0].mais_informacoes);
                $("#inputMapa").val(data[0].mapa);
                $("#inputDataEvento").val(data[0].data_evento);
                $("#inputEtiqueta").val(data[0].etiqueta);
                $("#inputValor").val(data[0].valor);
                $("#inputValorCombatShirt").val(data[0].valor_combatshirt);
                $("#inputCorEtiqueta").val(data[0].cor_etiqueta);
                $("#inputImagem").val(data[0].imagem);
                $("#imgImagem").attr("src", vsUrl + "uploads/eventos/" + data[0].imagem);
                $("#inputStatus").val(data[0].status);
                CloseLoading();
            } else {
                $("#inputIdVitrineEventosCadastro").val("");
                CloseLoading();
                AvisoPersonalizado("Dados não encontrados!");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DO TIME SELECIONADO*/
function edita_times_evento(viIdEventoTime) {

    Loading();

    $.ajax({
        url: vsUrl + "controllers/RetornaVitrineEventoTimeSelecionado.php",
        type: "POST",
        dataType: "json",
        data: ({
            viIdEventoTime: viIdEventoTime
        }),
        success: function (data) {
            limpa_form_times_evento();
            $("#inputIdVitrineEventoTimes").val(viIdEventoTime);
            $("#inputTime").val(data[0].time);
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA TIMES DO EVENTO*/
function consulta_evento_times() {

    var viIdVitrineEvento = $("#inputIdVitrineEvento").val();

    $.ajax({
        url: vsUrl + "controllers/RetornaVitrineEventoTimes.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdVitrineEvento: viIdVitrineEvento
        }),
        success: function (data) {
            if (data != 0) {

                $("#tabela_evento_times tbody").html("");
                for (i = 0; i < data.length; i++) {
                    $("#tabela_evento_times tbody").append(
                            "<tr>" +
                            "<td>" + data[i].time + "</td>" +
                            "<td align=\"center\">" +
                            "<button type=\"button\" class=\"btn btn-secondary btn-sm\" onclick=\"edita_evento_times(" + data[i].id_vitrine_evento_times + ")\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar time " + data[i].time + "\"><i class=\"far fa-edit fa-fw\" aria-hidden=\"true\"></i></button>&nbsp;" +
//                            "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"confirma_exclusao_registro(" + data[i].id_vitrine_evento_times + ", 'vitrine_produto_cores', 'vitrine_produtos', '" + data[i].imagem1 + "', '" + data[i].imagem2 + "', '" + data[i].imagem3 + "', '" + data[i].imagem4 + "', '" + data[i].imagem5 + "');\" data-toggle=\"tooltip\" title=\"Remover " + data[i].descricao + "\"><i class=\"far fa-trash-alt fa-fw\" aria-hidden=\"true\"></i></button>" +
                            "</td>" +
                            "</tr>"
                            );
                    $('[data-toggle="tooltip"]').tooltip();
                    CloseLoading();
                }
            } else {
                $("#tabela_evento_times tbody").html("");
                $("#tabela_evento_times tbody").append(
                        "<tr>" +
                        "<td align=\"center\" colspan=\"10\">Nenhum time encontrado!</td>" +
                        "</tr>"
                        );
                CloseLoading();
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DO TIME SELECIONADO*/
function edita_evento_times(viIdEventoTimes) {

    Loading();

    $.ajax({
        url: vsUrl + "controllers/RetornaVitrineEventoTimeSelecionado.php",
        type: "POST",
        dataType: "json",
        data: ({
            viIdEventoTimes: viIdEventoTimes
        }),
        success: function (data) {
            limpa_form_times_evento();
            $("#inputIdVitrineEventoTimes").val(viIdEventoTimes);
            $("#inputTime").val(data[0].time);
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}


/*LIMPA FORMULÁRIO TIMES*/
function limpa_form_times_evento() {
    $("#inputIdVitrineEventoTimes").val("");
    $("#inputTime").val("");
}