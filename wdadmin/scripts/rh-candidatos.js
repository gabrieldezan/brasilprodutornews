$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    $(this).attr("title", "WD Admin - Candidatos de RH");

    $('#div_tabela').hide();
    $('#div_aviso').hide();

    carrega_rh_candidatos();

    CloseLoading();
});

/*PESQUISA O MARCADORES*/
function carrega_rh_candidatos() {

    Loading();

    $.ajax({
        url: vsUrl + "controllers/RetornaRhCandidatos.php",
        type: "POST",
        dataType: "json",
        async: false,
        success: function (data) {
            if (data !== 0) {
                $("#tabela_rh_candidatos tbody").html("");
                var table = $('#tabela_rh_candidatos').DataTable({
                    "language": {
                        "url": vsUrl + "assets/plugins/datatables/Portuguese-Brasil.json"
                    },
                    "lengthMenu": [[10, 25, 50, 100, 250, -1], [10, 25, 50, 100, 250, "Todos"]],
                    dom: 'Blfrtip',
                    buttons: [
                        {
                            extend: 'copy',
                            text: '<i class="far fa-copy fa-fw"></i> Copiar',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                }
                            }
                        },
                        {
                            extend: 'excel',
                            text: '<i class="far fa-file-excel fa-fw"></i> Excel',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                }
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="far fa-file-pdf fa-fw"></i> PDF',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                }
                            },
                            orientation: 'landscape',
                            pageSize: 'LEGAL'
                        },
                        {
                            extend: 'print',
                            text: '<i class="far fas fa-print fa-fw"></i> Imprimir',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                }
                            },
                            orientation: 'landscape',
                            pageSize: 'LEGAL'
                        },
                        {
                            text: '<i class="fas fa-plus"></i> Novo',
                            action: function () {
                                window.location.href = "rh-candidatos/cadastro";
                            }
                        }
                    ],
                    fixedHeader: false,
                    colReorder: false,
                    responsive: false,
                    "processing": true,
                    data: data,
                    "columns": [
                        {"data": "id_rh_candidatos"},
                        {"data": "nome_completo"},
                        {"data": "celular_whats"},
                        {"data": "vaga_interesse"},
                        {
                            "render": function (data, type, row) {
                                return "<a href=\"rh-candidatos/cadastro/" + row.id_rh_candidatos + "\" class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar " + row.nome_completo + "\"><i class=\"fas fa-edit\"></i></a>\n\
                                <a href=\"rh-candidatos/impressao/" + row.id_rh_candidatos + "\" class=\"btn btn-sm btn-outline-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Imprimir currículo de " + row.nome_completo + "\"><i class=\"fas fa-print\"></i></a>\
                            ";
                            }
                        }
                    ],
                    'columnDefs': [
                        {
                            "targets": 0,
                            "className": "text-center"
                        },
                        {
                            "targets": 2,
                            "className": "text-center"
                        },
                        {
                            "targets": 4,
                            "className": "text-center"
                        }
                    ],
                    "drawCallback": function (settings) {
                        $('[data-toggle="tooltip"]').tooltip();
                    }
                });
                $('#div_aviso').hide();
                $('#div_tabela').show();
            } else {
                $('#div_tabela').hide();
                $('#div_aviso').show();
            }
        },
        error: function () {
            $("#tabela_rh_candidatos tbody").html("");
            Erro();
        }
    });
}