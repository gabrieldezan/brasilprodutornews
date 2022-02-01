$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Subgrupos da Vitrine");

    $("#inputImagemCapa").change(function () {
        if (this.files[0].size > 2000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 2MB de tamanho.");
            $("#botao_salvar").attr("disabled", true);
        } else {
            var fr = new FileReader;

            fr.onload = function () {
                var img = new Image;

                img.onload = function () {
                    if (img.width > 1920 && this.height > 1080) {
                        AvisoPersonalizado("A imagem não pode ser maior que 1920x1080 pixels de dimensão.");
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

    monta_select("inputIdGrupoVitrine", "id_vitrine_grupo", "descricao", "vitrine_grupo", "WHERE status = 1", "descricao", "", false);

    $("#form_vitrine_subgrupo").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosVitrineSubgrupo.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdVitrineSubgrupo").val(data);
                    edita_vitrine_subgrupo(data);
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
    var id = $("#inputIdVitrineSubgrupo").val();

    /*LIMPA AREA DE IMAGEM*/
    $(".dropify-clear").click();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_vitrine_subgrupo(id);
    } else {
        CloseLoading();
    }
}

/*CARREGA DADOS DO SERVIÇO SELECIONADO*/
function edita_vitrine_subgrupo(viIdVitrineSubgrupo) {

    $.ajax({
        url: vsUrl + "controllers/RetornaVitrineSubgrupoSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdVitrineSubgrupo: viIdVitrineSubgrupo
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputDescricao").val(data[0].descricao);
                $("#inputNomePagina").val(data[0].nome_pagina);
                $("#inputImagemCapaAtual").val(data[0].imagem_capa);
                $("#imgImagemCapaAtual").attr("src", vsUrl + "uploads/vitrine_subgrupo/" + data[0].imagem_capa);
                $("#inputIdGrupoVitrine").val(data[0].id_vitrine_grupo);
                $("#inputStatus").val(data[0].status);
                CloseLoading();
            } else {
                $("#inputIdVitrineSubgrupo").val("");
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