<?php

require_once "Conexao.class.php";

class RhVagas extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_vagas;
    private $data_registro;
    private $escolaridade;
    private $tempo_experiencia;
    private $idiomas;
    private $informatica;
    private $habilitacao;
    private $disponibilidade_viagens;
    private $departamento;
    private $cargo;
    private $superior_imediato;
    private $cargo_superior;
    private $periodo;
    private $dias_semana;
    private $horario_trabalho;
    private $sexo;
    private $remuneracao;
    private $bonus;
    private $transporte;
    private $alimentacao_local;
    private $vale_refeicao;
    private $assistencia_medica;
    private $assistencia_odontologica;
    private $outros_beneficios;
    private $conhecimentos;
    private $habilidades;
    private $atitudes_esperadas;
    private $principais_ativdades;
    private $observacoes;
    private $data_recebimento;
    private $data_entrevista;
    private $data_iniciar;
    private $status;
    private $url_amigavel;
    private $id_clientes;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_rh_vagas === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO rh_vagas (
                        data_registro,
                        escolaridade,
                        tempo_experiencia,
                        idiomas,
                        informatica,
                        habilitacao,
                        disponibilidade_viagens,
                        departamento,
                        cargo,
                        superior_imediato,
                        cargo_superior,
                        periodo,
                        dias_semana,
                        horario_trabalho,
                        sexo,
                        remuneracao,
                        bonus,
                        transporte,
                        alimentacao_local,
                        vale_refeicao,
                        assistencia_medica,
                        assistencia_odontologica,
                        outros_beneficios,
                        conhecimentos,
                        habilidades,
                        atitudes_esperadas,
                        principais_ativdades,
                        observacoes,
                        data_recebimento,
                        data_entrevista,
                        data_iniciar,
                        status,
                        url_amigavel,
                        id_clientes
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->data_registro",
                    "$this->escolaridade",
                    "$this->tempo_experiencia",
                    "$this->idiomas",
                    "$this->informatica",
                    "$this->habilitacao",
                    "$this->disponibilidade_viagens",
                    "$this->departamento",
                    "$this->cargo",
                    "$this->superior_imediato",
                    "$this->cargo_superior",
                    "$this->periodo",
                    "$this->dias_semana",
                    "$this->horario_trabalho",
                    "$this->sexo",
                    "$this->remuneracao",
                    "$this->bonus",
                    "$this->transporte",
                    "$this->alimentacao_local",
                    "$this->vale_refeicao",
                    "$this->assistencia_medica",
                    "$this->assistencia_odontologica",
                    "$this->outros_beneficios",
                    "$this->conhecimentos",
                    "$this->habilidades",
                    "$this->atitudes_esperadas",
                    "$this->principais_ativdades",
                    "$this->observacoes",
                    "$this->data_recebimento",
                    "$this->data_entrevista",
                    "$this->data_iniciar",
                    "$this->status",
                    "$this->url_amigavel",
                    "$this->id_clientes"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE rh_vagas SET 
                        escolaridade = ?,
                        tempo_experiencia = ?,
                        idiomas = ?,
                        informatica = ?,
                        habilitacao = ?,
                        disponibilidade_viagens = ?,
                        departamento = ?,
                        cargo = ?,
                        superior_imediato = ?,
                        cargo_superior = ?,
                        periodo = ?,
                        dias_semana = ?,
                        horario_trabalho = ?,
                        sexo = ?,
                        remuneracao = ?,
                        bonus = ?,
                        transporte = ?,
                        alimentacao_local = ?,
                        vale_refeicao = ?,
                        assistencia_medica = ?,
                        assistencia_odontologica = ?,
                        outros_beneficios = ?,
                        conhecimentos = ?,
                        habilidades = ?,
                        atitudes_esperadas = ?,
                        principais_ativdades = ?,
                        observacoes = ?,
                        data_recebimento = ?,
                        data_entrevista = ?,
                        data_iniciar = ?,
                        status = ?,
                        url_amigavel = ?,
                        id_clientes = ?
                    WHERE 
                        id_rh_vagas = ?;
                ');
                $salva_dados->execute(array(
                    "$this->escolaridade",
                    "$this->tempo_experiencia",
                    "$this->idiomas",
                    "$this->informatica",
                    "$this->habilitacao",
                    "$this->disponibilidade_viagens",
                    "$this->departamento",
                    "$this->cargo",
                    "$this->superior_imediato",
                    "$this->cargo_superior",
                    "$this->periodo",
                    "$this->dias_semana",
                    "$this->horario_trabalho",
                    "$this->sexo",
                    "$this->remuneracao",
                    "$this->bonus",
                    "$this->transporte",
                    "$this->alimentacao_local",
                    "$this->vale_refeicao",
                    "$this->assistencia_medica",
                    "$this->assistencia_odontologica",
                    "$this->outros_beneficios",
                    "$this->conhecimentos",
                    "$this->habilidades",
                    "$this->atitudes_esperadas",
                    "$this->principais_ativdades",
                    "$this->observacoes",
                    "$this->data_recebimento",
                    "$this->data_entrevista",
                    "$this->data_iniciar",
                    "$this->status",
                    "$this->url_amigavel",
                    "$this->id_clientes",
                    "$this->id_rh_vagas"
                ));
                $this->setRetorno_dados($this->id_rh_vagas);
            }
            return true;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== FUNÇÃO CONSULTA DADOS =============== */

    public function consulta_dados() {

        try {
            $pdo = parent::getDB();
                
            $vsWhereFiltro = "";

            if ($this->id_clientes != "T") {
                $vsWhereFiltro .= "AND rv.id_clientes = $this->id_clientes";
            } else {
                $vsWhereFiltro .= "";
            }

            if ($this->status != "T") {
                $vsWhereFiltro .= "AND rv.status = $this->status";
            } else {
                $vsWhereFiltro .= "";
            }

            $consulta_dados = $pdo->prepare("
                SELECT
                    rv.id_rh_vagas,
                    c.descricao AS cliente,
                    rv.departamento,
                    rv.cargo,
                    CASE rv.status
                        WHEN 1 THEN 'info'
                        WHEN 2 THEN 'success'
                        WHEN 3 THEN 'danger'
                    END AS status_class,
                    CASE rv.status
                        WHEN 1 THEN 'Aberta'
                        WHEN 2 THEN 'Preenchida'
                        WHEN 3 THEN 'Cancelada'
                    END AS status
                FROM
                    rh_vagas rv
                    LEFT JOIN clientes c ON c.id_clientes = rv.id_clientes
                WHERE
                    rv.id_rh_vagas > 0
                    $vsWhereFiltro
            ");
            $consulta_dados->execute();
            if ($consulta_dados->rowCount() > 0):
                $this->setRetorno_dados(json_encode($consulta_dados->fetchAll()));
                return true;
            else:
                return false;
            endif;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== FUNÇÃO EDITA DADOS =============== */

    public function edita_dados() {

        try {
            $pdo = parent::getDB();

            $edita_dados = $pdo->prepare("
                SELECT
                    data_registro,
                    escolaridade,
                    tempo_experiencia,
                    idiomas,
                    informatica,
                    habilitacao,
                    disponibilidade_viagens,
                    departamento,
                    cargo,
                    superior_imediato,
                    cargo_superior,
                    periodo,
                    dias_semana,
                    horario_trabalho,
                    sexo,
                    remuneracao,
                    bonus,
                    transporte,
                    alimentacao_local,
                    vale_refeicao,
                    assistencia_medica,
                    assistencia_odontologica,
                    outros_beneficios,
                    conhecimentos,
                    habilidades,
                    atitudes_esperadas,
                    principais_ativdades,
                    observacoes,
                    data_recebimento,
                    data_entrevista,
                    data_iniciar,
                    status,
                    url_amigavel,
                    id_clientes
                FROM
                    rh_vagas
                WHERE
                    id_rh_vagas =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_rh_vagas"
            ));
            if ($edita_dados->rowCount() > 0):
                $this->setRetorno_dados(json_encode($edita_dados->fetchAll()));
                return true;
            else:
                return false;
            endif;
        } catch (Exception $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== GETTERS E SETTERS =============== */

    function getId_rh_vagas() {
        return $this->id_rh_vagas;
    }

    function getData_registro() {
        return $this->data_registro;
    }

    function getEscolaridade() {
        return $this->escolaridade;
    }

    function getTempo_experiencia() {
        return $this->tempo_experiencia;
    }

    function getIdiomas() {
        return $this->idiomas;
    }

    function getInformatica() {
        return $this->informatica;
    }

    function getHabilitacao() {
        return $this->habilitacao;
    }

    function getDisponibilidade_viagens() {
        return $this->disponibilidade_viagens;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getSuperior_imediato() {
        return $this->superior_imediato;
    }

    function getCargo_superior() {
        return $this->cargo_superior;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    function getDias_semana() {
        return $this->dias_semana;
    }

    function getHorario_trabalho() {
        return $this->horario_trabalho;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getRemuneracao() {
        return $this->remuneracao;
    }

    function getBonus() {
        return $this->bonus;
    }

    function getTransporte() {
        return $this->transporte;
    }

    function getAlimentacao_local() {
        return $this->alimentacao_local;
    }

    function getVale_refeicao() {
        return $this->vale_refeicao;
    }

    function getAssistencia_medica() {
        return $this->assistencia_medica;
    }

    function getAssistencia_odontologica() {
        return $this->assistencia_odontologica;
    }

    function getOutros_beneficios() {
        return $this->outros_beneficios;
    }

    function getConhecimentos() {
        return $this->conhecimentos;
    }

    function getHabilidades() {
        return $this->habilidades;
    }

    function getAtitudes_esperadas() {
        return $this->atitudes_esperadas;
    }

    function getPrincipais_ativdades() {
        return $this->principais_ativdades;
    }

    function getObservacoes() {
        return $this->observacoes;
    }

    function getData_recebimento() {
        return $this->data_recebimento;
    }

    function getData_entrevista() {
        return $this->data_entrevista;
    }

    function getData_iniciar() {
        return $this->data_iniciar;
    }

    function getStatus() {
        return $this->status;
    }

    function getUrl_amigavel() {
        return $this->url_amigavel;
    }

    function getId_clientes() {
        return $this->id_clientes;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_vagas($id_rh_vagas) {
        $this->id_rh_vagas = $id_rh_vagas;
    }

    function setData_registro($data_registro) {
        $this->data_registro = $data_registro;
    }

    function setEscolaridade($escolaridade) {
        $this->escolaridade = $escolaridade;
    }

    function setTempo_experiencia($tempo_experiencia) {
        $this->tempo_experiencia = $tempo_experiencia;
    }

    function setIdiomas($idiomas) {
        $this->idiomas = $idiomas;
    }

    function setInformatica($informatica) {
        $this->informatica = $informatica;
    }

    function setHabilitacao($habilitacao) {
        $this->habilitacao = $habilitacao;
    }

    function setDisponibilidade_viagens($disponibilidade_viagens) {
        $this->disponibilidade_viagens = $disponibilidade_viagens;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setSuperior_imediato($superior_imediato) {
        $this->superior_imediato = $superior_imediato;
    }

    function setCargo_superior($cargo_superior) {
        $this->cargo_superior = $cargo_superior;
    }

    function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    function setDias_semana($dias_semana) {
        $this->dias_semana = $dias_semana;
    }

    function setHorario_trabalho($horario_trabalho) {
        $this->horario_trabalho = $horario_trabalho;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setRemuneracao($remuneracao) {
        $this->remuneracao = $remuneracao;
    }

    function setBonus($bonus) {
        $this->bonus = $bonus;
    }

    function setTransporte($transporte) {
        $this->transporte = $transporte;
    }

    function setAlimentacao_local($alimentacao_local) {
        $this->alimentacao_local = $alimentacao_local;
    }

    function setVale_refeicao($vale_refeicao) {
        $this->vale_refeicao = $vale_refeicao;
    }

    function setAssistencia_medica($assistencia_medica) {
        $this->assistencia_medica = $assistencia_medica;
    }

    function setAssistencia_odontologica($assistencia_odontologica) {
        $this->assistencia_odontologica = $assistencia_odontologica;
    }

    function setOutros_beneficios($outros_beneficios) {
        $this->outros_beneficios = $outros_beneficios;
    }

    function setConhecimentos($conhecimentos) {
        $this->conhecimentos = $conhecimentos;
    }

    function setHabilidades($habilidades) {
        $this->habilidades = $habilidades;
    }

    function setAtitudes_esperadas($atitudes_esperadas) {
        $this->atitudes_esperadas = $atitudes_esperadas;
    }

    function setPrincipais_ativdades($principais_ativdades) {
        $this->principais_ativdades = $principais_ativdades;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    function setData_recebimento($data_recebimento) {
        $this->data_recebimento = $data_recebimento;
    }

    function setData_entrevista($data_entrevista) {
        $this->data_entrevista = $data_entrevista;
    }

    function setData_iniciar($data_iniciar) {
        $this->data_iniciar = $data_iniciar;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setUrl_amigavel($url_amigavel) {
        $this->url_amigavel = $url_amigavel;
    }

    function setId_clientes($id_clientes) {
        $this->id_clientes = $id_clientes;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
