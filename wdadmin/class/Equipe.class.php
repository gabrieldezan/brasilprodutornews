<?php

require_once "Conexao.class.php";

class Equipe extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_equipe;
    private $nome;
    private $cargo;
    private $informacao_adicional;
    private $resumo;
    private $detalhes;
    private $imagem;
    private $destaque;
    private $url_amigavel;
    private $status;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_equipe === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO equipe (
                        nome,
                        cargo,
                        informacao_adicional,
                        resumo,
                        detalhes,
                        imagem,
                        destaque,
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
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->nome",
                    "$this->cargo",
                    "$this->informacao_adicional",
                    "$this->resumo",
                    "$this->detalhes",
                    "$this->imagem",
                    "$this->destaque",
                    "$this->url_amigavel",
                    "$this->status"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE equipe SET 
                        nome = ?,
                        cargo = ?,
                        informacao_adicional = ?,
                        resumo = ?,
                        detalhes = ?,
                        imagem = ?,
                        destaque = ?,
                        url_amigavel = ?,
                        status = ?
                    WHERE 
                        id_equipe = ?;
                ');
                $salva_dados->execute(array(
                    "$this->nome",
                    "$this->cargo",
                    "$this->informacao_adicional",
                    "$this->resumo",
                    "$this->detalhes",
                    "$this->imagem",
                    "$this->destaque",
                    "$this->url_amigavel",
                    "$this->status",
                    "$this->id_equipe"
                ));
                $this->setRetorno_dados($this->id_equipe);
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
                    id_equipe,
                    nome,
                    cargo,
                    CASE status
                        WHEN 1 THEN 'success'
                        WHEN 0 THEN 'danger'
                    END AS status_class,
                    CASE status
                        WHEN 1 THEN 'Ativo'
                        WHEN 0 THEN 'Inativo'
                    END AS status
                FROM
                    equipe
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
                    nome,
                    cargo,
                    informacao_adicional,
                    resumo,
                    detalhes,
                    imagem,
                    destaque,
                    status
                FROM
                    equipe
                WHERE
                    id_equipe =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_equipe"
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

    function getId_equipe() {
        return $this->id_equipe;
    }

    function getNome() {
        return $this->nome;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getInformacao_adicional() {
        return $this->informacao_adicional;
    }

    function getResumo() {
        return $this->resumo;
    }

    function getDetalhes() {
        return $this->detalhes;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getDestaque() {
        return $this->destaque;
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

    function setId_equipe($id_equipe) {
        $this->id_equipe = $id_equipe;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setInformacao_adicional($informacao_adicional) {
        $this->informacao_adicional = $informacao_adicional;
    }

    function setResumo($resumo) {
        $this->resumo = $resumo;
    }

    function setDetalhes($detalhes) {
        $this->detalhes = $detalhes;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setDestaque($destaque) {
        $this->destaque = $destaque;
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
