$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Equipe");

    $('#inputDetalhes').wysihtml5();

    /*BOTÃO NOVO*/
    $("#botao_nova_contato_equipe").click(function (e) {
        limpa_form_contato_equipe();
    });

    $("#inputImagem").change(function () {

        if (this.files[0].size > 2000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 2MB de tamanho.");
            $("#botao_salvar").attr("disabled", true);
        } else {
            var fr = new FileReader;

            fr.onload = function () {
                var img = new Image;

                img.onload = function () {
                    if (img.width > 500 && this.height > 500) {
                        AvisoPersonalizado("A imagem não pode ser maior que 500x500 pixels de dimensão.");
                        $("#botao_salvar").attr("disabled", true);
                    } else {
                        $("#botao_salvar").removeAttr("disabled");
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        }
    });

    /*SUBMETE FORM CADASTRO*/
    $("#form_equipe_cadastro").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosEquipe.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdEquipeCadastro").val(data);
                    $("#inputIdEquipe").val(data);
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

    /*SUBMETE FORM CONTATO*/
    $("#form_equipe_contato").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosEquipeContato.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    limpa_form_contato_equipe();
                    consulta_contato_equipe();
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
    var id = $("#inputIdEquipeCadastro").val();

    /*LIMPA AREA DE IMAGEM*/
    $(".dropify-clear").click();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_equipe(id);
        consulta_contato_equipe();
        $('ul li a[href="#contato"]').removeClass("disabled");
    } else {
        $('ul li a[href="#contato"]').addClass("disabled");
        $("#botao_visualizar_manual").addClass('disabled');
        CloseLoading();
    }
}

/*CARREGA DADOS DO USUÁRIO SELECIONADO*/
function edita_equipe(viIdEquipe) {

    $.ajax({
        url: vsUrl + "controllers/RetornaEquipeSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdEquipe: viIdEquipe
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputNome").val(data[0].nome);
                $("#inputCargo").val(data[0].cargo);
                $("#inputInformacaoAdicional").val(data[0].informacao_adicional);
                $("#inputResumo").val(data[0].resumo);
                $("#inputDetalhes").val(data[0].detalhes);
                $("#inputImagemAtual").val(data[0].imagem);
                $("#imgImagemAtual").attr("src", vsUrl + "uploads/equipe/" + data[0].imagem);
                $("#inputDestaque").val(data[0].destaque);
                $("#inputStatus").val(data[0].status);
                CloseLoading();
            } else {
                $("#inputIdEquipeCadastro").val("");
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

/*CARREGA CORES DO PRODUTO*/
function consulta_contato_equipe() {

    var viIdEquipe = $("#inputIdEquipe").val();

    $.ajax({
        url: vsUrl + "controllers/RetornaEquipeContato.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdEquipe: viIdEquipe
        }),
        success: function (data) {
            if (data != 0) {
                $("#tabela_contato_equipe tbody").html("");
                for (i = 0; i < data.length; i++) {
                    $("#tabela_contato_equipe tbody").append(
                            "<tr>" +
                            "<td>" + data[i].titulo + "</td>" +
                            "<td>" + data[i].icone + "</td>" +
                            "<td><a href=\"" + data[i].link + "\" target=\"_blank\">" + data[i].link + "</a></td>" +
                            "<td>" + data[i].tipo + "</td>" +
                            "<td align=\"center\">" +
                            "<button type=\"button\" class=\"btn btn-secondary btn-sm\" onclick=\"edita_contato_equipe(" + data[i].id_equipe_contato + ")\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar " + data[i].titulo + "\"><i class=\"far fa-edit fa-fw\" aria-hidden=\"true\"></i></button>&nbsp;" +
                            "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"confirma_exclusao_registro(" + data[i].id_equipe_contato + ", 'equipe_contato', '', '', '', '', '', '');\" data-toggle=\"tooltip\" title=\"Remover " + data[i].titulo + "\"><i class=\"far fa-trash-alt fa-fw\" aria-hidden=\"true\"></i></button>" +
                            "</td>" +
                            "</tr>"
                            );
                    $('[data-toggle="tooltip"]').tooltip();
                    CloseLoading();
                }
            } else {
                $("#tabela_contato_equipe tbody").html("");
                $("#tabela_contato_equipe tbody").append(
                        "<tr>" +
                        "<td align=\"center\" colspan=\"10\">Nenhum contato encontrado!</td>" +
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

/*CARREGA DADOS DA COR SELECIONADA*/
function edita_contato_equipe(IdEquipeContato) {

    Loading();

    $.ajax({
        url: vsUrl + "controllers/RetornaEquipeContatoSelecionado.php",
        type: "POST",
        dataType: "json",
        data: ({
            IdEquipeContato: IdEquipeContato
        }),
        success: function (data) {
            limpa_form_contato_equipe();
            $("#inputIdEquipeContato").val(IdEquipeContato);
            $("#inputTitulo").val(data[0].titulo);
            $("#inputIcone").val(data[0].icone);
            $("#inputLink").val(data[0].link);
            $("#inputTipo").val(data[0].tipo);
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*LIMPA FORMULÁRIO CORES PRODUTOS*/
function limpa_form_contato_equipe() {
    $("#inputIdEquipeContato").val("");
    $("#inputTitulo").val("");
    $("#inputIcone").val("");
    $("#inputLink").val("");
    $("#inputTipo").val("1");
}