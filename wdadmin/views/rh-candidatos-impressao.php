<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Cadastro de Candidatos de RH</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/inicio">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/rh-candidatos">Candidatos de RH</a></li>
            <li class="breadcrumb-item active">Impressão</li>
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
                            <a class="nav-link active" data-toggle="tab" href="#impressao" role="tab">
                                <span class="hidden-sm-up"><i class="far fa-eye" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="far fa-eye" aria-hidden="true"></i>&nbsp;Visualização</span>
                            </a>
                        </li>
                        <li class="botao_novo">
                            <button id="botao_imprimir" class="btn btn-info btn-sm">
                                <span class="hidden-sm-up"><i class="fas fa-print" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-print" aria-hidden="true"></i>&nbsp;Imprimir</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">

                    <!--PAINEL IMPRESSAO-->
                    <div class="tab-pane p-20 active" id="impressao" role="tabpanel">
                        <input type="hidden" id="inputIdRhCandidatos" name="inputIdRhCandidatos" value="<?php echo $id ?>" />

                        <div class="row">
                            <div class="col-sm-6">
                                <img id="imgLogoPrincipalAtual" src="" class="img-fluid" />
                            </div>
                            <div class="col-sm-6 text-right">
                                <strong>Ficha de Candidato</strong>
                            </div>
                        </div>

                        <br/>

                        <table class="table table-striped table-condensed table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><h3 class="text-center">Dados Pessoais</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Nome:</strong>
                                                <span id="inputNomeCompleto"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>E-mail:</strong>
                                                <span id="inputEmail" name="inputEmail"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <strong>Celular/Whats:</strong>
                                                <span id="inputCelularWhats" name="inputCelularWhats"></span>
                                            </div>
                                            <div class="col-sm-7">
                                                <strong>Telefone para Recados:</strong>
                                                <span id="inputTelefoneRecados" name="inputTelefoneRecados"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Naturalidade (Cidade):</strong>
                                                <span id="inputNaturalidade" name="inputNaturalidade"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Nacionalidade (País):</strong>
                                                <span id="inputNacionalidade" name="inputNacionalidade"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <strong>Data de Nascimento:</strong>
                                                <span id="inputDataNascimento" name="inputDataNascimento"></span>
                                            </div>
                                            <div class="col-sm-2">
                                                <strong>Idade:</strong>
                                                <span id="inputIdade" name="inputIdade"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Sexo:</strong>
                                                <span id="inputSexo" name="inputSexo"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Nº CNH:</strong>
                                                <span id="inputCnh" name="inputCnh"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Categoria:</strong>
                                                <span id="inputCnhCategoria" name="inputCnhCategoria"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Validade:</strong>
                                                <span id="inputCnhValidade" name="inputCnhValidade"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>RG:</strong>
                                                <span id="inputRG" name="inputRG"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>CPF:</strong>
                                                <span id="inputCPF" name="inputCPF"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>PIS (Nº CTPS):</strong>
                                                <span id="inputPis" name="inputPis"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Endereço (Rua):</strong>
                                                <span id="inputEndereco" name="inputEndereco"></span>
                                            </div>
                                            <div class="col-sm-2">
                                                <strong>Nº:</strong>
                                                <span id="inputNumero" name="inputNumero"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Bairro:</strong>
                                                <span id="inputBairro" name="inputBairro"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Cidade:</strong>
                                                <span id="inputCidade" name="inputCidade"></span>
                                            </div>
                                            <div class="col-sm-8">
                                                <strong>Faz quanto tempo que mora nesta cidade?</strong>
                                                <span id="inputQuantoTempoMoraCidade" name="inputQuantoTempoMoraCidade"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Você mora com quem:</strong>
                                                <span id="inputMoraComQuem" name="inputMoraComQuem"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Imóvel:</strong>
                                                <span id="inputImovel" name="inputImovel"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Possui Veículo:</strong>
                                                <span id="inputPossuiVeiculo" name="inputPossuiVeiculo"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>É Doador:</strong>
                                                <span id="inputDoador" name="inputDoador" multiple size="2">
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Tipo Sanguíneo:</strong>
                                                <span id="inputTipoSanguineo" name="inputTipoSanguineo"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Religião:</strong>
                                                <span id="inputReligiao" name="inputReligiao"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Vaga Interesse:</strong>
                                                <span id="inputVagaInteresse" name="inputVagaInteresse"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Como Soube da Vaga?</strong>
                                                <span id="inputComoSoubeVaga" name="inputComoSoubeVaga"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <strong>Já Participou de Processos Seletivos (entrevistas) na Alta Performance?</strong>
                                                <span id="inputParticipouProcessosSeletivosAp" name="inputParticipouProcessosSeletivosAp"></span>
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>Data</strong>
                                                <span id="inputDataProcessosSeletivosAp" name="inputDataProcessosSeletivosAp">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Para qual vaga?</strong>
                                                <span id="inputParaQualVaga" name="inputParaQualVaga">
                                            </div>
                                            <div class="col-sm-8">
                                                <strong>Realizou Testes Psicológicos na Alta Performance?</strong>
                                                <span id="inputTestesPsicologicosAp" name="inputTestesPsicologicosAp"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <strong>Já Participou de Outros Processos Seletivos (entrevistas e testes)?</strong>
                                                <span id="inputParticipouOutrosProcessosSeletivos" name="inputParticipouOutrosProcessosSeletivos"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Para Quais Empresas:</strong>
                                                <span id="inputParaQuaisEmpresas" name="inputParaQuaisEmpresas">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-condensed table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><h3 class="text-center">Disponibilidade</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Tem Disponibilidade para Viajar Caso Necessário:</strong>
                                                <span id="inputViagens" name="inputViagens"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Tem Disponibilidade para Trabalhar aos Sábados:</strong>
                                                <span id="inputTrabalharSabados" name="inputTrabalharSabados"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Tem Disponibilidade para Fazer Horas Extras:</strong>
                                                <span id="inputHorasExtras" name="inputHorasExtras"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Tem Disponibilidade/Interesse em Participar de Cursos e se Aperfeiçoar Caso Necessário:</strong>
                                                <span id="inputCursos" name="inputCursos"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Tem Disponibilidade para Mudar de Cidade Caso Necessário:</strong>
                                                <span id="inputMudarCidade" name="inputMudarCidade"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-condensed table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><h3 class="text-center">Características Físicas</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Altura:</strong>
                                                <span id="inputAltura" name="inputAltura"></span> m
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Peso:</strong>
                                                <span id="inputPeso" name="inputPeso"></span> kg
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Possui Alguma Limitação Física?</strong>
                                                <span id="inputPossuiAlgumaLimitacao" name="inputPossuiAlgumaLimitacao"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Qual:</strong>
                                                <span id="inputQualLimitacao" name="inputQualLimitacao"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <strong>Possui Barba?</strong>
                                                <span id="inputPossuiBarba" name="inputPossuiBarba"></span>
                                            </div>
                                            <div class="col-sm-9">
                                                <strong>Estaria Disposto a Retirar a Barba Caso Necessário?</strong>
                                                <span id="inputDispostoTirarBarba" name="inputDispostoTirarBarba"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Unhas:</strong>
                                                <span id="inputUnhas" name="inputUnhas"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Cabelo:</strong>
                                                <span id="inputCabelo" name="inputCabelo"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Prefere Manter:</strong>
                                                <span id="inputPrefereManter" name="inputPrefereManter"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Mantém Algum Outro Hábito ou Preferência de Cuidados Restritivos:</strong>
                                                <span id="inputHabitosCuidadosRestritivos" name="inputHabitosCuidadosRestritivos"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Qual:</strong>
                                                <span id="inputQualHabito" name="inputQualHabito"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-condensed table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><h3 class="text-center">Dados Familiares</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <strong>Nome da Mãe:</strong>
                                                <span id="inputNomeMae" name="inputNomeMae"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Idade da Mãe:</strong>
                                                <span id="inputIdadeMae" name="inputIdadeMae"></span> anos
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Atividades Atuais da Mãe:</strong>
                                                <span id="inputAtividadesAtuaisMae" name="inputAtividadesAtuaisMae"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Saúde da Mãe:</strong>
                                                <span id="inputSaudeMae" name="inputSaudeMae"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <strong>Nome do Pai:</strong>
                                                <span id="inputNomePai" name="inputNomePai"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Idade do Pai:</strong>
                                                <span id="inputIdadePai" name="inputIdadePai"></span> anos
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Atividades Atuais do Pai:</strong>
                                                <span id="inputAtividadesAtuaisPai" name="inputAtividadesAtuaisPai"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Saúde do Pai:</strong>
                                                <span id="inputSaudePai" name="inputSaudePai"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <strong>Estado Civil:</strong>
                                                <span id="inputEstadoCivil" name="inputEstadoCivil"></span>
                                            </div>
                                            <div class="col-sm-7">
                                                <strong>Quanto Tempo de Relacionamento:</strong>
                                                <span id="inputQuantoTempoRelacionamento" name="inputQuantoTempoRelacionamento"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <strong>Nome do Cônjuge:</strong>
                                                <span id="inputNomeConjuge" name="inputNomeConjuge">
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Idade do Cônjuge:</strong>
                                                <span id="inputIdadeConjuge" name="inputIdadeConjuge"></span> anos
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Atividades Atuais do Cônjuge:</strong>
                                                <span id="inputAtividadesAtuaisConjuge" name="inputAtividadesAtuaisConjuge"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Saúde do Cônjuge:</strong>
                                                <span id="inputSaudeConjuge" name="inputSaudeConjuge"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Quais:</strong>
                                                <span id="inputProblemasSaudeConjuge" name="inputProblemasSaudeConjuge"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Tem Filhos:</strong>
                                                <span id="inputTemFilhos" name="inputTemFilhos"></span>
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>Quantos:</strong>
                                                <span id="inputQuantosFilhos" name="inputQuantosFilhos"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Idades dos Filhos:</strong>
                                                <span id="inputIdadesFilhos" name="inputIdadesFilhos"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Saúde dos Filhos:</strong>
                                                <span id="inputSaudeFilhos" name="inputSaudeFilhos"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Quais:</strong>
                                                <span id="inputProblemasSaudeFilhos" name="inputProblemasSaudeFilhos"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Quem Cuida de Seus Filhos Enquanto Você Trabalha:</strong>
                                                <span id="inputQuemCuidaFilhos" name="inputQuemCuidaFilhos"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-condensed table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><h3 class="text-center">Formação/Cursos</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Escolaridade:</strong>
                                                <span id="inputEscolaridade" name="inputEscolaridade"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Profissão:</strong>
                                                <span id="inputProfissao" name="inputProfissao"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Formação e Cursos Complementares:</strong>
                                                <span id="inputFormacaoCursosComplementares" name="inputFormacaoCursosComplementares"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Possui Curso ou Conhecimento em:</strong>
                                                <span id="inputCursoConhecimento" name="inputCursoConhecimento"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <strong>Informática:</strong>
                                                <span id="inputInformatica" name="inputInformatica"></span>
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>Excel:</strong>
                                                <span id="inputExcel" name="inputExcel"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Experiência na Elaboração de Planilhas:</strong>
                                                <span id="inputExperienciaElaboracaoPlanilhas" name="inputExperienciaElaboracaoPlanilhas"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <strong>Inglês:</strong>
                                                <span id="inputIngles" name="inputIngles"></span>
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>Espanhol:</strong>
                                                <span id="inputEspanhol" name="inputEspanhol"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Outros:</strong>
                                                <span id="inputOutros" name="inputOutros"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Tem Experiência:</strong>
                                                <span id="inputTemExperiencia" name="inputTemExperiencia"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Possui Hábito de Leitura:</strong>
                                                <span id="inputPossuiHabitoLeitura" name="inputPossuiHabitoLeitura"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Nome do Último Livro Lido:</strong>
                                                <span id="inputNomeUltimoLivro" name="inputNomeUltimoLivro"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Data de Conclusão da Leitura:</strong>
                                                <span id="inputDataConclusaoLeitura" name="inputDataConclusaoLeitura"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-condensed table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><h3 class="text-center">Saúde Física/Emocional</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Encontra-se com Algum Desses Problemas:</strong>
                                                <span id="inputDoencas" name="inputDoencas"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <strong>Fumante:</strong>
                                                <span id="inputFumante" name="inputFumante"></span>
                                            </div>
                                            <div class="col-sm-7">
                                                <strong>Fumante a Quanto Tempo:</strong>
                                                <span id="inputFumanteQuantoTempo" name="inputFumanteQuantoTempo"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <strong>Parou de Fumar:</strong>
                                                <span id="inputParouFumar" name="inputParouFumar"></span>
                                            </div>
                                            <div class="col-sm-7">
                                                <strong>Há Quanto Tempo:</strong>
                                                <span id="inputQuantoTempoParou" name="inputQuantoTempoParou"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Toma Algum Medicamento:</strong>
                                                <span id="inputTomaAlgumMedicamento" name="inputTomaAlgumMedicamento"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Qual:</strong>
                                                <span id="inputQualMedicamento" name="inputQualMedicamento"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Dorme Bem à Noite:</strong>
                                                <span id="inputDormeBemNoite" name="inputDormeBemNoite"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Justifique:</strong>
                                                <span id="inputJustifiqueDormeBemNoite" name="inputJustifiqueDormeBemNoite"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Dormiu Bem a Noite Passada:</strong>
                                                <span id="inputDormiuBemNoitePassada" name="inputDormiuBemNoitePassada"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Justifique:</strong>
                                                <span id="inputJustifiqueDormiuBemNoitePassada" name="inputJustifiqueDormiuBemNoitePassada"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Usa Óculos:</strong>
                                                <span id="inputUsaOculos" name="inputUsaOculos"></span>
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>Esta Usando Agora:</strong>
                                                <span id="inputEstaUsandoAgora" name="inputEstaUsandoAgora"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Lentes:</strong>
                                                <span id="inputLentes" name="inputLentes"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Pratica Exercícios Físicos:</strong>
                                                <span id="inputPraticaExerciciosFisicos" name="inputPraticaExerciciosFisicos"></span>
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>Quais Exercícios:</strong>
                                                <span id="inputQuaisExercicios" name="inputQuaisExercicios"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Consome Bebidas Alcoólicas:</strong>
                                                <span id="inputConsomeBebidasAlcoolicas" name="inputConsomeBebidasAlcoolicas"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Usa ou já Usou Algum Tipo de Droga Ilícita:</strong>
                                                <span id="inputUsaUsouDrogaIlicita" name="inputUsaUsouDrogaIlicita"></span>
                                            </div>
                                            <div class="col-sm-8">
                                                <strong>Qual:</strong>
                                                <span id="inputQualDrogaIlicita" name="inputQualDrogaIlicita"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Envolveu-se em Acidente de Trânsito:</strong>
                                                <span id="inputEnvolveuAcidenteTransito" name="inputEnvolveuAcidenteTransito"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Danos Acidente:</strong>
                                                <span id="inputDanosAcidente" name="inputDanosAcidente"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <strong>Quanto Tempo Faz:</strong>
                                                <span id="inputQuantoTempoFaz" name="inputQuantoTempoFaz"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Você foi Responsável pelo Acidente:</strong>
                                                <span id="inputVoceFoiResponsavelAcidente" name="inputVoceFoiResponsavelAcidente"></span>
                                            </div>
                                            <div class="col-sm-8">
                                                <strong>Justifique:</strong>
                                                <span id="inputJustifique" name="inputJustifique"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-condensed table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><h3 class="text-center">Características Profissionais</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Nome da Empresa (Última ou Atual):</strong>
                                                <span id="inputNomeEmpresa1" name="inputNomeEmpresa1"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Tempo:</strong>
                                                <span id="inputTempoEmpresa1" name="inputTempoEmpresa1"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Cargo:</strong>
                                                <span id="inputCargoEmpresa1" name="inputCargoEmpresa1"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Atividades:</strong>
                                                <span id="inputAtividadesEmpresa1" name="inputAtividadesEmpresa1"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Período:</strong>
                                                <span id="inputPeriodoEmpresa1" name="inputPeriodoEmpresa1"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Motivo da Saída:</strong>
                                                <span id="inputMotivoSaidaEmpresa1" name="inputMotivoSaidaEmpresa1"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Último Salário:</strong>
                                                <span id="inputUltimoSalarioEmpresa1" name="inputUltimoSalarioEmpresa1"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Nome do Responsável Direto:</strong>
                                                <span id="inputNomeResponsavelDiretoEmpresa1" name="inputNomeResponsavelDiretoEmpresa1"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Nome da Empresa:</strong>
                                                <span id="inputNomeEmpresa2" name="inputNomeEmpresa2"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Tempo:</strong>
                                                <span id="inputTempoEmpresa2" name="inputTempoEmpresa2"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Cargo:</strong>
                                                <span id="inputCargoEmpresa2" name="inputCargoEmpresa2"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Atividades:</strong>
                                                <span id="inputAtividadesEmpresa2" name="inputAtividadesEmpresa2"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Período:</strong>
                                                <span id="inputPeriodoEmpresa2" name="inputPeriodoEmpresa2"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Motivo da Saída:</strong>
                                                <span id="inputMotivoSaidaEmpresa2" name="inputMotivoSaidaEmpresa2"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Último Salário:</strong>
                                                <span id="inputUltimoSalarioEmpresa2" name="inputUltimoSalarioEmpresa2"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Nome do Responsável Direto:</strong>
                                                <span id="inputNomeResponsavelDiretoEmpresa2" name="inputNomeResponsavelDiretoEmpresa2"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Nome da Empresa:</strong>
                                                <span id="inputNomeEmpresa3" name="inputNomeEmpresa3"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Tempo:</strong>
                                                <span id="inputTempoEmpresa3" name="inputTempoEmpresa3"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Cargo:</strong>
                                                <span id="inputCargoEmpresa3" name="inputCargoEmpresa3"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Atividades:</strong>
                                                <span id="inputAtividadesEmpresa3" name="inputAtividadesEmpresa3"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Período:</strong>
                                                <span id="inputPeriodoEmpresa3" name="inputPeriodoEmpresa3"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Motivo da Saída:</strong>
                                                <span id="inputMotivoSaidaEmpresa3" name="inputMotivoSaidaEmpresa3"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Último Salário:</strong>
                                                <span id="inputUltimoSalarioEmpresa3" name="inputUltimoSalarioEmpresa3"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Nome do Responsável Direto:</strong>
                                                <span id="inputNomeResponsavelDiretoEmpresa3" name="inputNomeResponsavelDiretoEmpresa3"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Nome da Empresa:</strong>
                                                <span id="inputNomeEmpresa4" name="inputNomeEmpresa4"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Tempo:</strong>
                                                <span id="inputTempoEmpresa4" name="inputTempoEmpresa4"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Cargo:</strong>
                                                <span id="inputCargoEmpresa4" name="inputCargoEmpresa4"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Atividades:</strong>
                                                <span id="inputAtividadesEmpresa4" name="inputAtividadesEmpresa4"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Período:</strong>
                                                <span id="inputPeriodoEmpresa4" name="inputPeriodoEmpresa4"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Motivo da Saída:</strong>
                                                <span id="inputMotivoSaidaEmpresa4" name="inputMotivoSaidaEmpresa4"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Último Salário:</strong>
                                                <span id="inputUltimoSalarioEmpresa4" name="inputUltimoSalarioEmpresa4"></span>
                                            </div>
                                            <div class="col-sm-5">
                                                <strong>Nome do Responsável Direto:</strong>
                                                <span id="inputNomeResponsavelDiretoEmpresa4" name="inputNomeResponsavelDiretoEmpresa4"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Descreva experiências complementares, atividades ou formações em sua trajetória de vida pessoal e profissional:</strong>
                                                <span id="inputExperienciasComplementares" name="inputExperienciasComplementares"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Objetivos à Curto Prazo:</strong>
                                                <span id="inputObjetivosCurtoPrazo" name="inputObjetivosCurtoPrazo"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Objetivos à Médio Prazo:</strong>
                                                <span id="inputObjetivosMedioPrazo" name="inputObjetivosMedioPrazo"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Objetivos à Longo Prazo:</strong>
                                                <span id="inputObjetivosLongoPrazo" name="inputObjetivosLongoPrazo"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-condensed table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><h3 class="text-center">Situações e Informações</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Já Teve Problemas com a Justiça:</strong>
                                                <span id="inputProblemasJustica" name="inputProblemasJustica"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Quanto Tempo Faz:</strong>
                                                <span id="inputQuantoTempoFaz" name="inputQuantoTempoFaz">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Que Tipo de Situação Ocorreu:</strong>
                                                <span id="inputTipoSituacaoOcorreu" name="inputTipoSituacaoOcorreu"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Principais Preocupações no Momento:</strong>
                                                <span id="inputPreocupacoesMomento" name="inputPreocupacoesMomento"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Como Está se Sentindo no Momento:</strong>
                                                <span id="inputComoEstaSentindoMomento" name="inputComoEstaSentindoMomento"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Sua Principal Característica (Qualidade):</strong>
                                                <span id="inputPrincipalCaracteristica" name="inputPrincipalCaracteristica"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>   
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Sua Principal Limitação (Ponto a Melhorar):</strong>
                                                <span id="inputPrincipalLimitacao" name="inputPrincipalLimitacao"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Qual foi a Situação mais Difícil que Enfrentou em Sua Vida:</strong>
                                                <span id="inputSituacaoMaisDificilVida" name="inputSituacaoMaisDificilVida"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Referências Profissionais:</strong>
                                                <span id="inputReferenciasProfissionais" name="inputReferenciasProfissionais"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Referências Pessoais:</strong>
                                                <span id="inputReferenciasPessoais" name="inputReferenciasPessoais"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Porque a Empresa Deve Escolher Você e Qual a sua Motivação em Fazer Parte Dessa Empresa?</strong>
                                                <span id="inputEmpresaDeveEscolherVoce" name="inputEmpresaDeveEscolherVoce"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong>Qual é a sua Pretensão de Salário?</strong>
                                                <span id="inputPretencaoSalario" name="inputPretencaoSalario"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <strong>Disponibilidade de Horário Fixo e Para Horas Extras?</strong>
                                                <span id="inputDisponibilidadeHorario" name="inputDisponibilidadeHorario"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Informações Adicionais:</strong>
                                                <span id="inputInformacoesAdicionais" name="inputInformacoesAdicionais"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <strong>Redação:</strong>
                                                <br/>
                                                <span id="inputRedacao" name="inputRedacao"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <br/>

                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fab fa-whatsapp"></i> <span id="inputInfoGeraisWhatsapp" name="inputInfoGeraisWhatsapp"></span>
                            </div>
                            <div class="col-sm-4 text-center">
                               <i class="fas fa-globe"></i> <?php echo $_SERVER[HTTP_HOST] ?>
                            </div>
                            <div class="col-sm-5 text-right">
                                <i class="far fa-envelope"></i> <span id="inputInfoGeraisEmail" name="inputInfoGeraisEmail"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <i class="fas fa-map-marker-alt"></i> <span id="inputEnderecosEndereco" name="inputEnderecosEndereco"></span>, <span id="inputEnderecosCidade" name="inputEnderecosCidade"></span>-<span id="inputEnderecosEstado" name="inputEnderecosEstado"></span>
                            </div>
                            <div class="col-sm-4 text-right">
                                <i class="fas fa-phone"></i> <span id="inputInfoGeraisTelefone" name="inputInfoGeraisTelefone"></span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<link rel="stylesheet" type="text/css" href="<?php echo URL ?>wdadmin/css/rh-candidatos-impressao.css" media="print" />
<script src="<?php echo URL ?>wdadmin/scripts/rh-candidatos-impressao.js"></script>