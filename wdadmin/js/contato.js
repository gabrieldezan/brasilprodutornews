jQuery(function ($) {

    /*FORM*/
    $("#form_contato").on('submit', (function (e) {
        
        $('#botao_enviar_mensagem').html('Aguarde...');
        $("#botao_enviar_mensagem").prop("disabled", true);

        e.preventDefault();
        $.ajax({
            url: vsUrl + "wdadmin/controllers/EnviaEmailFormContato.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (vsReturn) {
                $("#botao_enviar_mensagem").html('Enviar Mensagem');
                $("#botao_enviar_mensagem").prop("disabled", false);
                if (vsReturn == "1") {
                    LimpaForm();
                    Sucesso();
                } else {
                    Aviso();
                }
            },
            error: function (vsReturn) {
                $("#botao_enviar_mensagem").html('Enviar Mensagem');
                $("#botao_enviar_mensagem").prop("disabled", false);
                alert('Erro: ' + vsReturn);
            }
        });
        return false;
    }));

});

function Sucesso() {
    swal("Parabéns!", "E-mail enviado com sucesso!", "success");
}

function Aviso() {
    swal("Aviso!", "Ocorreu um erro ao enviar o e-mail!", "warning");
}

function LimpaForm() {
    $("#vsNome").val("");
    $("#vsEmail").val("");
    $("#vsAssunto").val("");
    $("#vsMensagem").val("");
}