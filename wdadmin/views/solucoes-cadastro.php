<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Cadastro de Soluções</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>inicio">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo URL ?>solucoes">Soluções</a></li>
            <li class="breadcrumb-item active">Cadastro</li>
        </ol>
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#cadastro" role="tab">
                                <span class="hidden-sm-up"><i class="far fa-edit" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="far fa-edit" aria-hidden="true"></i>&nbsp;Cadastro</span>
                            </a>
                        </li>
                        <li class="botao_novo">
                            <a class="btn btn-info btn-sm" href="<?php echo URL ?>solucoes/cadastro">
                                <span class="hidden-sm-up"><i class="fas fa-plus" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Novo</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <!--PAINEL CADASTRO-->
                        <div class="tab-pane p-20 active" id="cadastro" role="tabpanel">
                            <form id="form_solucoes" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdSolucoes" name="inputIdSolucoes" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Título *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputTitulo" name="inputTitulo" placeholder="ex.: Criação de Sites" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Descrição</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputDescricao" name="inputDescricao" placeholder="Informe uma breve descrição" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem Ícone</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputImagemIconeAtual" name="inputImagemIconeAtual" />
                                        <img id="imgImagemIconeAtual" name="imgImagemIconeAtual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputImagemIcone" name="inputImagemIcone" data-height="100" accept=".jpg, .jpeg, .png" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem </label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputImagemAtual" name="inputImagemAtual" />
                                        <img id="imgImagemAtual" name="imgImagemAtual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputImagem" name="inputImagem" data-height="100" accept=".jpg, .jpeg, .png" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <h3 class="box-title m-t-40">Qualidade 1</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputQ1ImagemAtual" name="inputQ1ImagemAtual" />
                                        <img id="imgQ1ImagemAtual" name="imgQ1ImagemAtual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inpuQ1Imagem" name="inputQ1Imagem" data-height="100" accept=".jpg, .jpeg, .png" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Título</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputQ1Titulo" name="inputQ1Titulo" placeholder="Título da Qualidade 1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Descrição</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputQ1Descricao" name="inputQ1Descricao" placeholder="Descrição da Qualidade 3" />
                                    </div>
                                </div>
                                <h3 class="box-title m-t-40">Qualidade 2</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputQ2ImagemAtual" name="inputQ2ImagemAtual" />
                                        <img id="imgQ2ImagemAtual" name="imgQ2ImagemAtual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inpuQ2Imagem" name="inputQ2Imagem" data-height="100" accept=".jpg, .jpeg, .png" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Título</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputQ2Titulo" name="inputQ2Titulo" placeholder="Título da Qualidade 2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Descrição</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputQ2Descricao" name="inputQ2Descricao" placeholder="Descrição da Qualidade 3" />
                                    </div>
                                </div>
                                <h3 class="box-title m-t-40">Qualidade 3</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputQ3ImagemAtual" name="inputQ3ImagemAtual" />
                                        <img id="imgQ3ImagemAtual" name="imgQ3ImagemAtual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inpuQ3Imagem" name="inputQ3Imagem" data-height="100" accept=".jpg, .jpeg, .png" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Título</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputQ3Titulo" name="inputQ3Titulo" placeholder="Título da Qualidade 3" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Descrição</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputQ3Descricao" name="inputQ3Descricao" placeholder="Descrição da Qualidade 3" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Status *</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" id="inputStatus" name="inputStatus">
                                            <option value="1">Ativo</option>
                                            <option value="0">Inativo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button id="botao_salvar" type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo URL ?>scripts/solucoes-cadastro.js"></script>