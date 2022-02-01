<?php

require_once "Conexao.class.php";

class VitrineEventoTimes extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_vitrine_evento_times;
    private $id_vitrine_evento;
    private $time;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_vitrine_evento_times === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO vitrine_evento_times (
                        id_vitrine_evento,
                        time
                    ) VALUES (
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->id_vitrine_evento",
                    "$this->time"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE vitrine_evento_times SET 
                        time = ?
                    WHERE 
                        id_vitrine_evento_times = ?;
                ');
                $salva_dados->execute(array(
                    "$this->time",
                    "$this->id_vitrine_evento_times"
                ));
                $this->setRetorno_dados($this->id_vitrine_evento_times);
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
                    id_vitrine_evento_times,
                    id_vitrine_evento,
                    time
                FROM
                    vitrine_evento_times
                WHERE
                    id_vitrine_evento = $this->id_vitrine_evento
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
                    id_vitrine_evento_times,
                    id_vitrine_evento,
                    time
                FROM
                    vitrine_evento_times
                WHERE
                    id_vitrine_evento_times =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_vitrine_evento_times"
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

    function getId_vitrine_evento_times() {
        return $this->id_vitrine_evento_times;
    }

    function getId_vitrine_evento() {
        return $this->id_vitrine_evento;
    }

    function getTime() {
        return $this->time;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_vitrine_evento_times($id_vitrine_evento_times) {
        $this->id_vitrine_evento_times = $id_vitrine_evento_times;
    }

    function setId_vitrine_evento($id_vitrine_evento) {
        $this->id_vitrine_evento = $id_vitrine_evento;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }


}
