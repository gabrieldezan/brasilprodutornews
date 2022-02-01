$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    $(this).attr("title", "WD Admin - Soluções");

    $('#div_tabela').hide();
    $('#div_aviso').hide();

    $('#tabela_solucoes').DataTable();

    carrega_solucoes();

});

/*PESQUISA OS CLIENTES*/
function carrega_solucoes() {

    $.ajax({
        url: vsUrl + "controllers/RetornaSolucoes.php",
        type: "POST",
        dataType: "json",
        async: false,
        success: function (data) {
            if (data !== 0) {
                $("#tabela_solucoes tbody").html("");
                $('#tabela_solucoes').DataTable().destroy();
                var table = $('#tabela_solucoes').DataTable({
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
                                window.location.href = "solucoes/cadastro";
                            }
                        }
                    ],
                    fixedHeader: false,
                    colReorder: false,
                    responsive: false,
                    "processing": true,
                    data: data,
                    "columns": [
                        {"data": "id_solucoes"},
                        {
                            "render": function (data, type, row) {
                                return "<img src=\"" + vsUrl + "uploads/solucoes/" + row.imagem_icone + "\" class=\"img-fluid\" style=\"max-height:80px;\" />";
                            }
                        },
                        {"data": "titulo"},
                        {
                            "render": function (data, type, row) {
                                return "<span class=\"label label-" + row.status_class + "\">" + row.status + "</span>";
                            }
                        },
                        {
                            "render": function (data, type, row) {
                                return "<a href=\"solucoes/cadastro/" + row.id_solucoes + "\" class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar " + row.titulo + "\"><i class=\"fas fa-edit\"></i></a>";
                            }
                        }
                    ],
                    'columnDefs': [
                        {
                            "targets": 0,
                            "className": "text-center"
                        },
                        {
                            "targets": 1,
                            "className": "text-center"
                        },
                        {
                            "targets": 3,
                            "className": "text-center"
                        },
                        {
                            "targets": 4,
                            "className": "text-center"
                        }
                    ],
                    "drawCallback": function (settings) {
                        $('[data-toggle="tooltip"]').tooltip();
                    },
                    "order": [[2, "asc"]]
                });
                $('#div_aviso').hide();
                $('#div_tabela').show();
            } else {
                $('#div_tabela').hide();
                $('#div_aviso').show();
            }
            CloseLoading();
        },
        error: function () {
            $("#tabela_solucoes tbody").html("");
            CloseLoading();
            Erro();
        }
    });
}