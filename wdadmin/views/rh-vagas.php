<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Vagas de RH</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio">Home</a></li>
            <li class="breadcrumb-item active">Vagas de RH</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal">
                        <div class="form-group form-group-sm row">
                            <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend"><span class="input-group-text">Cliente</span></div>
                                    <select id="inputFiltroIdClientes" name="inputFiltroIdClientes" class="form-control form-control-sm"></select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend"><span class="input-group-text">Status *</span></div>
                                    <select id="inputFiltroStatus" name="inputFiltroStatus" class="form-control form-control-sm" required>
                                        <option value="T">Todos</option>
                                        <option value="1">Aberta</option>
                                        <option value="2">Preenchida</option>
                                        <option value="3">Cancelada</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button id="botao_pesquisa_rh_vagas" class="btn btn-primary" type="button">        
                                            <i class="fa fa-search" aria-hidden="true"></i>      
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="div_tabela" class="table-responsive">
                        <table id="tabela_rh_vagas" class="table table-sm table-hover table-striped table-bordered" cellspacing="0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Departamento</th>
                                    <th>Cargo</th>
                                    <th>Status</th>
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
                                    <a class="btn btn-info btn-sm" href="<?php echo URL ?>wdadmin/rh-vagas/cadastro">
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

<script src="<?php echo URL ?>wdadmin/scripts/rh-vagas.js"></script>