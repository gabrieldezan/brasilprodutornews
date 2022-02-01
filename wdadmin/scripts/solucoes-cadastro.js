$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Soluções");

    $("#inputImagem, #imgImagemIconeAtual").change(function () {

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

    $("#inputQ1Imagem, #inputQ2Imagem, #inputQ3Imagem").change(function () {

        if (this.files[0].size > 2000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 2MB de tamanho.");
            $("#botao_salvar").attr("disabled", true);
        } else {
            var fr = new FileReader;

            fr.onload = function () {
                var img = new Image;

                img.onload = function () {
                    if (img.width > 60 && this.height > 90) {
                        AvisoPersonalizado("A imagem não pode ser maior que 60x90 pixels de dimensão.");
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

    $("#form_solucoes").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosSolucoes.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdSolucoes").val(data);
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

    /*CHAMA FUNÇÃO PARA VERIFICAR EDIÇÃO OU CADASTRO*/
    verifica_edicao();

});

/*FUNÇÃO QUE VERIFICA SE EXISTE UM ID*/
function verifica_edicao() {

    /*PEGA ID*/
    var id = $("#inputIdSolucoes").val();

    /*LIMPA AREA DE IMAGEM*/
    $(".dropify-clear").click();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_solucoes(id);
    } else {
        CloseLoading();
    }
}

/*CARREGA DADOS DO SOLUÇÃO SELECIONADA*/
function edita_solucoes(viIdSolucoes) {

    $.ajax({
        url: vsUrl + "controllers/RetornaSolucoesSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdSolucoes: viIdSolucoes
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputTitulo").val(data[0].titulo);
                $("#inputDescricao").val(data[0].descricao);
                $("#inputImagemIconeAtual").val(data[0].imagem_icone);
                $("#imgImagemIconeAtual").attr("src", vsUrl + "uploads/solucoes/" + data[0].imagem_icone);
                $("#inputImagemAtual").val(data[0].imagem);
                $("#imgImagemAtual").attr("src", vsUrl + "uploads/solucoes/" + data[0].imagem);
                $("#inputQ1ImagemAtual").val(data[0].q1_imagem);
                $("#imgQ1ImagemAtual").attr("src", vsUrl + "uploads/solucoes/" + data[0].q1_imagem);
                $("#inputQ1Titulo").val(data[0].q1_titulo);
                $("#inputQ1Descricao").val(data[0].q1_descricao);
                $("#inputQ2ImagemAtual").val(data[0].q2_imagem);
                $("#imgQ2ImagemAtual").attr("src", vsUrl + "uploads/solucoes/" + data[0].q2_imagem);
                $("#inputQ2Titulo").val(data[0].q2_titulo);
                $("#inputQ2Descricao").val(data[0].q2_descricao);
                $("#inputQ3ImagemAtual").val(data[0].q3_imagem);
                $("#imgQ3ImagemAtual").attr("src", vsUrl + "uploads/solucoes/" + data[0].q3_imagem);
                $("#inputQ3Titulo").val(data[0].q3_titulo);
                $("#inputQ3Descricao").val(data[0].q3_descricao);
                $("#inputStatus").val(data[0].status);
                CloseLoading();
            } else {
                $("#inputIdSolucoes").val("");
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