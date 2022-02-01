<?php

require_once "Conexao.class.php";

class Informacoes extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_informacoes;
    private $titulo;
    private $icone;
    private $imagem_destaque;
    private $texto;
    private $link;
    private $data;
    private $hora;
    private $id_paginas;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_informacoes === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO informacoes (
                        titulo,
                        icone,
                        imagem_destaque,
                        texto,
                        link,
                        data,
                        hora,
                        id_paginas
                    ) VALUES (
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
                    "$this->id_paginas"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE informacoes SET 
                        titulo = ?,
                        icone = ?,
                        imagem_destaque = ?,
                        texto = ?,
                        link = ?,
                        data = ?,
                        hora = ?
                    WHERE 
                        id_informacoes = ?;
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->icone",
                    "$this->imagem_destaque",
                    "$this->texto",
                    "$this->link",
                    "$this->data",
                    "$this->hora",
                    "$this->id_informacoes"
                ));
                $this->setRetorno_dados($this->id_informacoes);
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
                    id_informacoes,
                    titulo,
                    imagem_destaque
                FROM
                    informacoes
                WHERE
                    id_paginas = ?
            ");
            $consulta_dados->execute(array(
                    "$this->id_paginas"
                ));
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
                    hora
                FROM
                    informacoes
                WHERE
                    id_informacoes =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_informacoes"
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

    function getId_informacoes() {
        return $this->id_informacoes;
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

    function getId_paginas() {
        return $this->id_paginas;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_informacoes($id_informacoes) {
        $this->id_informacoes = $id_informacoes;
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

    function setId_paginas($id_paginas) {
        $this->id_paginas = $id_paginas;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
