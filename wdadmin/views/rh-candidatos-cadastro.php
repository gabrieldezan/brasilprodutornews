<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Cadastro de Candidatos de RH</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/inicio">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/rh-candidatos">Candidatos de RH</a></li>
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
                                <span class="hidden-xs-down"><i class="far fa-edit" aria-hidden="true"></i>&nbsp;Dados Pessoais</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#disponibilidade" role="tab">
                                <span class="hidden-sm-up"><i class="fas fa-chevron-circle-down"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-chevron-circle-down"></i>&nbsp;Disponibilidades</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#caracteristicas_fisicas" role="tab">
                                <span class="hidden-sm-up"><i class="fas fa-chevron-circle-down"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-chevron-circle-down"></i>&nbsp;Características Físicas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#dados_familiares" role="tab">
                                <span class="hidden-sm-up"><i class="fas fa-chevron-circle-down"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-chevron-circle-down"></i>&nbsp;Dados Familiares</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#formacao_cursos" role="tab">
                                <span class="hidden-sm-up"><i class="fas fa-chevron-circle-down"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-chevron-circle-down"></i>&nbsp;Formação/Cursos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#saude_fisica_emocional" role="tab">
                                <span class="hidden-sm-up"><i class="fas fa-chevron-circle-down"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-chevron-circle-down"></i>&nbsp;Saúde Física e Emocional</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#caracteristicas_profissionais" role="tab">
                                <span class="hidden-sm-up"><i class="fas fa-chevron-circle-down"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-chevron-circle-down"></i>&nbsp;Características Profissionais</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#situacoes_informacoes" role="tab">
                                <span class="hidden-sm-up"><i class="fas fa-chevron-circle-down"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-chevron-circle-down"></i>&nbsp;Situações e Informações</span>
                            </a>
                        </li>
                        <li class="botao_novo">
                            <a class="btn btn-info btn-sm" href="<?php echo URL ?>wdadmin/rh-candidatos/cadastro">
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
                            <form id="form_rh_candidatos" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhCandidatos" name="inputIdRhCandidatos" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome Completo *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeCompleto" name="inputNomeCompleto" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">E-mail *</label>
                                    <div class="col-sm-3">
                                        <input type="email" class="form-control form-control-sm" id="inputEmail" name="inputEmail" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Senha</label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control form-control-sm" id="inputSenha" name="inputSenha">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Celular/Whats *</label>
                                    <div class="col-sm-3">
                                        <input type="tel" class="form-control form-control-sm" id="inputCelularWhats" name="inputCelularWhats" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Telefone para Recados *</label>
                                    <div class="col-sm-3">
                                        <input type="tel" class="form-control form-control-sm" id="inputTelefoneRecados" name="inputTelefoneRecados" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Naturalidade (Cidade) *</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputNaturalidade" name="inputNaturalidade" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Nacionalidade (País) *</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputNacionalidade" name="inputNacionalidade" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Data de Nascimento *</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control form-control-sm" id="inputDataNascimento" name="inputDataNascimento" required>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Idade *</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control form-control-sm" id="inputIdade" name="inputIdade" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Sexo *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputSexo" name="inputSexo" required>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nº CNH</label>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control form-control-sm" id="inputCnh" name="inputCnh">
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Categoria</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputCnhCategoria" name="inputCnhCategoria">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Validade</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control form-control-sm" id="inputCnhValidade" name="inputCnhValidade">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">RG *</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputRG" name="inputRG" required>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">CPF *</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputCPF" name="inputCPF" required>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">PIS (Nº CTPS) *</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputPis" name="inputPis" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Endereço (Rua) *</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputEndereco" name="inputEndereco" required>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Nº *</label>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control form-control-sm" id="inputNumero" name="inputNumero" required>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Bairro *</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputBairro" name="inputBairro" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Cidade *</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputCidade" name="inputCidade" required>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Faz quanto tempo que mora nesta cidade? *</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputQuantoTempoMoraCidade" name="inputQuantoTempoMoraCidade" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Você mora com quem *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputMoraComQuem" name="inputMoraComQuem" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Imóvel *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputImovel" name="inputImovel" required>
                                            <option value="1">Próprio</option>
                                            <option value="2">Alugado</option>
                                            <option value="3">Emprestado</option>
                                            <option value="4">Financiado</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-4 col-form-label col-form-label-sm text-right">Possui Veículo *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputPossuiVeiculo" name="inputPossuiVeiculo" required>
                                            <option value="1">Não</option>
                                            <option value="2">Quitado</option>
                                            <option value="3">Financiado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">É Doador</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputDoador" name="inputDoador" />
                                        <select class="form-control form-control-sm" id="selectDoador" name="selectDoador" multiple size="2">
                                            <option value="1">Sangue</option>
                                            <option value="2">Órgãos</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Tipo Sanguíneo</label>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control form-control-sm" id="inputTipoSanguineo" name="inputTipoSanguineo">
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Religião *</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputReligiao" name="inputReligiao" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Vaga Interesse *</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputVagaInteresse" name="inputVagaInteresse" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Como Soube da Vaga? *</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputComoSoubeVaga" name="inputComoSoubeVaga" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Já Participou de Processos Seletivos (entrevistas) na Alta Performance? *</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputParticipouProcessosSeletivosAp" name="inputParticipouProcessosSeletivosAp" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Data</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control form-control-sm" id="inputDataProcessosSeletivosAp" name="inputDataProcessosSeletivosAp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Para qual vaga?</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputParaQualVaga" name="inputParaQualVaga">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Realizou Testes Psicológicos na Alta Performance? *</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputTestesPsicologicosAp" name="inputTestesPsicologicosAp" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Já Participou de Outros Processos Seletivos (entrevistas e testes)? *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputParticipouOutrosProcessosSeletivos" name="inputParticipouOutrosProcessosSeletivos" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Para Quais Empresas</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="inputParaQuaisEmpresas" name="inputParaQuaisEmpresas">
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button id="botao_salvar" type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--PAINEL DISPONIBILIDADE-->
                        <div class="tab-pane p-20" id="disponibilidade" role="tabpanel">
                            <form id="form_disponibilidade" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhCandidatosDisponibilidade" name="inputIdRhCandidatosDisponibilidade" value="" />
                                <input type="hidden" id="inputIdRhCandidatosAbaDisponibilidade" name="inputIdRhCandidatosAbaDisponibilidade" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label col-form-label-sm text-right">Tem Disponibilidade para Viajar Caso Necessário *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-sm" id="inputViagens" name="inputViagens" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label col-form-label-sm text-right">Tem Disponibilidade para Trabalhar aos Sábados *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-sm" id="inputTrabalharSabados" name="inputTrabalharSabados" required>
                                            <option value="1">Não</option>
                                            <option value="2">Esporadicamente</option>
                                            <option value="3">Sempre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label col-form-label-sm text-right">Tem Disponibilidade para Fazer Horas Extras *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-sm" id="inputHorasExtras" name="inputHorasExtras" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label col-form-label-sm text-right">Tem Disponibilidade/Interesse em Participar de Cursos e se Aperfeiçoar Caso Necessário *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-sm" id="inputCursos" name="inputCursos" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label col-form-label-sm text-right">Tem Disponibilidade para Mudar de Cidade Caso Necessário *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-sm" id="inputMudarCidade" name="inputMudarCidade" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--PAINEL CARACTERÍSTICAS FISICAS-->
                        <div class="tab-pane p-20" id="caracteristicas_fisicas" role="tabpanel">
                            <form id="form_caracteristicas_fisicas" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhCandidatosCaracteristicasFisicas" name="inputIdRhCandidatosCaracteristicasFisicas" value="" />
                                <input type="hidden" id="inputIdRhCandidatosAbaCaracteristicasFisicas" name="inputIdRhCandidatosAbaCaracteristicasFisicas" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Altura *</label>
                                    <div class="col-sm-3">
                                        <input type="tel" class="form-control form-control-sm" id="inputAltura" name="inputAltura" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Peso *</label>
                                    <div class="col-sm-3">
                                        <input type="tel" class="form-control form-control-sm" id="inputPeso" name="inputPeso" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Possui Alguma Limitação Física? *</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputPossuiAlgumaLimitacao" name="inputPossuiAlgumaLimitacao" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Qual</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputQualLimitacao" name="inputQualLimitacao">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Possui Barba? *</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputPossuiBarba" name="inputPossuiBarba" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-4 col-form-label col-form-label-sm text-right">Estaria Disposto a Retirar a Barba Caso Necessário?</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputDispostoTirarBarba" name="inputDispostoTirarBarba">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Unhas *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputUnhas" name="inputUnhas" required>
                                            <option value="1">Longas</option>
                                            <option value="2">Curtas</option>
                                            <option value="3">Esmaltadas</option>
                                            <option value="4">Sem Esmaltação</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Cabelo *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputCabelo" name="inputCabelo" required>
                                            <option value="1">Longo</option>
                                            <option value="2">Curto</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Prefere Manter *</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputPrefereManter" name="inputPrefereManter" required>
                                            <option value="1">Preso</option>
                                            <option value="2">Solto</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Mantém Algum Outro Hábito ou Preferência de Cuidados Restritivos *</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputHabitosCuidadosRestritivos" name="inputHabitosCuidadosRestritivos" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Qual</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputQualHabito" name="inputQualHabito">
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--PAINEL DADOS FAMILIARES-->
                        <div class="tab-pane p-20" id="dados_familiares" role="tabpanel">
                            <form id="form_dados_familiares" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhCandidatosDadosFamiliares" name="inputIdRhCandidatosDadosFamiliares" value="" />
                                <input type="hidden" id="inputIdRhCandidatosAbaDadosFamiliares" name="inputIdRhCandidatosAbaDadosFamiliares" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome da Mãe *</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeMae" name="inputNomeMae" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Idade da Mãe *</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control form-control-sm" id="inputIdadeMae" name="inputIdadeMae" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Atividades Atuais da Mãe *</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="inputAtividadesAtuaisMae" name="inputAtividadesAtuaisMae" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Saúde da Mãe *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputSaudeMae" name="inputSaudeMae" required>
                                            <option value="1">Está bem de saúde</option>
                                            <option value="2">Problemas de Saúde</option>
                                            <option value="3">Já Falecido</option>
                                            <option value="4">Não Conhece</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome do Pai *</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputNomePai" name="inputNomePai" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Idade do Pai *</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control form-control-sm" id="inputIdadePai" name="inputIdadePai" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Atividades Atuais do Pai *</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="inputAtividadesAtuaisPai" name="inputAtividadesAtuaisPai" required>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Saúde do Pai *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputSaudePai" name="inputSaudePai" required>
                                            <option value="1">Está bem de saúde</option>
                                            <option value="2">Problemas de Saúde</option>
                                            <option value="3">Já Falecido</option>
                                            <option value="4">Não Conhece</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Estado Civil *</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputEstadoCivil" name="inputEstadoCivil" required>
                                            <option value="1">Casado(a)</option>
                                            <option value="2">Solteiro(a)</option>
                                            <option value="3">Amasiado(a)</option>
                                            <option value="4">Divorciado(a)</option>
                                            <option value="5">Viúvo(a)</option>
                                            <option value="6">Noivo(a)</option>
                                            <option value="7">Namorando</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Quanto Tempo de Relacionamento</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputQuantoTempoRelacionamento" name="inputQuantoTempoRelacionamento">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome do Cônjuge</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeConjuge" name="inputNomeConjuge">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Idade do Cônjuge</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control form-control-sm" id="inputIdadeConjuge" name="inputIdadeConjuge">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Atividades Atuais do Cônjuge</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputAtividadesAtuaisConjuge" name="inputAtividadesAtuaisConjuge">
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Saúde do Cônjuge</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputSaudeConjuge" name="inputSaudeConjuge">
                                            <option value="1">Está bem de saúde</option>
                                            <option value="2">Problemas de Saúde</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Quais</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputProblemasSaudeConjuge" name="inputProblemasSaudeConjuge">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Tem Filhos *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputTemFilhos" name="inputTemFilhos" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Quantos</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control form-control-sm" id="inputQuantosFilhos" name="inputQuantosFilhos">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Idades dos Filhos</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputIdadesFilhos" name="inputIdadesFilhos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Saúde dos Filhos</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputSaudeFilhos" name="inputSaudeFilhos">
                                            <option value="1">Estão bem de saúde</option>
                                            <option value="2">Problemas de Saúde</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Quais</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputProblemasSaudeFilhos" name="inputProblemasSaudeFilhos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Quem Cuida de Seus Filhos Enquanto Você Trabalha?</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputQuemCuidaFilhos" name="inputQuemCuidaFilhos">
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--PAINEL FORMAÇÃO/CURSOS-->
                        <div class="tab-pane p-20" id="formacao_cursos" role="tabpanel">
                            <form id="form_formacao_cursos" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhCandidatosFormacaoCursos" name="inputIdRhCandidatosFormacaoCursos" value="" />
                                <input type="hidden" id="inputIdRhCandidatosAbaFormacaoCursos" name="inputIdRhCandidatosAbaFormacaoCursos" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Escolaridade *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputEscolaridade" name="inputEscolaridade" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Profissão *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputProfissao" name="inputProfissao" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Formação e Cursos Complementares</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputFormacaoCursosComplementares" id="inputFormacaoCursosComplementares" class="form-control form-control-sm" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Possui Curso ou Conhecimento em</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputCursoConhecimento" name="inputCursoConhecimento">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Informática</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputInformatica" name="inputInformatica" />
                                        <select class="form-control form-control-sm" id="selectInformatica" name="selectInformatica" multiple size="4">
                                            <option value="1">Word</option>
                                            <option value="2">Excel</option>
                                            <option value="3">Power Point</option>
                                            <option value="4">Software</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Excel</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputExcel" name="inputExcel">
                                            <option value="1">Básico</option>
                                            <option value="2">Avançado</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Experiência na Elaboração de Planilhas</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputExperienciaElaboracaoPlanilhas" name="inputExperienciaElaboracaoPlanilhas">
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Inglês</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputIngles" name="inputIngles" />
                                        <select class="form-control form-control-sm" id="selectIngles" name="selectIngles" multiple size="2">
                                            <option value="1">Curso</option>
                                            <option value="2">Fluência</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Espanhol</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputEspanhol" name="inputEspanhol" />
                                        <select class="form-control form-control-sm" id="selectEspanhol" name="selectEspanhol" multiple size="2">
                                            <option value="1">Curso</option>
                                            <option value="2">Fluência</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Outros</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputOutros" name="inputOutros">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Tem Experiência</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputTemExperiencia" name="inputTemExperiencia" />
                                        <select class="form-control form-control-sm" id="selectTemExperiencia" name="selectTemExperiencia" multiple size="3">
                                            <option value="1">Operacional</option>
                                            <option value="2">Administrativo</option>
                                            <option value="3">Gerencial</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                    <label class="col-sm-4 col-form-label col-form-label-sm text-right">Possui Hábito de Leitura</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputPossuiHabitoLeitura" name="inputPossuiHabitoLeitura">
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome do Último Livro Lido</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeUltimoLivro" name="inputNomeUltimoLivro">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Data de Conclusão da Leitura</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control form-control-sm" id="inputDataConclusaoLeitura" name="inputDataConclusaoLeitura">
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--PAINEL SAÚDE FÍSICA E EMOCIONAL-->
                        <div class="tab-pane p-20" id="saude_fisica_emocional" role="tabpanel">
                            <form id="form_saude_fisica_emocional" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhCandidatosSaudeFisicaEmocional" name="inputIdRhCandidatosSaudeFisicaEmocional" value="" />
                                <input type="hidden" id="inputIdRhCandidatosAbaSaudeFisicaEmocional" name="inputIdRhCandidatosAbaSaudeFisicaEmocional" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Encontra-se com Algum Desses Problemas</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputDoencas" name="inputDoencas" />
                                        <select class="form-control form-control-sm" id="selectDoencas" name="selectDoencas" multiple size="8">
                                            <option value="1">Diabetes</option>
                                            <option value="2">Colesterol</option>
                                            <option value="3">Pressão Alta</option>
                                            <option value="4">Tireoide</option>
                                            <option value="5">Dores de Cabeça</option>
                                            <option value="6">Problemas na visão</option>
                                            <option value="7">Dores musculares</option>
                                            <option value="8">Problemas na coluna</option>
                                            <option value="9">Problemas cardíacos</option>
                                            <option value="10">Problemas neurológicos</option>
                                            <option value="11">Convulsão</option>
                                            <option value="12">Desmaios</option>
                                            <option value="13">Problemas auditivos</option>
                                            <option value="14">Insônia</option>
                                            <option value="15">Apneia do sono</option>
                                            <option value="16">Tontura</option>
                                            <option value="17">Dependência química</option>
                                            <option value="18">Gastrite</option>
                                            <option value="19">Úlcera</option>
                                            <option value="20">Obesidade</option>
                                            <option value="21">DST</option>
                                            <option value="22">Sífilis</option>
                                            <option value="23">HIV</option>
                                            <option value="24">Infecções Urinarias</option>
                                            <option value="25">Outras infecções</option>
                                            <option value="26">Problema renais</option>
                                            <option value="27">Hepatites</option>
                                            <option value="28">Problemas respiratórios</option>
                                            <option value="29">Problemas no fígado</option>
                                            <option value="30">Deficiência física</option>
                                            <option value="31">Depressão</option>
                                            <option value="32">Bipolaridade</option>
                                            <option value="33">Síndrome do pânico</option>
                                            <option value="34">Ansiedade</option>
                                            <option value="35">Estresse crônico</option>
                                            <option value="36">TOC</option>
                                            <option value="37">Bulimia</option>
                                            <option value="38">Anorexia</option>
                                            <option value="39">Esquizofrenia</option>
                                            <option value="40">Hiperatividade</option>
                                            <option value="41">Déficit de atenção</option>
                                            <option value="42">Compulsão alimentar</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label col-form-label-sm text-right">Fumante</label>
                                            <div class="col-sm-3">
                                                <select class="form-control form-control-sm" id="inputFumante" name="inputFumante">
                                                    <option value="1">Sim</option>
                                                    <option value="2">Não</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right">Fumante a Quanto Tempo</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-sm" name="inputFumanteQuantoTempo" id="inputFumanteQuantoTempo">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label col-form-label-sm text-right">Parou de Fumar</label>
                                            <div class="col-sm-2">
                                                <select class="form-control form-control-sm" id="inputParouFumar" name="inputParouFumar">
                                                    <option value="1">Sim</option>
                                                    <option value="2">Não</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right">Há Quanto Tempo</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-sm" name="inputQuantoTempoParou" id="inputQuantoTempoParou">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right">Toma Algum Medicamento</label>
                                            <div class="col-sm-2">
                                                <select class="form-control form-control-sm" id="inputTomaAlgumMedicamento" name="inputTomaAlgumMedicamento">
                                                    <option value="1">Sim</option>
                                                    <option value="2">Não</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-2 col-form-label col-form-label-sm text-right">Qual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" name="inputQualMedicamento" id="inputQualMedicamento">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right">Dorme Bem à Noite</label>
                                            <div class="col-sm-2">
                                                <select class="form-control form-control-sm" id="inputDormeBemNoite" name="inputDormeBemNoite">
                                                    <option value="1">Sim</option>
                                                    <option value="2">Não</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-2 col-form-label col-form-label-sm text-right">Justifique</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" name="inputJustifiqueDormeBemNoite" id="inputJustifiqueDormeBemNoite">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right">Dormiu Bem a Noite Passada</label>
                                            <div class="col-sm-2">
                                                <select class="form-control form-control-sm" id="inputDormiuBemNoitePassada" name="inputDormiuBemNoitePassada">
                                                    <option value="1">Sim</option>
                                                    <option value="2">Não</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-2 col-form-label col-form-label-sm text-right">Justifique</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" name="inputJustifiqueDormiuBemNoitePassada" id="inputJustifiqueDormiuBemNoitePassada">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Usa Óculos</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputUsaOculos" name="inputUsaOculos">
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Esta Usando Agora</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputEstaUsandoAgora" name="inputEstaUsandoAgora">
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Lentes</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputLentes" name="inputLentes" />
                                        <select class="form-control form-control-sm" id="selectLentes" name="selectLentes" multiple size="2">
                                            <option value="1">Perto</option>
                                            <option value="2">Longe</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Pratica Exercícios Físicos</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputPraticaExerciciosFisicos" name="inputPraticaExerciciosFisicos">
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Quais Exercícios</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputQuaisExercicios" name="inputQuaisExercicios">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Consome Bebidas Alcoólicas</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputConsomeBebidasAlcoolicas" name="inputConsomeBebidasAlcoolicas">
                                            <option value="1">Não</option>
                                            <option value="2">Raramente</option>
                                            <option value="3">Socialmente</option>
                                            <option value="4">Com Frequência</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Usa ou já Usou Algum Tipo de Droga Ilícita</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputUsaUsouDrogaIlicita" name="inputUsaUsouDrogaIlicita">
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Qual</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputQualDrogaIlicita" name="inputQualDrogaIlicita">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Envolveu-se em Acidente de Trânsito</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputEnvolveuAcidenteTransito" name="inputEnvolveuAcidenteTransito">
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Danos Acidente</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" id="inputDanosAcidente" name="inputDanosAcidente" />
                                        <select class="form-control form-control-sm" id="selectDanosAcidente" name="selectDanosAcidente" multiple size="3">
                                            <option value="1">Danos Materiais</option>
                                            <option value="2">Feridos</option>
                                            <option value="3">Vítimas Fatais</option>
                                        </select>
                                        <small class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Quanto Tempo Faz</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputQuantoTempoFaz" name="inputQuantoTempoFaz">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Você foi Responsável pelo Acidente</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputVoceFoiResponsavelAcidente" name="inputVoceFoiResponsavelAcidente">
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Justifique</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputJustifique" name="inputJustifique">
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--PAINEL CARACTERISTICAS PROFISSIONAIS-->
                        <div class="tab-pane p-20" id="caracteristicas_profissionais" role="tabpanel">
                            <form id="form_caracteristicas_profissionais" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhCandidatosCaracteristicasProfissionais" name="inputIdRhCandidatosCaracteristicasProfissionais" value="" />
                                <input type="hidden" id="inputIdRhCandidatosAbaCaracteristicasProfissionais" name="inputIdRhCandidatosAbaCaracteristicasProfissionais" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome da Empresa (Última ou Atual)</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeEmpresa1" name="inputNomeEmpresa1">
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Tempo</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputTempoEmpresa1" name="inputTempoEmpresa1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Cargo</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputCargoEmpresa1" name="inputCargoEmpresa1">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Atividades</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="inputAtividadesEmpresa1" name="inputAtividadesEmpresa1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Período</label>
                                    <div class="col-sm-4">
                                        <div class="input-group input-group-sm">
                                            <input type="date" class="form-control form-control-sm" id="inputDataInicioEmpresa1" name="inputDataInicioEmpresa1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">até</span>
                                            </div>
                                            <input type="date" class="form-control form-control-sm" id="inputDataSaidaEmpresa1" name="inputDataSaidaEmpresa1">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Motivo da Saída</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputMotivoSaidaEmpresa1" name="inputMotivoSaidaEmpresa1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Último Salário</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputUltimoSalarioEmpresa1" name="inputUltimoSalarioEmpresa1">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome do Responsável Direto</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeResponsavelDiretoEmpresa1" name="inputNomeResponsavelDiretoEmpresa1">
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome da Empresa</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeEmpresa2" name="inputNomeEmpresa2">
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Tempo</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputTempoEmpresa2" name="inputTempoEmpresa2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Cargo</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputCargoEmpresa2" name="inputCargoEmpresa2">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Atividades</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="inputAtividadesEmpresa2" name="inputAtividadesEmpresa2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Período</label>
                                    <div class="col-sm-4">
                                        <div class="input-group input-group-sm">
                                            <input type="date" class="form-control form-control-sm" id="inputDataInicioEmpresa2" name="inputDataInicioEmpresa2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">até</span>
                                            </div>
                                            <input type="date" class="form-control form-control-sm" id="inputDataSaidaEmpresa2" name="inputDataSaidaEmpresa2">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Motivo da Saída</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputMotivoSaidaEmpresa2" name="inputMotivoSaidaEmpresa2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Último Salário</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputUltimoSalarioEmpresa2" name="inputUltimoSalarioEmpresa2">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome do Responsável Direto</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeResponsavelDiretoEmpresa2" name="inputNomeResponsavelDiretoEmpresa2">
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome da Empresa</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeEmpresa3" name="inputNomeEmpresa3">
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Tempo</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputTempoEmpresa3" name="inputTempoEmpresa3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Cargo</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputCargoEmpresa3" name="inputCargoEmpresa3">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Atividades</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="inputAtividadesEmpresa3" name="inputAtividadesEmpresa3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Período</label>
                                    <div class="col-sm-4">
                                        <div class="input-group input-group-sm">
                                            <input type="date" class="form-control form-control-sm" id="inputDataInicioEmpresa3" name="inputDataInicioEmpresa3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">até</span>
                                            </div>
                                            <input type="date" class="form-control form-control-sm" id="inputDataSaidaEmpresa3" name="inputDataSaidaEmpresa3">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Motivo da Saída</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputMotivoSaidaEmpresa3" name="inputMotivoSaidaEmpresa3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Último Salário</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputUltimoSalarioEmpresa3" name="inputUltimoSalarioEmpresa3">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome do Responsável Direto</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeResponsavelDiretoEmpresa3" name="inputNomeResponsavelDiretoEmpresa3">
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome da Empresa</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeEmpresa4" name="inputNomeEmpresa4">
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Tempo</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputTempoEmpresa4" name="inputTempoEmpresa4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Cargo</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputCargoEmpresa4" name="inputCargoEmpresa4">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Atividades</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="inputAtividadesEmpresa4" name="inputAtividadesEmpresa4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Período</label>
                                    <div class="col-sm-4">
                                        <div class="input-group input-group-sm">
                                            <input type="date" class="form-control form-control-sm" id="inputDataInicioEmpresa4" name="inputDataInicioEmpresa4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">até</span>
                                            </div>
                                            <input type="date" class="form-control form-control-sm" id="inputDataSaidaEmpresa4" name="inputDataSaidaEmpresa4">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Motivo da Saída</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputMotivoSaidaEmpresa4" name="inputMotivoSaidaEmpresa4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Último Salário</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputUltimoSalarioEmpresa4" name="inputUltimoSalarioEmpresa4">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Nome do Responsável Direto</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputNomeResponsavelDiretoEmpresa4" name="inputNomeResponsavelDiretoEmpresa4">
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Descreva experiências complementares, atividades ou formações em sua trajetória de vida pessoal e profissional *</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="inputExperienciasComplementares" name="inputExperienciasComplementares" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Objetivos à Curto Prazo *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputObjetivosCurtoPrazo" name="inputObjetivosCurtoPrazo" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Objetivos à Médio Prazo *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputObjetivosMedioPrazo" name="inputObjetivosMedioPrazo" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Objetivos à Longo Prazo *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputObjetivosLongoPrazo" name="inputObjetivosLongoPrazo" required>
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!--PAINEL SITUAÇÕES, PENDÊNCIAS LEGAIS E INFORMAÇÕES-->
                        <div class="tab-pane p-20" id="situacoes_informacoes" role="tabpanel">
                            <form id="form_situacoes_informacoes" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhCandidatosSituacoesInformacoes" name="inputIdRhCandidatosSituacoesInformacoes" value="" />
                                <input type="hidden" id="inputIdRhCandidatosAbaSituacoesInformacoes" name="inputIdRhCandidatosAbaSituacoesInformacoes" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Já Teve Problemas com a Justiça</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputProblemasJustica" name="inputProblemasJustica" required>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-4 col-form-label col-form-label-sm text-right">Quanto Tempo Faz</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputQuantoTempoFaz" name="inputQuantoTempoFaz">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Que Tipo de Situação Ocorreu</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="inputTipoSituacaoOcorreu" name="inputTipoSituacaoOcorreu" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Principais Preocupações no Momento</label>
                                    <div class="col-sm-3">
                                        <input type="hidden" id="inputPreocupacoesMomento" name="inputPreocupacoesMomento" />
                                        <select class="form-control form-control-sm" id="selectPreocupacoesMomento" name="selectPreocupacoesMomento" multiple size="4">
                                            <option value="1">Problemas Familiares</option>
                                            <option value="2">Problemas Financeiros</option>
                                            <option value="3">Problemas de Saúde</option>
                                            <option value="4">Problemas Profissionais</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Como Está se Sentindo no Momento</label>
                                    <div class="col-sm-3">
                                        <input type="hidden" id="inputComoEstaSentindoMomento" name="inputComoEstaSentindoMomento" />
                                        <select class="form-control form-control-sm" id="selectComoEstaSentindoMomento" name="selectComoEstaSentindoMomento" multiple size="4">
                                            <option value="1">Bem</option>
                                            <option value="2">Tranquilo</option>
                                            <option value="3">Alegre</option>
                                            <option value="4">Motivado</option>
                                            <option value="5">Cansado</option>
                                            <option value="6">Com sono</option>
                                            <option value="7">Triste</option>
                                            <option value="8">Desmotivado </option>
                                            <option value="9">Nervoso</option>
                                            <option value="10">Com Raiva</option>
                                            <option value="11">Ansioso</option>
                                            <option value="12">Baixa Energia</option>
                                            <option value="13">Com Dor</option>
                                            <option value="14">Indeciso</option>
                                            <option value="15">Preocupado</option>
                                            <option value="16">Com Fome </option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Pressione e segure o Ctrl para marcar mais de uma opção</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Sua Principal Característica (Qualidade)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputPrincipalCaracteristica" name="inputPrincipalCaracteristica">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Sua Principal Limitação (Ponto a Melhorar)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputPrincipalLimitacao" name="inputPrincipalLimitacao">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Qual foi a Situação mais Difícil que Enfrentou em Sua Vida</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputSituacaoMaisDificilVida" name="inputSituacaoMaisDificilVida">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Referências Profissionais</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputReferenciasProfissionais" name="inputReferenciasProfissionais">
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Referências Pessoais</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputReferenciasPessoais" name="inputReferenciasPessoais">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Porque a Empresa Deve Escolher Você e Qual a sua Motivação em Fazer Parte Dessa Empresa?</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputEmpresaDeveEscolherVoce" name="inputEmpresaDeveEscolherVoce">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Qual é a sua Pretensão de Salário?</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputPretencaoSalario" name="inputPretencaoSalario">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Disponibilidade de Horário Fixo e Para Horas Extras?</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputDisponibilidadeHorario" name="inputDisponibilidadeHorario">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Informações Adicionais</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="inputInformacoesAdicionais" name="inputInformacoesAdicionais" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Redação</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="inputRedacao" name="inputRedacao" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
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

<script src="<?php echo URL ?>wdadmin/scripts/rh-candidatos-cadastro.js"></script>