<?php

require_once "Conexao.class.php";

class RhCandidatosDadosFamiliares extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_candidatos_dados_familiares;
    private $nome_mae;
    private $idade_mae;
    private $atividade_atuais_mae;
    private $saude_mae;
    private $nome_pai;
    private $idade_pai;
    private $atividade_atuais_pai;
    private $saude_pai;
    private $estado_civil;
    private $quanto_tempo_relacionamento;
    private $nome_conjuge;
    private $idade_conjunge;
    private $atividades_atuais_conjuge;
    private $saude_conjuge;
    private $quais_problemas_saude_conjuge;
    private $tem_filhos;
    private $quantos_filhos;
    private $idades_filhos;
    private $saude_filhos;
    private $quais_problemas_saude_filhos;
    private $quem_cuida_filhos;
    private $id_rh_candidatos;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_rh_candidatos_dados_familiares === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO rh_candidatos_dados_familiares (
                        nome_mae,
                        idade_mae,
                        atividade_atuais_mae,
                        saude_mae,
                        nome_pai,
                        idade_pai,
                        atividade_atuais_pai,
                        saude_pai,
                        estado_civil,
                        quanto_tempo_relacionamento,
                        nome_conjuge,
                        idade_conjunge,
                        atividades_atuais_conjuge,
                        saude_conjuge,
                        quais_problemas_saude_conjuge,
                        tem_filhos,
                        quantos_filhos,
                        idades_filhos,
                        saude_filhos,
                        quais_problemas_saude_filhos,
                        quem_cuida_filhos,
                        id_rh_candidatos
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
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->nome_mae",
                    "$this->idade_mae",
                    "$this->atividade_atuais_mae",
                    "$this->saude_mae",
                    "$this->nome_pai",
                    "$this->idade_pai",
                    "$this->atividade_atuais_pai",
                    "$this->saude_pai",
                    "$this->estado_civil",
                    "$this->quanto_tempo_relacionamento",
                    "$this->nome_conjuge",
                    "$this->idade_conjunge",
                    "$this->atividades_atuais_conjuge",
                    "$this->saude_conjuge",
                    "$this->quais_problemas_saude_conjuge",
                    "$this->tem_filhos",
                    "$this->quantos_filhos",
                    "$this->idades_filhos",
                    "$this->saude_filhos",
                    "$this->quais_problemas_saude_filhos",
                    "$this->quem_cuida_filhos",
                    "$this->id_rh_candidatos"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE rh_candidatos_dados_familiares SET 
                        nome_mae = ?,
                        idade_mae = ?,
                        atividade_atuais_mae = ?,
                        saude_mae = ?,
                        nome_pai = ?,
                        idade_pai = ?,
                        atividade_atuais_pai = ?,
                        saude_pai = ?,
                        estado_civil = ?,
                        quanto_tempo_relacionamento = ?,
                        nome_conjuge = ?,
                        idade_conjunge = ?,
                        atividades_atuais_conjuge = ?,
                        saude_conjuge = ?,
                        quais_problemas_saude_conjuge = ?,
                        tem_filhos = ?,
                        quantos_filhos = ?,
                        idades_filhos = ?,
                        saude_filhos = ?,
                        quais_problemas_saude_filhos = ?,
                        quem_cuida_filhos = ?,
                        id_rh_candidatos = ?
                    WHERE 
                        id_rh_candidatos_dados_familiares = ?;
                ');
                $salva_dados->execute(array(
                    "$this->nome_mae",
                    "$this->idade_mae",
                    "$this->atividade_atuais_mae",
                    "$this->saude_mae",
                    "$this->nome_pai",
                    "$this->idade_pai",
                    "$this->atividade_atuais_pai",
                    "$this->saude_pai",
                    "$this->estado_civil",
                    "$this->quanto_tempo_relacionamento",
                    "$this->nome_conjuge",
                    "$this->idade_conjunge",
                    "$this->atividades_atuais_conjuge",
                    "$this->saude_conjuge",
                    "$this->quais_problemas_saude_conjuge",
                    "$this->tem_filhos",
                    "$this->quantos_filhos",
                    "$this->idades_filhos",
                    "$this->saude_filhos",
                    "$this->quais_problemas_saude_filhos",
                    "$this->quem_cuida_filhos",
                    "$this->id_rh_candidatos",
                    "$this->id_rh_candidatos_dados_familiares"
                ));
                $this->setRetorno_dados($this->id_rh_candidatos_dados_familiares);
            }
            return true;
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
                    id_rh_candidatos_dados_familiares,
                    nome_mae,
                    idade_mae,
                    atividade_atuais_mae,
                    saude_mae,
                    nome_pai,
                    idade_pai,
                    atividade_atuais_pai,
                    saude_pai,
                    estado_civil,
                    quanto_tempo_relacionamento,
                    nome_conjuge,
                    idade_conjunge,
                    atividades_atuais_conjuge,
                    saude_conjuge,
                    quais_problemas_saude_conjuge,
                    tem_filhos,
                    quantos_filhos,
                    idades_filhos,
                    saude_filhos,
                    quais_problemas_saude_filhos,
                    quem_cuida_filhos
                FROM
                    rh_candidatos_dados_familiares
                WHERE
                    id_rh_candidatos = ?
            ");
            $edita_dados->execute(array(
                "$this->id_rh_candidatos"
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

    function getId_rh_candidatos_dados_familiares() {
        return $this->id_rh_candidatos_dados_familiares;
    }

    function getNome_mae() {
        return $this->nome_mae;
    }

    function getIdade_mae() {
        return $this->idade_mae;
    }

    function getAtividade_atuais_mae() {
        return $this->atividade_atuais_mae;
    }

    function getSaude_mae() {
        return $this->saude_mae;
    }

    function getNome_pai() {
        return $this->nome_pai;
    }

    function getIdade_pai() {
        return $this->idade_pai;
    }

    function getAtividade_atuais_pai() {
        return $this->atividade_atuais_pai;
    }

    function getSaude_pai() {
        return $this->saude_pai;
    }

    function getEstado_civil() {
        return $this->estado_civil;
    }

    function getQuanto_tempo_relacionamento() {
        return $this->quanto_tempo_relacionamento;
    }

    function getNome_conjuge() {
        return $this->nome_conjuge;
    }

    function getIdade_conjunge() {
        return $this->idade_conjunge;
    }

    function getAtividades_atuais_conjuge() {
        return $this->atividades_atuais_conjuge;
    }

    function getSaude_conjuge() {
        return $this->saude_conjuge;
    }

    function getQuais_problemas_saude_conjuge() {
        return $this->quais_problemas_saude_conjuge;
    }

    function getTem_filhos() {
        return $this->tem_filhos;
    }

    function getQuantos_filhos() {
        return $this->quantos_filhos;
    }

    function getIdades_filhos() {
        return $this->idades_filhos;
    }

    function getSaude_filhos() {
        return $this->saude_filhos;
    }

    function getQuais_problemas_saude_filhos() {
        return $this->quais_problemas_saude_filhos;
    }

    function getQuem_cuida_filhos() {
        return $this->quem_cuida_filhos;
    }

    function getId_rh_candidatos() {
        return $this->id_rh_candidatos;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_candidatos_dados_familiares($id_rh_candidatos_dados_familiares) {
        $this->id_rh_candidatos_dados_familiares = $id_rh_candidatos_dados_familiares;
    }

    function setNome_mae($nome_mae) {
        $this->nome_mae = $nome_mae;
    }

    function setIdade_mae($idade_mae) {
        $this->idade_mae = $idade_mae;
    }

    function setAtividade_atuais_mae($atividade_atuais_mae) {
        $this->atividade_atuais_mae = $atividade_atuais_mae;
    }

    function setSaude_mae($saude_mae) {
        $this->saude_mae = $saude_mae;
    }

    function setNome_pai($nome_pai) {
        $this->nome_pai = $nome_pai;
    }

    function setIdade_pai($idade_pai) {
        $this->idade_pai = $idade_pai;
    }

    function setAtividade_atuais_pai($atividade_atuais_pai) {
        $this->atividade_atuais_pai = $atividade_atuais_pai;
    }

    function setSaude_pai($saude_pai) {
        $this->saude_pai = $saude_pai;
    }

    function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }

    function setQuanto_tempo_relacionamento($quanto_tempo_relacionamento) {
        $this->quanto_tempo_relacionamento = $quanto_tempo_relacionamento;
    }

    function setNome_conjuge($nome_conjuge) {
        $this->nome_conjuge = $nome_conjuge;
    }

    function setIdade_conjunge($idade_conjunge) {
        $this->idade_conjunge = $idade_conjunge;
    }

    function setAtividades_atuais_conjuge($atividades_atuais_conjuge) {
        $this->atividades_atuais_conjuge = $atividades_atuais_conjuge;
    }

    function setSaude_conjuge($saude_conjuge) {
        $this->saude_conjuge = $saude_conjuge;
    }

    function setQuais_problemas_saude_conjuge($quais_problemas_saude_conjuge) {
        $this->quais_problemas_saude_conjuge = $quais_problemas_saude_conjuge;
    }

    function setTem_filhos($tem_filhos) {
        $this->tem_filhos = $tem_filhos;
    }

    function setQuantos_filhos($quantos_filhos) {
        $this->quantos_filhos = $quantos_filhos;
    }

    function setIdades_filhos($idades_filhos) {
        $this->idades_filhos = $idades_filhos;
    }

    function setSaude_filhos($saude_filhos) {
        $this->saude_filhos = $saude_filhos;
    }

    function setQuais_problemas_saude_filhos($quais_problemas_saude_filhos) {
        $this->quais_problemas_saude_filhos = $quais_problemas_saude_filhos;
    }

    function setQuem_cuida_filhos($quem_cuida_filhos) {
        $this->quem_cuida_filhos = $quem_cuida_filhos;
    }

    function setId_rh_candidatos($id_rh_candidatos) {
        $this->id_rh_candidatos = $id_rh_candidatos;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
