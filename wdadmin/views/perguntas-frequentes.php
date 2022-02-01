<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Perguntas Frequentes</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio">Home</a></li>
            <li class="breadcrumb-item active">Perguntas Frequentes</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group form-group-sm">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend"><span class="input-group-text">Serviços</span></div>
                            <select id="inputFiltroIdServicos" name="inputFiltroIdServicos" class="form-control form-control-sm"></select>
                            <div class="input-group-append">
                                <button id="botao_pesquisa_perguntas_frequentes" class="btn btn-primary" type="button">        
                                    <i class="fa fa-search" aria-hidden="true"></i>      
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="div_tabela" class="table-responsive">
                        <table id="tabela_perguntas_frequentes" class="table table-sm table-hover table-striped table-bordered" cellspacing="0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Serviços</th>
                                    <th>Número</th>
                                    <th>Pergunta</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <div id="div_aviso" class="row">
                        <div class="col-sm">
                            <div class="alert alert-warning" role="alert">
                                <center>
                                    Nenhum resultado encontrado! Utilize o botão ao lado para cadastrar.&nbsp;
                                    <a class="btn btn-info btn-sm" href="<?php echo URL ?>wdadmin/perguntas-frequentes/cadastro">
                                        <span class="hidden-sm-up"><i class="fas fa-plus" aria-hidden="true"></i></span>
                                        <span class="hidden-xs-down"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Novo</span>
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo URL ?>wdadmin/scripts/perguntas-frequentes.js"></script>