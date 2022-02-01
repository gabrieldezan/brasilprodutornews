<?php

require_once "Conexao.class.php";

class RhCandidatosSaudeFisicaEmocional extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_candidatos_saude_fisica_emocional;
    private $doencas;
    private $fumante;
    private $fumante_quanto_tempo;
    private $parou_fumar;
    private $quanto_tempo_parou;
    private $toma_algum_medicamento;
    private $qual_medicamento;
    private $dorme_bem_noite;
    private $justifique_dorme_bem_noite;
    private $dormiu_bem_noite_passada;
    private $justifique_dormiu_bem_noite_passada;
    private $usa_oculos;
    private $esta_usando_agora;
    private $lentes;
    private $pratica_exercicios_fisicos;
    private $qual_exercicio;
    private $consome_bebidas_alcoolicas;
    private $usa_usou_droga_ilicita;
    private $qual_droga_ilicia;
    private $envolveu_acidente_transito;
    private $danos_acidente;
    private $quanto_tempo_faz;
    private $voce_foi_responsavel_acidente;
    private $justifique;
    private $id_rh_candidatos;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_rh_candidatos_saude_fisica_emocional === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO rh_candidatos_saude_fisica_emocional (
                        doencas,
                        fumante,
                        fumante_quanto_tempo,
                        parou_fumar,
                        quanto_tempo_parou,
                        toma_algum_medicamento,
                        qual_medicamento,
                        dorme_bem_noite,
                        justifique_dorme_bem_noite,
                        dormiu_bem_noite_passada,
                        justifique_dormiu_bem_noite_passada,
                        usa_oculos,
                        esta_usando_agora,
                        lentes,
                        pratica_exercicios_fisicos,
                        qual_exercicio,
                        consome_bebidas_alcoolicas,
                        usa_usou_droga_ilicita,
                        qual_droga_ilicia,
                        envolveu_acidente_transito,
                        danos_acidente,
                        quanto_tempo_faz,
                        voce_foi_responsavel_acidente,
                        justifique,
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
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->doencas",
                    "$this->fumante",
                    "$this->fumante_quanto_tempo",
                    "$this->parou_fumar",
                    "$this->quanto_tempo_parou",
                    "$this->toma_algum_medicamento",
                    "$this->qual_medicamento",
                    "$this->dorme_bem_noite",
                    "$this->justifique_dorme_bem_noite",
                    "$this->dormiu_bem_noite_passada",
                    "$this->justifique_dormiu_bem_noite_passada",
                    "$this->usa_oculos",
                    "$this->esta_usando_agora",
                    "$this->lentes",
                    "$this->pratica_exercicios_fisicos",
                    "$this->qual_exercicio",
                    "$this->consome_bebidas_alcoolicas",
                    "$this->usa_usou_droga_ilicita",
                    "$this->qual_droga_ilicia",
                    "$this->envolveu_acidente_transito",
                    "$this->danos_acidente",
                    "$this->quanto_tempo_faz",
                    "$this->voce_foi_responsavel_acidente",
                    "$this->justifique",
                    "$this->id_rh_candidatos"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE rh_candidatos_saude_fisica_emocional SET 
                        doencas = ?,
                        fumante = ?,
                        fumante_quanto_tempo = ?,
                        parou_fumar = ?,
                        quanto_tempo_parou = ?,
                        toma_algum_medicamento = ?,
                        qual_medicamento = ?,
                        dorme_bem_noite = ?,
                        justifique_dorme_bem_noite = ?,
                        dormiu_bem_noite_passada = ?,
                        justifique_dormiu_bem_noite_passada = ?,
                        usa_oculos = ?,
                        esta_usando_agora = ?,
                        lentes = ?,
                        pratica_exercicios_fisicos = ?,
                        qual_exercicio = ?,
                        consome_bebidas_alcoolicas = ?,
                        usa_usou_droga_ilicita = ?,
                        qual_droga_ilicia = ?,
                        envolveu_acidente_transito = ?,
                        danos_acidente = ?,
                        quanto_tempo_faz = ?,
                        voce_foi_responsavel_acidente = ?,
                        justifique = ?,
                        id_rh_candidatos = ?
                    WHERE 
                        id_rh_candidatos_saude_fisica_emocional = ?;
                ');
                $salva_dados->execute(array(
                    "$this->doencas",
                    "$this->fumante",
                    "$this->fumante_quanto_tempo",
                    "$this->parou_fumar",
                    "$this->quanto_tempo_parou",
                    "$this->toma_algum_medicamento",
                    "$this->qual_medicamento",
                    "$this->dorme_bem_noite",
                    "$this->justifique_dorme_bem_noite",
                    "$this->dormiu_bem_noite_passada",
                    "$this->justifique_dormiu_bem_noite_passada",
                    "$this->usa_oculos",
                    "$this->esta_usando_agora",
                    "$this->lentes",
                    "$this->pratica_exercicios_fisicos",
                    "$this->qual_exercicio",
                    "$this->consome_bebidas_alcoolicas",
                    "$this->usa_usou_droga_ilicita",
                    "$this->qual_droga_ilicia",
                    "$this->envolveu_acidente_transito",
                    "$this->danos_acidente",
                    "$this->quanto_tempo_faz",
                    "$this->voce_foi_responsavel_acidente",
                    "$this->justifique",
                    "$this->id_rh_candidatos",
                    "$this->id_rh_candidatos_saude_fisica_emocional"
                ));
                $this->setRetorno_dados($this->id_rh_candidatos_saude_fisica_emocional);
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
                    id_rh_candidatos_saude_fisica_emocional,
                    doencas,
                    fumante,
                    fumante_quanto_tempo,
                    parou_fumar,
                    quanto_tempo_parou,
                    toma_algum_medicamento,
                    qual_medicamento,
                    dorme_bem_noite,
                    justifique_dorme_bem_noite,
                    dormiu_bem_noite_passada,
                    justifique_dormiu_bem_noite_passada,
                    usa_oculos,
                    esta_usando_agora,
                    lentes,
                    pratica_exercicios_fisicos,
                    qual_exercicio,
                    consome_bebidas_alcoolicas,
                    usa_usou_droga_ilicita,
                    qual_droga_ilicia,
                    envolveu_acidente_transito,
                    danos_acidente,
                    quanto_tempo_faz,
                    voce_foi_responsavel_acidente,
                    justifique
                FROM
                    rh_candidatos_saude_fisica_emocional
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

    function getId_rh_candidatos_saude_fisica_emocional() {
        return $this->id_rh_candidatos_saude_fisica_emocional;
    }

    function getDoencas() {
        return $this->doencas;
    }

    function getFumante() {
        return $this->fumante;
    }

    function getFumante_quanto_tempo() {
        return $this->fumante_quanto_tempo;
    }

    function getParou_fumar() {
        return $this->parou_fumar;
    }

    function getQuanto_tempo_parou() {
        return $this->quanto_tempo_parou;
    }

    function getToma_algum_medicamento() {
        return $this->toma_algum_medicamento;
    }

    function getQual_medicamento() {
        return $this->qual_medicamento;
    }

    function getDorme_bem_noite() {
        return $this->dorme_bem_noite;
    }

    function getJustifique_dorme_bem_noite() {
        return $this->justifique_dorme_bem_noite;
    }

    function getDormiu_bem_noite_passada() {
        return $this->dormiu_bem_noite_passada;
    }

    function getJustifique_dormiu_bem_noite_passada() {
        return $this->justifique_dormiu_bem_noite_passada;
    }

    function getUsa_oculos() {
        return $this->usa_oculos;
    }

    function getEsta_usando_agora() {
        return $this->esta_usando_agora;
    }

    function getLentes() {
        return $this->lentes;
    }

    function getPratica_exercicios_fisicos() {
        return $this->pratica_exercicios_fisicos;
    }

    function getQual_exercicio() {
        return $this->qual_exercicio;
    }

    function getConsome_bebidas_alcoolicas() {
        return $this->consome_bebidas_alcoolicas;
    }

    function getUsa_usou_droga_ilicita() {
        return $this->usa_usou_droga_ilicita;
    }

    function getQual_droga_ilicia() {
        return $this->qual_droga_ilicia;
    }

    function getEnvolveu_acidente_transito() {
        return $this->envolveu_acidente_transito;
    }

    function getDanos_acidente() {
        return $this->danos_acidente;
    }

    function getQuanto_tempo_faz() {
        return $this->quanto_tempo_faz;
    }

    function getVoce_foi_responsavel_acidente() {
        return $this->voce_foi_responsavel_acidente;
    }

    function getJustifique() {
        return $this->justifique;
    }

    function getId_rh_candidatos() {
        return $this->id_rh_candidatos;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_candidatos_saude_fisica_emocional($id_rh_candidatos_saude_fisica_emocional) {
        $this->id_rh_candidatos_saude_fisica_emocional = $id_rh_candidatos_saude_fisica_emocional;
    }

    function setDoencas($doencas) {
        $this->doencas = $doencas;
    }

    function setFumante($fumante) {
        $this->fumante = $fumante;
    }

    function setFumante_quanto_tempo($fumante_quanto_tempo) {
        $this->fumante_quanto_tempo = $fumante_quanto_tempo;
    }

    function setParou_fumar($parou_fumar) {
        $this->parou_fumar = $parou_fumar;
    }

    function setQuanto_tempo_parou($quanto_tempo_parou) {
        $this->quanto_tempo_parou = $quanto_tempo_parou;
    }

    function setToma_algum_medicamento($toma_algum_medicamento) {
        $this->toma_algum_medicamento = $toma_algum_medicamento;
    }

    function setQual_medicamento($qual_medicamento) {
        $this->qual_medicamento = $qual_medicamento;
    }

    function setDorme_bem_noite($dorme_bem_noite) {
        $this->dorme_bem_noite = $dorme_bem_noite;
    }

    function setJustifique_dorme_bem_noite($justifique_dorme_bem_noite) {
        $this->justifique_dorme_bem_noite = $justifique_dorme_bem_noite;
    }

    function setDormiu_bem_noite_passada($dormiu_bem_noite_passada) {
        $this->dormiu_bem_noite_passada = $dormiu_bem_noite_passada;
    }

    function setJustifique_dormiu_bem_noite_passada($justifique_dormiu_bem_noite_passada) {
        $this->justifique_dormiu_bem_noite_passada = $justifique_dormiu_bem_noite_passada;
    }

    function setUsa_oculos($usa_oculos) {
        $this->usa_oculos = $usa_oculos;
    }

    function setEsta_usando_agora($esta_usando_agora) {
        $this->esta_usando_agora = $esta_usando_agora;
    }

    function setLentes($lentes) {
        $this->lentes = $lentes;
    }

    function setPratica_exercicios_fisicos($pratica_exercicios_fisicos) {
        $this->pratica_exercicios_fisicos = $pratica_exercicios_fisicos;
    }

    function setQual_exercicio($qual_exercicio) {
        $this->qual_exercicio = $qual_exercicio;
    }

    function setConsome_bebidas_alcoolicas($consome_bebidas_alcoolicas) {
        $this->consome_bebidas_alcoolicas = $consome_bebidas_alcoolicas;
    }

    function setUsa_usou_droga_ilicita($usa_usou_droga_ilicita) {
        $this->usa_usou_droga_ilicita = $usa_usou_droga_ilicita;
    }

    function setQual_droga_ilicia($qual_droga_ilicia) {
        $this->qual_droga_ilicia = $qual_droga_ilicia;
    }

    function setEnvolveu_acidente_transito($envolveu_acidente_transito) {
        $this->envolveu_acidente_transito = $envolveu_acidente_transito;
    }

    function setDanos_acidente($danos_acidente) {
        $this->danos_acidente = $danos_acidente;
    }

    function setQuanto_tempo_faz($quanto_tempo_faz) {
        $this->quanto_tempo_faz = $quanto_tempo_faz;
    }

    function setVoce_foi_responsavel_acidente($voce_foi_responsavel_acidente) {
        $this->voce_foi_responsavel_acidente = $voce_foi_responsavel_acidente;
    }

    function setJustifique($justifique) {
        $this->justifique = $justifique;
    }

    function setId_rh_candidatos($id_rh_candidatos) {
        $this->id_rh_candidatos = $id_rh_candidatos;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
