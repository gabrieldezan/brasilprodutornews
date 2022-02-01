<?php

require_once "Conexao.class.php";

class Solucoes extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_solucoes;
    private $titulo;
    private $descricao;
    private $imagem_icone;
    private $imagem;
    private $q1_imagem;
    private $q1_titulo;
    private $q1_descricao;
    private $q2_imagem;
    private $q2_titulo;
    private $q2_descricao;
    private $q3_imagem;
    private $q3_titulo;
    private $q3_descricao;
    private $url_amigavel;
    private $status;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_solucoes === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO solucoes (
                        titulo,
                        descricao,
                        imagem_icone,
                        imagem,
                        q1_imagem,
                        q1_titulo,
                        q1_descricao,
                        q2_imagem,
                        q2_titulo,
                        q2_descricao,
                        q3_imagem,
                        q3_titulo,
                        q3_descricao,
                        url_amigavel,
                        status
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
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->descricao",
                    "$this->imagem_icone",
                    "$this->imagem",
                    "$this->q1_imagem",
                    "$this->q1_titulo",
                    "$this->q1_descricao",
                    "$this->q2_imagem",
                    "$this->q2_titulo",
                    "$this->q2_descricao",
                    "$this->q3_imagem",
                    "$this->q3_titulo",
                    "$this->q3_descricao",
                    "$this->url_amigavel",
                    "$this->status"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE solucoes SET 
                        titulo = ?,
                        descricao = ?,
                        imagem_icone = ?,
                        imagem = ?,
                        q1_imagem = ?,
                        q1_titulo = ?,
                        q1_descricao = ?,
                        q2_imagem = ?,
                        q2_titulo = ?,
                        q2_descricao = ?,
                        q3_imagem = ?,
                        q3_titulo = ?,
                        q3_descricao = ?,
                        url_amigavel = ?,
                        status = ?
                    WHERE 
                        id_solucoes = ?;
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->descricao",
                    "$this->imagem_icone",
                    "$this->imagem",
                    "$this->q1_imagem",
                    "$this->q1_titulo",
                    "$this->q1_descricao",
                    "$this->q2_imagem",
                    "$this->q2_titulo",
                    "$this->q2_descricao",
                    "$this->q3_imagem",
                    "$this->q3_titulo",
                    "$this->q3_descricao",
                    "$this->url_amigavel",
                    "$this->status",
                    "$this->id_solucoes"
                ));
                $this->setRetorno_dados($this->id_solucoes);
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

            $consulta_dados = $pdo->prepare("
                SELECT
                    id_solucoes,
                    imagem_icone,
                    titulo,
                    CASE status
                        WHEN 1 THEN 'success'
                        WHEN 0 THEN 'danger'
                    END AS status_class,
                    CASE status
                        WHEN 1 THEN 'Ativo'
                        WHEN 0 THEN 'Inativo'
                    END AS status
                FROM
                    solucoes
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
                    titulo,
                    descricao,
                    imagem_icone,
                    imagem,
                    q1_imagem,
                    q1_titulo,
                    q1_descricao,
                    q2_imagem,
                    q2_titulo,
                    q2_descricao,
                    q3_imagem,
                    q3_titulo,
                    q3_descricao,
                    status
                FROM
                    solucoes
                WHERE
                    id_solucoes =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_solucoes"
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

    function getId_solucoes() {
        return $this->id_solucoes;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getImagem_icone() {
        return $this->imagem_icone;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getQ1_imagem() {
        return $this->q1_imagem;
    }

    function getQ1_titulo() {
        return $this->q1_titulo;
    }

    function getQ1_descricao() {
        return $this->q1_descricao;
    }

    function getQ2_imagem() {
        return $this->q2_imagem;
    }

    function getQ2_titulo() {
        return $this->q2_titulo;
    }

    function getQ2_descricao() {
        return $this->q2_descricao;
    }

    function getQ3_imagem() {
        return $this->q3_imagem;
    }

    function getQ3_titulo() {
        return $this->q3_titulo;
    }

    function getQ3_descricao() {
        return $this->q3_descricao;
    }

    function getUrl_amigavel() {
        return $this->url_amigavel;
    }

    function getStatus() {
        return $this->status;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_solucoes($id_solucoes) {
        $this->id_solucoes = $id_solucoes;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setImagem_icone($imagem_icone) {
        $this->imagem_icone = $imagem_icone;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setQ1_imagem($q1_imagem) {
        $this->q1_imagem = $q1_imagem;
    }

    function setQ1_titulo($q1_titulo) {
        $this->q1_titulo = $q1_titulo;
    }

    function setQ1_descricao($q1_descricao) {
        $this->q1_descricao = $q1_descricao;
    }

    function setQ2_imagem($q2_imagem) {
        $this->q2_imagem = $q2_imagem;
    }

    function setQ2_titulo($q2_titulo) {
        $this->q2_titulo = $q2_titulo;
    }

    function setQ2_descricao($q2_descricao) {
        $this->q2_descricao = $q2_descricao;
    }

    function setQ3_imagem($q3_imagem) {
        $this->q3_imagem = $q3_imagem;
    }

    function setQ3_titulo($q3_titulo) {
        $this->q3_titulo = $q3_titulo;
    }

    function setQ3_descricao($q3_descricao) {
        $this->q3_descricao = $q3_descricao;
    }

    function setUrl_amigavel($url_amigavel) {
        $this->url_amigavel = $url_amigavel;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
