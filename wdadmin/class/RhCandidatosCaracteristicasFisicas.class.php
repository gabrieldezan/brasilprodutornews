<?php

require_once "Conexao.class.php";

class RhCandidatosCaracteristicasFisicas extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_candidatos_caracteristicas_fisicas;
    private $altura;
    private $peso;
    private $possui_alguma_limitacao;
    private $qual_limitacao;
    private $possui_barba;
    private $disposto_tirar_barba;
    private $unhas;
    private $cabelo;
    private $prefere_manter;
    private $habito_cuidados_restritivos;
    private $qual_habito;
    private $id_rh_candidatos;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_rh_candidatos_caracteristicas_fisicas === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO rh_candidatos_caracteristicas_fisicas (
                        altura,
                        peso,
                        possui_alguma_limitacao,
                        qual_limitacao,
                        possui_barba,
                        disposto_tirar_barba,
                        unhas,
                        cabelo,
                        prefere_manter,
                        habito_cuidados_restritivos,
                        qual_habito,
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
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->altura",
                    "$this->peso",
                    "$this->possui_alguma_limitacao",
                    "$this->qual_limitacao",
                    "$this->possui_barba",
                    "$this->disposto_tirar_barba",
                    "$this->unhas",
                    "$this->cabelo",
                    "$this->prefere_manter",
                    "$this->habito_cuidados_restritivos",
                    "$this->qual_habito",
                    "$this->id_rh_candidatos"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE rh_candidatos_caracteristicas_fisicas SET 
                        altura = ?,
                        peso = ?,
                        possui_alguma_limitacao = ?,
                        qual_limitacao = ?,
                        possui_barba = ?,
                        disposto_tirar_barba = ?,
                        unhas = ?,
                        cabelo = ?,
                        prefere_manter = ?,
                        habito_cuidados_restritivos = ?,
                        qual_habito = ?,
                        id_rh_candidatos = ?
                    WHERE 
                        id_rh_candidatos_caracteristicas_fisicas = ?;
                ');
                $salva_dados->execute(array(
                   "$this->altura",
                    "$this->peso",
                    "$this->possui_alguma_limitacao",
                    "$this->qual_limitacao",
                    "$this->possui_barba",
                    "$this->disposto_tirar_barba",
                    "$this->unhas",
                    "$this->cabelo",
                    "$this->prefere_manter",
                    "$this->habito_cuidados_restritivos",
                    "$this->qual_habito",
                    "$this->id_rh_candidatos",
                    "$this->id_rh_candidatos_caracteristicas_fisicas"
                ));
                $this->setRetorno_dados($this->id_rh_candidatos_caracteristicas_fisicas);
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
                    id_rh_candidatos_caracteristicas_fisicas,
                    altura,
                    peso,
                    possui_alguma_limitacao,
                    qual_limitacao,
                    possui_barba,
                    disposto_tirar_barba,
                    unhas,
                    cabelo,
                    prefere_manter,
                    habito_cuidados_restritivos,
                    qual_habito
                FROM
                    rh_candidatos_caracteristicas_fisicas
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

    function getId_rh_candidatos_caracteristicas_fisicas() {
        return $this->id_rh_candidatos_caracteristicas_fisicas;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getPossui_alguma_limitacao() {
        return $this->possui_alguma_limitacao;
    }

    function getQual_limitacao() {
        return $this->qual_limitacao;
    }

    function getPossui_barba() {
        return $this->possui_barba;
    }

    function getDisposto_tirar_barba() {
        return $this->disposto_tirar_barba;
    }

    function getUnhas() {
        return $this->unhas;
    }

    function getCabelo() {
        return $this->cabelo;
    }

    function getPrefere_manter() {
        return $this->prefere_manter;
    }

    function getHabito_cuidados_restritivos() {
        return $this->habito_cuidados_restritivos;
    }

    function getQual_habito() {
        return $this->qual_habito;
    }

    function getId_rh_candidatos() {
        return $this->id_rh_candidatos;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_candidatos_caracteristicas_fisicas($id_rh_candidatos_caracteristicas_fisicas) {
        $this->id_rh_candidatos_caracteristicas_fisicas = $id_rh_candidatos_caracteristicas_fisicas;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setPossui_alguma_limitacao($possui_alguma_limitacao) {
        $this->possui_alguma_limitacao = $possui_alguma_limitacao;
    }

    function setQual_limitacao($qual_limitacao) {
        $this->qual_limitacao = $qual_limitacao;
    }

    function setPossui_barba($possui_barba) {
        $this->possui_barba = $possui_barba;
    }

    function setDisposto_tirar_barba($disposto_tirar_barba) {
        $this->disposto_tirar_barba = $disposto_tirar_barba;
    }

    function setUnhas($unhas) {
        $this->unhas = $unhas;
    }

    function setCabelo($cabelo) {
        $this->cabelo = $cabelo;
    }

    function setPrefere_manter($prefere_manter) {
        $this->prefere_manter = $prefere_manter;
    }

    function setHabito_cuidados_restritivos($habito_cuidados_restritivos) {
        $this->habito_cuidados_restritivos = $habito_cuidados_restritivos;
    }

    function setQual_habito($qual_habito) {
        $this->qual_habito = $qual_habito;
    }

    function setId_rh_candidatos($id_rh_candidatos) {
        $this->id_rh_candidatos = $id_rh_candidatos;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
