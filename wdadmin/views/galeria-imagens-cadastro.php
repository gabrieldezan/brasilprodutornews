<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Cadastro de Imagens da Galeria</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/inicio">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/galeria-imagens">Imagens da Galeria</a></li>
            <li class="breadcrumb-item active">Cadastro</li>
        </ol>
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#cadastro" role="tab">
                                <span class="hidden-sm-up"><i class="far fa-edit" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="far fa-edit" aria-hidden="true"></i>&nbsp;Cadastro</span>
                            </a>
                        </li>
                        <li class="botao_novo">
                            <a class="btn btn-info btn-sm" href="<?php echo URL ?>wdadmin/galeria-imagens/cadastro">
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
                            <form id="form_galeria_imagens" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdGaleriaImagens" name="inputIdGaleriaImagens" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Título *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputTitulo" name="inputTitulo" placeholder="ex.: Projeto X" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem 1 *</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputImagem1Atual" name="inputImagem1Atual" />
                                        <img id="imgImagem1Atual" name="imgImagem1Atual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputImagem1" name="inputImagem1" data-height="100" accept=".jpg, .jpeg" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem 2</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputImagem2Atual" name="inputImagem2Atual" />
                                        <img id="imgImagem2Atual" name="imgImagem2Atual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputImagem2" name="inputImagem2" data-height="100" accept=".jpg, .jpeg" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem 3</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputImagem3Atual" name="inputImagem3Atual" />
                                        <img id="imgImagem3Atual" name="imgImagem3Atual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputImagem3" name="inputImagem3" data-height="100" accept=".jpg, .jpeg" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem 4</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputImagem4Atual" name="inputImagem4Atual" />
                                        <img id="imgImagem4Atual" name="imgImagem4Atual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputImagem4" name="inputImagem4" data-height="100" accept=".jpg, .jpeg" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imagem 5</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputImagem5Atual" name="inputImagem5Atual" />
                                        <img id="imgImagem5Atual" name="imgImagem5Atual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputImagem5" name="inputImagem5" data-height="100" accept=".jpg, .jpeg" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Descrição</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputDescricao" id="inputDescricao" class="form-control form-control-sm" rows="10" placeholder="Informe a descrição aqui..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Detalhes</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputDetalhes" id="inputDetalhes" class="form-control form-control-sm" rows="4" placeholder="Detalhes adicionais..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Link 1</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputLink1" name="inputLink1" placeholder="http://webdezan.com.br" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Link 2</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputLink2" name="inputLink2" placeholder="http://webdezan.com.br" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Youtube</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputYoutube" name="inputYoutube" placeholder="https://www.youtube.com/" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Grupo *</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" id="inputIdGaleriaGrupo" name="inputIdGaleriaGrupo" required></select>
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

<script src="<?php echo URL ?>wdadmin/scripts/galeria-imagens-cadastro.js"></script>