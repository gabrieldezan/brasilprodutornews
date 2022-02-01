<?php

require_once "Conexao.class.php";

class VitrineEventos extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_vitrine_evento;
    private $descricao;
    private $detalhes;
    private $mais_informacoes;
    private $mapa;
    private $valor;
    private $valor_combatshirt;
    private $status;
    private $imagem;
    private $url_amigavel;
    private $retorno_dados;
    private $data_evento;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_vitrine_evento === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO vitrine_evento (
                        descricao,
                        detalhes,
                        mais_informacoes,
                        mapa,
                        valor,
                        status,
                        imagem,
                        data_evento,
                        url_amigavel, 
                        valor_combatshirt
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
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->descricao",
                    "$this->detalhes",
                    "$this->mais_informacoes",
                    "$this->mapa",
                    "$this->valor",
                    "$this->status",
                    "$this->imagem",
                    "$this->data_evento",
                    "$this->url_amigavel",
                     "$this->valor_combatshirt"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE vitrine_evento SET 
                        descricao = ?,
                        detalhes = ?,
                        mais_informacoes = ?,
                        mapa = ?,
                        valor = ?,
                        status = ?,
                        imagem = ?,
                        data_evento = ?,
                        url_amigavel = ?,
                        valor_combatshirt = ?
                    WHERE 
                        id_vitrine_evento = ?;
                ');

                $salva_dados->execute(array(
                    "$this->descricao",
                    "$this->detalhes",
                    "$this->mais_informacoes",
                    "$this->mapa",
                    "$this->valor",
                    "$this->status",
                    "$this->imagem",
                    "$this->data_evento",
                    "$this->url_amigavel",
                    "$this->valor_combatshirt",
                    "$this->id_vitrine_evento"
                ));
                $this->setRetorno_dados($this->id_vitrine_evento);
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
                    vp.id_vitrine_evento AS id_vitrine_evento,
                    vp.descricao AS descricao,
                    CASE vp.status
                        WHEN 1 THEN 'success'
                        WHEN 0 THEN 'danger'
                    END AS status_class,
                    CASE vp.status
                        WHEN 1 THEN 'Ativo'
                        WHEN 0 THEN 'Inativo'
                    END AS status,
                    vp.valor AS valor,
                    vp.valor_combatshirt AS valor_combatshirt,
                    vp.data_evento,
                    vp.url_amigavel
                FROM
                    vitrine_evento vp
                WHERE
                    vp.id_vitrine_evento > 0
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

    public function consulta_dados_relatorio_compras() {

        try {
            $pdo = parent::getDB();

            $consulta_dados = $pdo->prepare("
                select 
                    v.idvenda,
                    ve.descricao as evento,
                    vp.valor ,
                    vp.nome as participante, 
                    vp.cpf,
                    uc.nome as comprador,
                    (select 
                        venda_status.descricao_status 
                        from venda_status 
                        where venda_status.id_venda = v.idvenda 
                        ORDER by venda_status.datahora DESC 
                        LIMIT 1) as status,
                    (select 
                        CASE venda_status.status
                            WHEN 3 THEN 'success'
                            WHEN 4 THEN 'success'
                            WHEN 0 THEN 'warning'
                            WHEN 1 THEN 'warning'
                            WHEN 2 THEN 'warning'
                            ELSE 'danger'
                        END AS status_class 
                        from venda_status 
                        where venda_status.id_venda = v.idvenda 
                        ORDER by venda_status.datahora DESC 
                        LIMIT 1) as status_class,
                        vet.time as time,
                        CASE vp.tem_combatshirt
                           WHEN 'S' THEN 'Possui'
                           ELSE 'Não possui'
                        END as combat_shirt,
                        CASE tem_combatshirt 
                           WHEN 'S' THEN ''
                           ELSE vp.tamanho_camiseta
                        END as camiseta
                from 
                    venda v inner join usuario_cliente uc on uc.id_usuario_cliente = v.idcliente
                    inner join vitrine_evento ve on ve.id_vitrine_evento = v.id_vitrine_evento
                    inner join venda_participante vp on vp.id_venda = v.idvenda
                    inner join vitrine_evento_times vet on vet.id_vitrine_evento_times = vp.time
                where 
                    v.idvenda in ( select id_venda from venda_status )
                
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

    public function GetEventoPorID() {

        try {
            $pdo = parent::getDB();

            $consulta_dados = $pdo->prepare("
                SELECT vp.*
                FROM
                    vitrine_evento vp
                WHERE
                    vp.id_vitrine_evento = " . $this->id_vitrine_evento);
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
                    vp.descricao,
                    vp.detalhes,
                    vp.mais_informacoes,
                    vp.mapa,
                    vp.valor,
                    vp.valor_combatshirt,
                    vp.status,
                    vp.imagem,
                    vp.url_amigavel,
                    DATE_FORMAT(vp.data_evento, '%Y-%m-%dT%H:%i') AS data_evento
                FROM
                    vitrine_evento vp
                WHERE
                    vp.id_vitrine_evento =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_vitrine_evento"
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

    function getId_vitrine_evento() {
        return $this->id_vitrine_evento;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getDetalhes() {
        return $this->detalhes;
    }

    function getMaisInformacoes() {
        return $this->mais_informacoes;
    }

    function getMapa() {
        return $this->mapa;
    }

    function getValor() {
        return $this->valor;
    }

    function getStatus() {
        return $this->status;
    }

    function getValor_combatshirt() {
        return $this->valor_combatshirt;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function getDataEvento() {
        return $this->data_evento;
    }

    function getUrlAmigavel() {
        return $this->url_amigavel;
    }

    function setId_vitrine_evento($id_vitrine_evento) {
        $this->id_vitrine_evento = $id_vitrine_evento;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setDetalhes($detalhes) {
        $this->detalhes = $detalhes;
    }

    function setMaisInformacoes($mais_informacoes) {
        $this->mais_informacoes = $mais_informacoes;
    }

    function setMapa($mapa) {
        $this->mapa = $mapa;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setDataEvento($data_evento) {
        $this->data_evento = $data_evento;
    }

    function setValor_combatshirt($valor_combatshirt) {
        $this->valor_combatshirt = $valor_combatshirt;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

    function setUrlAmigavel($url_amigavel) {
        $this->url_amigavel = $url_amigavel;
    }

}
