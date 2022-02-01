$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Informações Gerais");

    $("#inputLogoFavicon").change(function () {

        if (this.files[0].size > 1000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 1MB de tamanho.");
            $("#botao_salvar").attr("disabled", true);
        } else {
            var fr = new FileReader;

            fr.onload = function () {
                var img = new Image;

                img.onload = function () {
                    if (img.width > 160 && this.height > 160) {
                        AvisoPersonalizado("A imagem não pode ser maior que 160x160 pixels de dimensão.");
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

    $("#inputLogoPrincipal").change(function () {

        if (this.files[0].size > 1000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 1MB de tamanho.");
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

    $("#inputLogoSecundaria").change(function () {

        if (this.files[0].size > 1000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 1MB de tamanho.");
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

    $("#form_informacoes_gerais").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosInformacoesGerais.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    edita_informacoes_gerais();
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
    edita_informacoes_gerais();

});

/*FUNÇÃO QUE VERIFICA SE EXISTE UM ID*/
function edita_informacoes_gerais() {

    /*LIMPA AREA DE IMAGEM*/
    $(".dropify-clear").click();

    $.ajax({
        url: vsUrl + "controllers/RetornaInformacoesGerais.php",
        type: "POST",
        dataType: "json",
        async: false,
        success: function (data) {
            if (data !== 0) {
                $("#inputNomeEmpresa").val(data[0].nome_empresa);
                $("#inputTitulo").val(data[0].titulo);
                $("#inputDescricao").val(data[0].descricao);
                $("#inputMapa").val(data[0].mapa);
                $("#inputHorarioAtendimento").val(data[0].horario_atendimento);
                $("#inputTelefone").val(data[0].telefone);
                $("#inputWhatsApp").val(data[0].whatsapp);
                $("#inputCelular1").val(data[0].celular1);
                $("#inputCelular2").val(data[0].celular2);
                $("#inputEmail").val(data[0].email);
                $("#inputEmailContato").val(data[0].email_contato);
                $("#inputEnvioHost").val(data[0].envio_host);
                $("#inputEnvioPorta").val(data[0].envio_porta);
                $("#inputEnvioEmail").val(data[0].envio_email);
                $("#inputEnvioSenha").val(data[0].envio_senha);
                $("#inputFacebook").val(data[0].facebook);
                $("#inputTwitter").val(data[0].twitter);
                $("#inputInstagram").val(data[0].instagram);
                $("#inputYoutube").val(data[0].youtube);
                $("#inputLinkedin").val(data[0].linkedin);
                $("#inputPinterest").val(data[0].pinterest);
                $("#imgLogoFaviconAtual").attr("src", vsUrl + "uploads/informacoes_gerais/" + data[0].favicon);
                $("#inputLogoFaviconAtual").val(data[0].favicon);
                $("#imgLogoPrincipalAtual").attr("src", vsUrl + "uploads/informacoes_gerais/" + data[0].logo_principal);
                $("#inputLogoPrincipalAtual").val(data[0].logo_principal);
                $("#imgLogoSecundariaAtual").attr("src", vsUrl + "uploads/informacoes_gerais/" + data[0].logo_secundaria);
                $("#inputLogoSecundariaAtual").val(data[0].logo_secundaria);
            }
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}