<?php

require_once "Conexao.class.php";

class RhCandidatosDisponibilidade extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_candidatos_disponibilidade;
    private $viagens;
    private $trabalhar_sabados;
    private $horas_extras;
    private $cursos;
    private $mudar_cidade;
    private $id_rh_candidatos;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_rh_candidatos_disponibilidade === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO rh_candidatos_disponibilidade (
                        viagens,
                        trabalhar_sabados,
                        horas_extras,
                        cursos,
                        mudar_cidade,
                        id_rh_candidatos
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->viagens",
                    "$this->trabalhar_sabados",
                    "$this->horas_extras",
                    "$this->cursos",
                    "$this->mudar_cidade",
                    "$this->id_rh_candidatos"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE rh_candidatos_disponibilidade SET 
                        viagens = ?,
                        trabalhar_sabados = ?,
                        horas_extras = ?,
                        cursos = ?,
                        mudar_cidade = ?,
                        id_rh_candidatos = ?
                    WHERE 
                        id_rh_candidatos_disponibilidade = ?;
                ');
                $salva_dados->execute(array(
                    "$this->viagens",
                    "$this->trabalhar_sabados",
                    "$this->horas_extras",
                    "$this->cursos",
                    "$this->mudar_cidade",
                    "$this->id_rh_candidatos",
                    "$this->id_rh_candidatos_disponibilidade"
                ));
                $this->setRetorno_dados($this->id_rh_candidatos_disponibilidade);
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
                    viagens,
                    trabalhar_sabados,
                    horas_extras,
                    cursos,
                    mudar_cidade
                FROM
                    rh_candidatos_disponibilidade
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

    function getId_rh_candidatos_disponibilidade() {
        return $this->id_rh_candidatos_disponibilidade;
    }

    function getViagens() {
        return $this->viagens;
    }

    function getTrabalhar_sabados() {
        return $this->trabalhar_sabados;
    }

    function getHoras_extras() {
        return $this->horas_extras;
    }

    function getCursos() {
        return $this->cursos;
    }

    function getMudar_cidade() {
        return $this->mudar_cidade;
    }

    function getId_rh_candidatos() {
        return $this->id_rh_candidatos;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_candidatos_disponibilidade($id_rh_candidatos_disponibilidade) {
        $this->id_rh_candidatos_disponibilidade = $id_rh_candidatos_disponibilidade;
    }

    function setViagens($viagens) {
        $this->viagens = $viagens;
    }

    function setTrabalhar_sabados($trabalhar_sabados) {
        $this->trabalhar_sabados = $trabalhar_sabados;
    }

    function setHoras_extras($horas_extras) {
        $this->horas_extras = $horas_extras;
    }

    function setCursos($cursos) {
        $this->cursos = $cursos;
    }

    function setMudar_cidade($mudar_cidade) {
        $this->mudar_cidade = $mudar_cidade;
    }

    function setId_rh_candidatos($id_rh_candidatos) {
        $this->id_rh_candidatos = $id_rh_candidatos;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
