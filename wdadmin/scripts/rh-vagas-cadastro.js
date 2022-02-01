$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Vagas de RH");

    monta_select("inputIdClientes", "id_clientes", "descricao", "clientes", "WHERE status = 1", "descricao", "", false);

    $("#form_rh_vagas").on('submit', (function (e) {

        Loading();
        
        $("#inputPeriodo").val($("#selectPeriodo").val());

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosRhVagas.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdRhVagas").val(data);
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
    var id = $("#inputIdRhVagas").val();

    /*LIMPA AREA DE IMAGEM*/
    $(".dropify-clear").click();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_rh_vagas(id);
    } else {
        CloseLoading();
    }
}

/*CARREGA DADOS DO USUÁRIO SELECIONADO*/
function edita_rh_vagas(viIdRhVagas) {

    $.ajax({
        url: vsUrl + "controllers/RetornaRhVagasSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdRhVagas: viIdRhVagas
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputEscolaridade").val(data[0].escolaridade);
                $("#inputTempoExperiencia").val(data[0].tempo_experiencia);
                $("#inputIdiomas").val(data[0].idiomas);
                $("#inputInformatica").val(data[0].informatica);
                $("#inputHabilitacao").val(data[0].habilitacao);
                $("#inputDisponibilidadeViagens").val(data[0].disponibilidade_viagens);
                $("#inputDepartamento").val(data[0].departamento);
                $("#inputCargo").val(data[0].cargo);
                $("#inputSuperiorImediato").val(data[0].superior_imediato);
                $("#inputCargoSuperior").val(data[0].cargo_superior);
                $("#inputPeriodo").val(data[0].periodo);
                $.each(data[0].periodo.split(","), function(i,e){
                    $("#selectPeriodo option[value='" + e + "']").prop("selected", true);
                });
                $("#inputDiasSemana").val(data[0].dias_semana);
                $("#inputHorarioTrabalho").val(data[0].horario_trabalho);
                $("#inputSexo").val(data[0].sexo);
                $("#inputRemuneracao").val(data[0].remuneracao);
                $("#inputBonus").val(data[0].bonus);
                $("#inputTransporte").val(data[0].transporte);
                $("#inputAlimentacaoLocal").val(data[0].alimentacao_local);
                $("#inputValeRefeicao").val(data[0].vale_refeicao);
                $("#inputAssistenciaMedica").val(data[0].assistencia_medica);
                $("#inputAssistenciaOdontologica").val(data[0].assistencia_odontologica);
                $("#inputOutrosBeneficios").val(data[0].outros_beneficios);
                $("#inputConhecimentos").val(data[0].conhecimentos);
                $("#inputHabilidades").val(data[0].habilidades);
                $("#inputAtitudesEsperadas").val(data[0].atitudes_esperadas);
                $("#inputPrincipaisAtividades").val(data[0].principais_ativdades);
                $("#inputObservacoes").val(data[0].observacoes);
                $("#inputDataRecebimento").val(data[0].data_recebimento);
                $("#inputDataEntrevista").val(data[0].data_entrevista);
                $("#inputDataIniciar").val(data[0].data_iniciar);
                $("#inputStatus").val(data[0].status);
                $("#inputIdClientes").val(data[0].id_clientes);
                CloseLoading();
            } else {
                $("#inputIdRhVagas").val("");
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