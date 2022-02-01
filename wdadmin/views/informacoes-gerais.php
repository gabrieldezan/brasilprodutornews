<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Informações Gerais</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/inicio">Home</a></li>
            <li class="breadcrumb-item active">Informações Gerais</li>
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
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <!--PAINEL CADASTRO-->
                        <div class="tab-pane p-20 active" id="cadastro" role="tabpanel">
                            <form id="form_informacoes_gerais" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome da Empresa *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeEmpresa" name="inputNomeEmpresa" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Título do Site</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputTitulo" name="inputTitulo" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Descrição</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputDescricao" name="inputDescricao" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Mapa</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputMapa" name="inputMapa" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Horário de Atendimento</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputHorarioAtendimento" name="inputHorarioAtendimento" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Telefone</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputTelefone" name="inputTelefone" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">WhatsApp</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputWhatsApp" name="inputWhatsApp" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Celular 1</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputCelular1" name="inputCelular1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Celular 2</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputCelular2" name="inputCelular2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">E-mail</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputEmail" name="inputEmail" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Conta que receberá e-mail do formulário de contato</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputEmailContato" name="inputEmailContato" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Envios de E-mail</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputEnvioHost" name="inputEnvioHost" placeholder="Host" />
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="tel" class="form-control form-control-sm" id="inputEnvioPorta" name="inputEnvioPorta" placeholder="Porta" />
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputEnvioEmail" name="inputEnvioEmail" placeholder="E-mail" />
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="password" class="form-control form-control-sm" id="inputEnvioSenha" name="inputEnvioSenha" placeholder="Senha" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Facebook</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">https://www.facebook.com/</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="inputFacebook" name="inputFacebook" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Twitter</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">https://twitter.com/</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="inputTwitter" name="inputTwitter" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Instagram</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">https://www.instagram.com/</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="inputInstagram" name="inputInstagram" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Youtube</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">https://www.youtube.com/</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="inputYoutube" name="inputYoutube" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Linkedin</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">https://www.linkedin.com/</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="inputLinkedin" name="inputLinkedin" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Pinterest</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">https://br.pinterest.com/</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="inputPinterest" name="inputPinterest" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Favicon</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputLogoFaviconAtual" name="inputLogoFaviconAtual" />
                                        <img id="imgLogoFaviconAtual" name="imgLogoFaviconAtual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputLogoFavicon" name="inputLogoFavicon" data-height="100" accept=".jpg, .jpeg, .png" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Logo Principal</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputLogoPrincipalAtual" name="inputLogoPrincipalAtual" />
                                        <img id="imgLogoPrincipalAtual" name="imgLogoPrincipalAtual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputLogoPrincipal" name="inputLogoPrincipal" data-height="100" accept=".jpg, .jpeg, .png" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Logo Secundária</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputLogoSecundariaAtual" name="inputLogoSecundariaAtual" />
                                        <img id="imgLogoSecundariaAtual" name="imgLogoSecundariaAtual" src="" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="dropify" id="inputLogoSecundaria" name="inputLogoSecundaria" data-height="100" accept=".jpg, .jpeg, .png" />
                                        <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
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

<script src="<?php echo URL ?>wdadmin/scripts/informacoes-gerais.js"></script>