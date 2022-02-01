$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Páginas");

    $("#form_paginas").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosPagina.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdPaginas").val(data);
                    lista_paginas_menu();
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
    var id = $("#inputIdPaginas").val();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_paginas(id);
    } else {
        CloseLoading();
    }
}

/*CARREGA DADOS DO USUÁRIO SELECIONADO*/
function edita_paginas(viIdPaginas) {

    $.ajax({
        url: vsUrl + "controllers/RetornaPaginaSelecionada.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdPaginas: viIdPaginas
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputTitulo").val(data[0].titulo);
                $("#inputIcone").val(data[0].icone);
                $("#inputImagem").val(data[0].imagem_destaque);
                $("#inputTexto").val(data[0].texto);
                $("#inputLink").val(data[0].link);
                $("#inputData").val(data[0].data);
                $("#inputHora").val(data[0].hora);
                $("#inputPosicao").val(data[0].posicao);
                $("#inputUrl").val(data[0].url);
                CloseLoading();
            } else {
                AvisoPersonalizado("Dados não encontrados!");
                $("#inputIdPaginas").val("");
            }
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}