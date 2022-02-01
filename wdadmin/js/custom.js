$(function () {
    "use strict";
    $(function () {
        $(".preloader").fadeOut();
    });
    jQuery(document).on('click', '.mega-dropdown', function (e) {
        e.stopPropagation()
    });
    // ============================================================== 
    // This is for the top header part and sidebar part
    // ==============================================================  
    var set = function () {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        var topOffset = 70;
        if (width < 3170) {
            $("body").addClass("mini-sidebar");
            $('.navbar-brand span').hide();
            $(".scroll-sidebar, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible");
            $(".sidebartoggler i").addClass("ti-menu");
        } else {
            $("body").removeClass("mini-sidebar");
            $('.navbar-brand span').show();
            //$(".sidebartoggler i").removeClass("ti-menu");
        }

        var height = ((window.innerHeight > 0) ? window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1)
            height = 1;
        if (height > topOffset) {
            $(".page-wrapper").css("min-height", (height) + "px");
        }

    };
    $(window).ready(set);
    $(window).on("resize", set);
    // ============================================================== 
    // Theme options
    // ==============================================================     
    $(".sidebartoggler").on('click', function () {
        if ($("body").hasClass("mini-sidebar")) {
            $("body").trigger("resize");
            $(".scroll-sidebar, .slimScrollDiv").css("overflow", "hidden").parent().css("overflow", "visible");
            $("body").removeClass("mini-sidebar");
            $('.navbar-brand span').show();
            //$(".sidebartoggler i").addClass("ti-menu");
        } else {
            $("body").trigger("resize");
            $(".scroll-sidebar, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible");
            $("body").addClass("mini-sidebar");
            $('.navbar-brand span').hide();
            //$(".sidebartoggler i").removeClass("ti-menu");
        }
    });
    // topbar stickey on scroll

    $(".fix-header .topbar").stick_in_parent({});


    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").click(function () {
        $("body").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("mdi mdi-menu");
        $(".nav-toggler i").addClass("mdi mdi-close");
    });

    $(".search-box a, .search-box .app-search .srh-btn").on('click', function () {
        $(".app-search").toggle(200);
    });
    // ============================================================== 
    // Right sidebar options
    // ============================================================== 
    $(".right-side-toggle").click(function () {
        $(".right-sidebar").slideDown(50);
        $(".right-sidebar").toggleClass("shw-rside");
    });

    $('.floating-labels .form-control').on('focus blur', function (e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

    // ============================================================== 
    // Auto select left navbar
    // ============================================================== 
    $(function () {
        var url = window.location;
        var element = $('ul#sidebarnav a').filter(function () {
            return this.href == url;
        }).addClass('active').parent().addClass('active');
        while (true) {
            if (element.is('li')) {
                element = element.parent().addClass('in').parent().addClass('active');
            } else {
                break;
            }
        }

    });
    // ============================================================== 
    //tooltip
    // ============================================================== 
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    // ============================================================== 
    //Popover
    // ============================================================== 
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    // ============================================================== 
    // Sidebarmenu
    // ============================================================== 
    $(function () {
        $('#sidebarnav').metisMenu();
    });

    // ============================================================== 
    // Slimscrollbars
    // ============================================================== 
    $('.scroll-sidebar').slimScroll({
        position: 'left',
        size: "5px",
        height: '100%',
        color: '#dcdcdc'
    });
    $('.message-center').slimScroll({
        position: 'right',
        size: "5px"

        ,
        color: '#dcdcdc'
    });


    $('.aboutscroll').slimScroll({
        position: 'right',
        size: "5px",
        height: '80',
        color: '#dcdcdc'
    });
    $('.message-scroll').slimScroll({
        position: 'right',
        size: "5px",
        height: '570',
        color: '#dcdcdc'
    });
    $('.chat-box').slimScroll({
        position: 'right',
        size: "5px",
        height: '470',
        color: '#dcdcdc'
    });

    $('.slimscrollright').slimScroll({
        height: '100%',
        position: 'right',
        size: "5px",
        color: '#dcdcdc'
    });

    // ============================================================== 
    // Resize all elements
    // ============================================================== 
    $("body").trigger("resize");
    // ============================================================== 
    // To do list
    // ============================================================== 
    $(".list-task li label").click(function () {
        $(this).toggleClass("task-done");
    });

    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });

    // ============================================================== 
    // Collapsable cards
    // ==============================================================
    $('a[data-action="collapse"]').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.card').find('[data-action="collapse"] i').toggleClass('ti-minus ti-plus');
        $(this).closest('.card').children('.card-block').collapse('toggle');

    });
    // Toggle fullscreen
    $('a[data-action="expand"]').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.card').find('[data-action="expand"] i').toggleClass('mdi-arrow-expand mdi-arrow-compress');
        $(this).closest('.card').toggleClass('card-fullscreen');
    });

    // Close Card
    $('a[data-action="close"]').on('click', function () {
        $(this).closest('.card').removeClass().slideUp('fast');
    });

});

$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*FORM PERFIL USUÁRIO*/
    $("#form_perfil_usuario").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosPerfilUsuario.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                CloseLoading();
                $("#modal_ver_perfil").modal("hide");
                /*LIMPA AREA DE IMAGEM*/
                $(".dropify-clear").click();
                if (data > 0) {
                    Sucesso();
                } else {
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

    $('#abre_modal_sair').click(function () {
        swal({
            title: "Você deseja realmente sair do WD Admin?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, quero sair.",
            closeOnConfirm: false
        }, function () {
            logoff();
        });
    });

    $('.dropify').dropify();

    lista_paginas_menu();

});

function Loading() {
    $(".preloader").fadeIn();
}
function CloseLoading() {
    $(".preloader").fadeOut();
}
function Sucesso() {
    swal("Parabéns!", "Dados salvos com sucesso.", "success");
}
function Aviso() {
    swal("Aviso!", "Ocorreu um erro ao salvar os dados.", "warning");
}
function Erro() {
    swal("Erro!", "Se o problema persistir contate o T.I.", "error");
}
function AvisoPersonalizado(mensagem) {
    swal("Aviso!", mensagem, "warning");
}

/*MONTA SELECT*/
function monta_select(componente, id, campo, tabela, filtro, ordem, selecionado, todos, nenhum) {

    $('#' + componente + ' option[value!="0"]').remove();

    $.ajax({
        url: vsUrl + "controllers/MontaSelect.php",
        type: 'POST',
        dataType: "json",
        async: false,
        data: ({
            viId: id,
            vsCampo: campo,
            vsTabela: tabela,
            vsFiltro: filtro,
            vsOrdem: ordem
        }),
        success: function (data) {
            if (todos === true) {
                $("#" + componente + "").append($("<option>", {
                    value: "T",
                    text: "Todos"
                }));
            }
            if (nenhum === true) {
                $("#" + componente + "").append($("<option>", {
                    value: "0",
                    text: "Nenhum"
                }));
            }
            if (data !== 0) {
                var i;
                for (i = 0; i < data.length; i++) {
                    if (data[i].id === selecionado) {
                        $("#" + componente + "").append($("<option>", {
                            value: data[i].id,
                            text: data[i].texto,
                            selected: true
                        }));
                    } else {
                        $("#" + componente + "").append($("<option>", {
                            value: data[i].id,
                            text: data[i].texto
                        }));
                    }
                }
            }
        },
        error: function () {
            Erro();
        }
    });

}

function ver_perfil_usuario(viIdUsuario) {

    Loading();

    $.ajax({
        url: vsUrl + "controllers/RetornaUsuarioSelecionado.php",
        type: "POST",
        dataType: "json",
        data: ({
            viIdUsuario: viIdUsuario
        }),
        success: function (data) {
            $("#modal_titulo_nome_usuario").text("");
            if (data !== 0) {
                $("#inputIdUsuarioPerfilUsuario").val(viIdUsuario);
                $("#inputNomePerfilUsuario").val(data[0].nome);
                $("#imgImagemPerfilAtualPerfilUsuario").attr("src", vsUrl + "uploads/usuarios/" + data[0].imagem_perfil);
                $("#inputImagemPerfilAtualPerfilUsuario").val(data[0].imagem_perfil);
                CloseLoading();
                $("#modal_titulo_nome_usuario").text("Perfil de " + data[0].nome);
                $("#modal_ver_perfil").modal("show");
            } else {
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

function lista_paginas_menu() {

    $.ajax({
        url: vsUrl + "controllers/RetornaPaginas.php",
        type: "POST",
        dataType: "json",
        success: function (data) {
            $("#lista_paginas").html("");
            $("#lista_paginas").append("<li><a href=\"" + vsUrl + "paginas-gerenciamento\">Gerenciamento</a></li>");
            if (data != 0) {
                for (i = 0; i < data.length; i++) {
                    $("#lista_paginas").append("<li onclick=\"set_id_pagina_session('" + data[i].id_paginas + "', '" + data[i].titulo + "')\"><a href=\"" + vsUrl + "informacoes\">" + data[i].titulo + "</a></li>");
                }
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

function set_id_pagina_session(vsId, vsTitulo) {
    $.ajax({
        type: 'POST',
        url: vsUrl + "controllers/SetIdPaginaSession.php",
        data: {'id': vsId, 'titulo': vsTitulo}
    });
}

/*ABRE MODAL PARA CONFIRMAR A EXCLUSÃO DO ARQUIVO*/
function confirma_exclusao_registro(IdRegistro, vsTabela, vsPasta, vsArquivoAtual, vsArquivoAtual2, vsArquivoAtual3, vsArquivoAtual4, vsArquivoAtual5) {
    swal({
        title: "Atenção!",
        text: "Você realmente deseja excluir este registro?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, quero excluir!",
        closeOnConfirm: false
    }, function () {
        exclui_registro(IdRegistro, vsTabela, vsPasta, vsArquivoAtual, vsArquivoAtual2, vsArquivoAtual3, vsArquivoAtual4, vsArquivoAtual5);
    });
}

/*EXCLUI REGISTRO*/
function exclui_registro(IdRegistro, vsTabela, vsPasta, vsArquivoAtual, vsArquivoAtual2, vsArquivoAtual3, vsArquivoAtual4, vsArquivoAtual5) {

    Loading();

    $.ajax({
        url: vsUrl + "controllers/ExcluiRegistro.php",
        type: "POST",
        dataType: "json",
        data: ({
            IdRegistro: IdRegistro,
            vsTabela: vsTabela,
            vsPasta: vsPasta,
            vsArquivoAtual: vsArquivoAtual,
            vsArquivoAtual2: vsArquivoAtual2,
            vsArquivoAtual3: vsArquivoAtual3,
            vsArquivoAtual4: vsArquivoAtual4,
            vsArquivoAtual5: vsArquivoAtual5
        }),
        success: function (data) {
            if (data === 1) {
                if (vsTabela === "banner") {
                    carrega_banners_slideshow();
                } else if (vsTabela === "galeria_imagem") {
                    carrega_galeria_imagens();
                } else if (vsTabela === "enderecos") {
                    carrega_enderecos();
                } else if (vsTabela === "blog_postagem") {
                    carrega_blog_postagens();
                } else if (vsTabela === "depoimentos") {
                    carrega_depoimentos();
                } else if (vsTabela === "cases") {
                    carrega_cases();
                } else if (vsTabela === "servicos") {
                    carrega_servicos();
                } else if (vsTabela === "perguntas_frequentes") {
                    carrega_perguntas_frequentes();
                } else if (vsTabela === "informacoes") {
                    carrega_informacoes();
                } else if (vsTabela === "blog_imagens") {
                    carrega_blog_imagens();
                } else if (vsTabela === "vitrine_produto_cores") {
                    consulta_cores_produtos();
                } else if (vsTabela === "equipe_contato") {
                    consulta_contato_equipe();
                } else if (vsTabela === "blog_postagem_galeria") {
                    consulta_blog_postagem_galeria();
                }
                swal("Parabéns!", "Registro deletado com sucesso.", "success");
            } else {
                Aviso();
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });

}

/*ABRE MODAL PARA CONFIRMAR A ENVIO DE NEWSLETTER*/
function confirma_envio_newsletter(IdRegistro) {
    swal({
        title: "Atenção!",
        text: "Você realmente deseja enviar newsletter deste registro?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, quero enviar!",
        closeOnConfirm: false
    }, function () {
        swal.close();
        envia_newsletter(IdRegistro);
    });
}

/*ENVIA NEWSLETTER*/
function envia_newsletter(IdRegistro) {

    Loading();

    $.ajax({
        url: vsUrl + "controllers/EnviaEmailNewsletter.php",
        type: "POST",
        dataType: "json",
        data: ({
            IdRegistro: IdRegistro
        }),
        success: function (data) {
            CloseLoading();
            if (data === 1) {
                swal("Parabéns!", "E-mail(s) enviado(s) com sucesso.", "success");
            } else if (data === 2) {
                AvisoPersonalizado("Nenhuma conta de e-mail para enviar!");
            } else {
                Aviso();
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });

}

/*FUNÇÃO FAZ LOGOFF DO USUARIO*/
function logoff() {

    $.ajax({
        url: vsUrl + "controllers/LogoffUsuarios.php",
        type: "POST",
        dataType: "json",
        success: function (data) {
            if (data == 1) {
                $(location).attr('href', vsUrl + "wdadmin");
            } else {
                AvisoPersonalizado("Ocorreu um erro ao tentar fazer logoff no WD Admin");
            }
        },
        error: function () {
            Erro();
        }
    });
}