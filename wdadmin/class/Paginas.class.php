<?php

require_once "Conexao.class.php";

class Paginas extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_paginas;
    private $titulo;
    private $icone;
    private $imagem_destaque;
    private $texto;
    private $link;
    private $data;
    private $hora;
    private $posicao;
    private $url;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_paginas === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO paginas (
                        titulo,
                        icone,
                        imagem_destaque,
                        texto,
                        link,
                        data,
                        hora,
                        posicao,
                        url
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
                    "$this->titulo",
                    "$this->icone",
                    "$this->imagem_destaque",
                    "$this->texto",
                    "$this->link",
                    "$this->data",
                    "$this->hora",
                    "$this->posicao",
                    "$this->url"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE paginas SET 
                        titulo = ?,
                        icone = ?,
                        imagem_destaque = ?,
                        texto = ?,
                        link = ?,
                        data = ?,
                        hora = ?,
                        posicao = ?,
                        url = ?
                    WHERE 
                        id_paginas = ?;
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->icone",
                    "$this->imagem_destaque",
                    "$this->texto",
                    "$this->link",
                    "$this->data",
                    "$this->hora",
                    "$this->posicao",
                    "$this->url",
                    "$this->id_paginas"
                ));
                $this->setRetorno_dados($this->id_paginas);
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
                    id_paginas,
                    titulo,
                    posicao
                FROM
                    paginas
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
                    icone,
                    imagem_destaque,
                    texto,
                    link,
                    data,
                    hora,
                    posicao,
                    url
                FROM
                    paginas
                WHERE
                    id_paginas =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_paginas"
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

    function getId_paginas() {
        return $this->id_paginas;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getIcone() {
        return $this->icone;
    }

    function getImagem_destaque() {
        return $this->imagem_destaque;
    }

    function getTexto() {
        return $this->texto;
    }

    function getLink() {
        return $this->link;
    }

    function getData() {
        return $this->data;
    }

    function getHora() {
        return $this->hora;
    }

    function getPosicao() {
        return $this->posicao;
    }

    function getUrl() {
        return $this->url;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_paginas($id_paginas) {
        $this->id_paginas = $id_paginas;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setIcone($icone) {
        $this->icone = $icone;
    }

    function setImagem_destaque($imagem_destaque) {
        $this->imagem_destaque = $imagem_destaque;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
