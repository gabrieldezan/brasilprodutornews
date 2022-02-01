<?php

require_once "Conexao.class.php";

class RhCandidatosSituacoesInformacoes extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_candidatos_situacoes_informacoes;
    private $problemas_justica;
    private $quanto_tempo_faz;
    private $tipo_situacao_ocorreu;
    private $procupacoes_momento;
    private $como_esta_sentindo_momento;
    private $principal_caracteristica;
    private $principal_limitacao;
    private $situacao_mais_dificil_vida;
    private $referencias_profissionais;
    private $referencias_pessoais;
    private $empresa_deve_escolher_voce;
    private $pretencao_salario;
    private $disponibilidade_horario;
    private $informacoes_adicionais;
    private $redacao;
    private $id_rh_candidatos;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_rh_candidatos_situacoes_informacoes === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO rh_candidatos_situacoes_informacoes (
                        problemas_justica,
                        quanto_tempo_faz,
                        tipo_situacao_ocorreu,
                        procupacoes_momento,
                        como_esta_sentindo_momento,
                        principal_caracteristica,
                        principal_limitacao,
                        situacao_mais_dificil_vida,
                        referencias_profissionais,
                        referencias_pessoais,
                        empresa_deve_escolher_voce,
                        pretencao_salario,
                        disponibilidade_horario,
                        informacoes_adicionais,
                        redacao,
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
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->problemas_justica",
                    "$this->quanto_tempo_faz",
                    "$this->tipo_situacao_ocorreu",
                    "$this->procupacoes_momento",
                    "$this->como_esta_sentindo_momento",
                    "$this->principal_caracteristica",
                    "$this->principal_limitacao",
                    "$this->situacao_mais_dificil_vida",
                    "$this->referencias_profissionais",
                    "$this->referencias_pessoais",
                    "$this->empresa_deve_escolher_voce",
                    "$this->pretencao_salario",
                    "$this->disponibilidade_horario",
                    "$this->informacoes_adicionais",
                    "$this->redacao",
                    "$this->id_rh_candidatos"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE rh_candidatos_situacoes_informacoes SET 
                        problemas_justica = ?,
                        quanto_tempo_faz = ?,
                        tipo_situacao_ocorreu = ?,
                        procupacoes_momento = ?,
                        como_esta_sentindo_momento = ?,
                        principal_caracteristica = ?,
                        principal_limitacao = ?,
                        situacao_mais_dificil_vida = ?,
                        referencias_profissionais = ?,
                        referencias_pessoais = ?,
                        empresa_deve_escolher_voce = ?,
                        pretencao_salario = ?,
                        disponibilidade_horario = ?,
                        informacoes_adicionais = ?,
                        redacao = ?,
                        id_rh_candidatos = ?
                    WHERE 
                        id_rh_candidatos_situacoes_informacoes = ?;
                ');
                $salva_dados->execute(array(
                    "$this->problemas_justica",
                    "$this->quanto_tempo_faz",
                    "$this->tipo_situacao_ocorreu",
                    "$this->procupacoes_momento",
                    "$this->como_esta_sentindo_momento",
                    "$this->principal_caracteristica",
                    "$this->principal_limitacao",
                    "$this->situacao_mais_dificil_vida",
                    "$this->referencias_profissionais",
                    "$this->referencias_pessoais",
                    "$this->empresa_deve_escolher_voce",
                    "$this->pretencao_salario",
                    "$this->disponibilidade_horario",
                    "$this->informacoes_adicionais",
                    "$this->redacao",
                    "$this->id_rh_candidatos",
                    "$this->id_rh_candidatos_situacoes_informacoes"
                ));
                $this->setRetorno_dados($this->id_rh_candidatos_situacoes_informacoes);
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
                    id_rh_candidatos_situacoes_informacoes,
                    problemas_justica,
                    quanto_tempo_faz,
                    tipo_situacao_ocorreu,
                    procupacoes_momento,
                    como_esta_sentindo_momento,
                    principal_caracteristica,
                    principal_limitacao,
                    situacao_mais_dificil_vida,
                    referencias_profissionais,
                    referencias_pessoais,
                    empresa_deve_escolher_voce,
                    pretencao_salario,
                    disponibilidade_horario,
                    informacoes_adicionais,
                    redacao
                FROM
                    rh_candidatos_situacoes_informacoes
                WHERE
                    id_rh_candidatos =  ?
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

    function getId_rh_candidatos_situacoes_informacoes() {
        return $this->id_rh_candidatos_situacoes_informacoes;
    }

    function getProblemas_justica() {
        return $this->problemas_justica;
    }

    function getQuanto_tempo_faz() {
        return $this->quanto_tempo_faz;
    }

    function getTipo_situacao_ocorreu() {
        return $this->tipo_situacao_ocorreu;
    }

    function getProcupacoes_momento() {
        return $this->procupacoes_momento;
    }

    function getComo_esta_sentindo_momento() {
        return $this->como_esta_sentindo_momento;
    }

    function getPrincipal_caracteristica() {
        return $this->principal_caracteristica;
    }

    function getPrincipal_limitacao() {
        return $this->principal_limitacao;
    }

    function getSituacao_mais_dificil_vida() {
        return $this->situacao_mais_dificil_vida;
    }

    function getReferencias_profissionais() {
        return $this->referencias_profissionais;
    }

    function getReferencias_pessoais() {
        return $this->referencias_pessoais;
    }

    function getEmpresa_deve_escolher_voce() {
        return $this->empresa_deve_escolher_voce;
    }

    function getPretencao_salario() {
        return $this->pretencao_salario;
    }

    function getDisponibilidade_horario() {
        return $this->disponibilidade_horario;
    }

    function getInformacoes_adicionais() {
        return $this->informacoes_adicionais;
    }

    function getRedacao() {
        return $this->redacao;
    }

    function getId_rh_candidatos() {
        return $this->id_rh_candidatos;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_candidatos_situacoes_informacoes($id_rh_candidatos_situacoes_informacoes) {
        $this->id_rh_candidatos_situacoes_informacoes = $id_rh_candidatos_situacoes_informacoes;
    }

    function setProblemas_justica($problemas_justica) {
        $this->problemas_justica = $problemas_justica;
    }

    function setQuanto_tempo_faz($quanto_tempo_faz) {
        $this->quanto_tempo_faz = $quanto_tempo_faz;
    }

    function setTipo_situacao_ocorreu($tipo_situacao_ocorreu) {
        $this->tipo_situacao_ocorreu = $tipo_situacao_ocorreu;
    }

    function setProcupacoes_momento($procupacoes_momento) {
        $this->procupacoes_momento = $procupacoes_momento;
    }

    function setComo_esta_sentindo_momento($como_esta_sentindo_momento) {
        $this->como_esta_sentindo_momento = $como_esta_sentindo_momento;
    }

    function setPrincipal_caracteristica($principal_caracteristica) {
        $this->principal_caracteristica = $principal_caracteristica;
    }

    function setPrincipal_limitacao($principal_limitacao) {
        $this->principal_limitacao = $principal_limitacao;
    }

    function setSituacao_mais_dificil_vida($situacao_mais_dificil_vida) {
        $this->situacao_mais_dificil_vida = $situacao_mais_dificil_vida;
    }

    function setReferencias_profissionais($referencias_profissionais) {
        $this->referencias_profissionais = $referencias_profissionais;
    }

    function setReferencias_pessoais($referencias_pessoais) {
        $this->referencias_pessoais = $referencias_pessoais;
    }

    function setEmpresa_deve_escolher_voce($empresa_deve_escolher_voce) {
        $this->empresa_deve_escolher_voce = $empresa_deve_escolher_voce;
    }

    function setPretencao_salario($pretencao_salario) {
        $this->pretencao_salario = $pretencao_salario;
    }

    function setDisponibilidade_horario($disponibilidade_horario) {
        $this->disponibilidade_horario = $disponibilidade_horario;
    }

    function setInformacoes_adicionais($informacoes_adicionais) {
        $this->informacoes_adicionais = $informacoes_adicionais;
    }

    function setRedacao($redacao) {
        $this->redacao = $redacao;
    }

    function setId_rh_candidatos($id_rh_candidatos) {
        $this->id_rh_candidatos = $id_rh_candidatos;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
