<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Cadastro de Vagas de RH</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/inicio">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/rh-vagas">Vagas de RH</a></li>
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
                            <a class="btn btn-info btn-sm" href="<?php echo URL ?>wdadmin/rh-vagas/cadastro">
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
                            <form id="form_rh_vagas" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdRhVagas" name="inputIdRhVagas" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Cliente *</label>
                                    <div class="col-sm-2">
                                        <select class="form-control form-control-sm" id="inputIdClientes" name="inputIdClientes" required></select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Data Recebimento *</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control form-control-sm" id="inputDataRecebimento" name="inputDataRecebimento" required />
                                    </div>
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-right">Status *</label>
                                    <div class="col-sm-1">
                                        <select class="form-control form-control-sm" id="inputStatus" name="inputStatus" required>
                                            <option value="1">Aberta</option>
                                            <option value="2">Preenchida</option>
                                            <option value="3">Cancelada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Data Entrevista *</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control form-control-sm" id="inputDataEntrevista" name="inputDataEntrevista" required />
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Data Iniciar *</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control form-control-sm" id="inputDataIniciar" name="inputDataIniciar" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Escolaridade</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputEscolaridade" name="inputEscolaridade" placeholder="ex.: Médio Completo" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Tempo de Experiência na Função</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputTempoExperiencia" name="inputTempoExperiencia" placeholder="ex.: 1 ano" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Idioma(s)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputIdiomas" name="inputIdiomas" placeholder="ex.: Português, Inglês" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Informática</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputInformatica" name="inputInformatica" placeholder="ex.: Básica" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Habilitação</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputHabilitacao" name="inputHabilitacao" placeholder="ex.: A, B" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Disponibilidade para Viagens</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputDisponibilidadeViagens" name="inputDisponibilidadeViagens" placeholder="ex.: Apenas Região" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Departamento/Área Atuação *</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputDepartamento" name="inputDepartamento" placeholder="ex.: Qualidade" required />
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Cargo *</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputCargo" name="inputCargo" placeholder="ex.: Auxiliar de controle de qualidade" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Superior Imediato</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputSuperiorImediato" name="inputSuperiorImediato" placeholder="ex.: João Silva" />
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Cargo</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputCargoSuperior" name="inputCargoSuperior" placeholder="ex.: Supervisor de qualidade" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Período</label>
                                    <div class="col-sm-3">
                                        <input type="hidden" id="inputPeriodo" name="inputPeriodo" />
                                        <select class="form-control form-control-sm" id="selectPeriodo" name="selectPeriodo" multiple size="3">
                                            <option value="1">Manhã</option>
                                            <option value="2">Tarde</option>
                                            <option value="3">Noite</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Dias da Semana</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputDiasSemana" name="inputDiasSemana" placeholder="ex.: Segunda a Sexta" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Horário de Trabalho</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputHorarioTrabalho" name="inputHorarioTrabalho" placeholder="ex.: 08:00 às 12:00 e 13:30 às 17:30" />
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Sexo</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputSexo" name="inputSexo">
                                            <option value="1">Feminino</option>
                                            <option value="2">Masculino</option>
                                            <option value="3">Ambos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Remuneração Proposta</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="inputRemuneracao" name="inputRemuneracao" placeholder="ex.: R$ 1.000,00" />
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Bônus</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-sm" id="inputBonus" name="inputBonus" placeholder="ex.: Comissão de 10%" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Transporte</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputTransporte" name="inputTransporte">
                                            <option value="2">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Assist. Médica</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputAssistenciaMedica" name="inputAssistenciaMedica">
                                            <option value="2">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Alimentação no Local</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputAlimentacaoLocal" name="inputAlimentacaoLocal">
                                            <option value="2">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Assist. Odontológica</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputAssistenciaOdontologica" name="inputAssistenciaOdontologica">
                                            <option value="2">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">VR (Vale Refeição)</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" id="inputValeRefeicao" name="inputValeRefeicao">
                                            <option value="2">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-right">Outros Benefícios</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="inputOutrosBeneficios" name="inputOutrosBeneficios" placeholder="ex.: Vale Gás" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Conhecimentos (Conhecimento técnico, cursos, formação. É o saber)</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputConhecimentos" id="inputConhecimentos" class="form-control form-control-sm" rows="5" placeholder="Ensino médio completo, saber ler, escrever e ter uma boa comunicação."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Habilidades (É a prática do conhecimento. É o saber fazer)</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputHabilidades" id="inputHabilidades" class="form-control form-control-sm" rows="5" placeholder="Conhecimento em programas de qualidade (5S, BPF, APPCC, PDCA, ISO 9001, ISO 22000)."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Atitudes Esperadas (É o conjunto de comportamentos que potencializam o conhecimento e as habilidades. É o querer fazer)</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputAtitudesEsperadas" id="inputAtitudesEsperadas" class="form-control form-control-sm" rows="5" placeholder="Organização, trabalho em equipe, agilidade, pulso firme e responsabilidade."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Principais Atividades/Responsabilidades:</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputPrincipaisAtividades" id="inputPrincipaisAtividades" class="form-control form-control-sm" rows="5" placeholder="Assegurar a qualidade dos produtos fabricados, através das inspeções, monitoramentos de produtos e processos."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Observações</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputObservacoes" id="inputObservacoes" class="form-control form-control-sm" rows="5" placeholder="Informe aqui uma Observação sobre a vaga..."></textarea>
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

<script src="<?php echo URL ?>wdadmin/scripts/rh-vagas-cadastro.js"></script>