<?php

require_once "Conexao.class.php";

class RhCandidatosCaracteristicasProfissionais extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_candidatos_caracteristicas_profissionais;
    private $nome_empresa_1;
    private $tempo_empresa_1;
    private $cargo_empresa_1;
    private $atividades_empresa_1;
    private $data_inicio_empresa_1;
    private $data_saida_empresa_1;
    private $motivo_saida_empresa_1;
    private $ultimo_salario_empresa_1;
    private $nome_responsavel_direto_empresa_1;
    private $nome_empresa_2;
    private $tempo_empresa_2;
    private $cargo_empresa_2;
    private $atividades_empresa_2;
    private $data_inicio_empresa_2;
    private $data_saida_empresa_2;
    private $motivo_saida_empresa_2;
    private $ultimo_salario_empresa_2;
    private $nome_responsavel_direto_empresa_2;
    private $nome_empresa_3;
    private $tempo_empresa_3;
    private $cargo_empresa_3;
    private $atividades_empresa_3;
    private $data_inicio_empresa_3;
    private $data_saida_empresa_3;
    private $motivo_saida_empresa_3;
    private $ultimo_salario_empresa_3;
    private $nome_responsavel_direto_empresa_3;
    private $nome_empresa_4;
    private $tempo_empresa_4;
    private $cargo_empresa_4;
    private $atividades_empresa_4;
    private $data_inicio_empresa_4;
    private $data_saida_empresa_4;
    private $motivo_saida_empresa_4;
    private $ultimo_salario_empresa_4;
    private $nome_responsavel_direto_empresa_4;
    private $experiencias_complementares;
    private $objetivos_curto_prazo;
    private $objetivos_medio_prazo;
    private $objetivos_longo_prazo;
    private $id_rh_candidatos;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_rh_candidatos_caracteristicas_profissionais === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO rh_candidatos_caracteristicas_profissionais (
                        nome_empresa_1,
                        tempo_empresa_1,
                        cargo_empresa_1,
                        atividades_empresa_1,
                        data_inicio_empresa_1,
                        data_saida_empresa_1,
                        motivo_saida_empresa_1,
                        ultimo_salario_empresa_1,
                        nome_responsavel_direto_empresa_1,
                        nome_empresa_2,
                        tempo_empresa_2,
                        cargo_empresa_2,
                        atividades_empresa_2,
                        data_inicio_empresa_2,
                        data_saida_empresa_2,
                        motivo_saida_empresa_2,
                        ultimo_salario_empresa_2,
                        nome_responsavel_direto_empresa_2,
                        nome_empresa_3,
                        tempo_empresa_3,
                        cargo_empresa_3,
                        atividades_empresa_3,
                        data_inicio_empresa_3,
                        data_saida_empresa_3,
                        motivo_saida_empresa_3,
                        ultimo_salario_empresa_3,
                        nome_responsavel_direto_empresa_3,
                        nome_empresa_4,
                        tempo_empresa_4,
                        cargo_empresa_4,
                        atividades_empresa_4,
                        data_inicio_empresa_4,
                        data_saida_empresa_4,
                        motivo_saida_empresa_4,
                        ultimo_salario_empresa_4,
                        nome_responsavel_direto_empresa_4,
                        experiencias_complementares,
                        objetivos_curto_prazo,
                        objetivos_medio_prazo,
                        objetivos_longo_prazo,
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
                    "$this->nome_empresa_1",
                    "$this->tempo_empresa_1",
                    "$this->cargo_empresa_1",
                    "$this->atividades_empresa_1",
                    "$this->data_inicio_empresa_1",
                    "$this->data_saida_empresa_1",
                    "$this->motivo_saida_empresa_1",
                    "$this->ultimo_salario_empresa_1",
                    "$this->nome_responsavel_direto_empresa_1",
                    "$this->nome_empresa_2",
                    "$this->tempo_empresa_2",
                    "$this->cargo_empresa_2",
                    "$this->atividades_empresa_2",
                    "$this->data_inicio_empresa_2",
                    "$this->data_saida_empresa_2",
                    "$this->motivo_saida_empresa_2",
                    "$this->ultimo_salario_empresa_2",
                    "$this->nome_responsavel_direto_empresa_2",
                    "$this->nome_empresa_3",
                    "$this->tempo_empresa_3",
                    "$this->cargo_empresa_3",
                    "$this->atividades_empresa_3",
                    "$this->data_inicio_empresa_3",
                    "$this->data_saida_empresa_3",
                    "$this->motivo_saida_empresa_3",
                    "$this->ultimo_salario_empresa_3",
                    "$this->nome_responsavel_direto_empresa_3",
                    "$this->nome_empresa_4",
                    "$this->tempo_empresa_4",
                    "$this->cargo_empresa_4",
                    "$this->atividades_empresa_4",
                    "$this->data_inicio_empresa_4",
                    "$this->data_saida_empresa_4",
                    "$this->motivo_saida_empresa_4",
                    "$this->ultimo_salario_empresa_4",
                    "$this->nome_responsavel_direto_empresa_4",
                    "$this->experiencias_complementares",
                    "$this->objetivos_curto_prazo",
                    "$this->objetivos_medio_prazo",
                    "$this->objetivos_longo_prazo",
                    "$this->id_rh_candidatos"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE rh_candidatos_caracteristicas_profissionais SET 
                        nome_empresa_1 = ?,
                        tempo_empresa_1 = ?,
                        cargo_empresa_1 = ?,
                        atividades_empresa_1 = ?,
                        data_inicio_empresa_1 = ?,
                        data_saida_empresa_1 = ?,
                        motivo_saida_empresa_1 = ?,
                        ultimo_salario_empresa_1 = ?,
                        nome_responsavel_direto_empresa_1 = ?,
                        nome_empresa_2 = ?,
                        tempo_empresa_2 = ?,
                        cargo_empresa_2 = ?,
                        atividades_empresa_2 = ?,
                        data_inicio_empresa_2 = ?,
                        data_saida_empresa_2 = ?,
                        motivo_saida_empresa_2 = ?,
                        ultimo_salario_empresa_2 = ?,
                        nome_responsavel_direto_empresa_2 = ?,
                        nome_empresa_3 = ?,
                        tempo_empresa_3 = ?,
                        cargo_empresa_3 = ?,
                        atividades_empresa_3 = ?,
                        data_inicio_empresa_3 = ?,
                        data_saida_empresa_3 = ?,
                        motivo_saida_empresa_3 = ?,
                        ultimo_salario_empresa_3 = ?,
                        nome_responsavel_direto_empresa_3 = ?,
                        nome_empresa_4 = ?,
                        tempo_empresa_4 = ?,
                        cargo_empresa_4 = ?,
                        atividades_empresa_4 = ?,
                        data_inicio_empresa_4 = ?,
                        data_saida_empresa_4 = ?,
                        motivo_saida_empresa_4 = ?,
                        ultimo_salario_empresa_4 = ?,
                        nome_responsavel_direto_empresa_4 = ?,
                        experiencias_complementares = ?,
                        objetivos_curto_prazo = ?,
                        objetivos_medio_prazo = ?,
                        objetivos_longo_prazo = ?,
                        id_rh_candidatos = ?
                    WHERE 
                        id_rh_candidatos_caracteristicas_profissionais = ?;
                ');
                $salva_dados->execute(array(
                    "$this->nome_empresa_1",
                    "$this->tempo_empresa_1",
                    "$this->cargo_empresa_1",
                    "$this->atividades_empresa_1",
                    "$this->data_inicio_empresa_1",
                    "$this->data_saida_empresa_1",
                    "$this->motivo_saida_empresa_1",
                    "$this->ultimo_salario_empresa_1",
                    "$this->nome_responsavel_direto_empresa_1",
                    "$this->nome_empresa_2",
                    "$this->tempo_empresa_2",
                    "$this->cargo_empresa_2",
                    "$this->atividades_empresa_2",
                    "$this->data_inicio_empresa_2",
                    "$this->data_saida_empresa_2",
                    "$this->motivo_saida_empresa_2",
                    "$this->ultimo_salario_empresa_2",
                    "$this->nome_responsavel_direto_empresa_2",
                    "$this->nome_empresa_3",
                    "$this->tempo_empresa_3",
                    "$this->cargo_empresa_3",
                    "$this->atividades_empresa_3",
                    "$this->data_inicio_empresa_3",
                    "$this->data_saida_empresa_3",
                    "$this->motivo_saida_empresa_3",
                    "$this->ultimo_salario_empresa_3",
                    "$this->nome_responsavel_direto_empresa_3",
                    "$this->nome_empresa_4",
                    "$this->tempo_empresa_4",
                    "$this->cargo_empresa_4",
                    "$this->atividades_empresa_4",
                    "$this->data_inicio_empresa_4",
                    "$this->data_saida_empresa_4",
                    "$this->motivo_saida_empresa_4",
                    "$this->ultimo_salario_empresa_4",
                    "$this->nome_responsavel_direto_empresa_4",
                    "$this->experiencias_complementares",
                    "$this->objetivos_curto_prazo",
                    "$this->objetivos_medio_prazo",
                    "$this->objetivos_longo_prazo",
                    "$this->id_rh_candidatos",
                    "$this->id_rh_candidatos_caracteristicas_profissionais"
                ));
                $this->setRetorno_dados($this->id_rh_candidatos_caracteristicas_profissionais);
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
                    id_rh_candidatos_caracteristicas_profissionais,
                    nome_empresa_1,
                    tempo_empresa_1,
                    cargo_empresa_1,
                    atividades_empresa_1,
                    data_inicio_empresa_1,
                    DATE_FORMAT(data_inicio_empresa_1, '%d/%m/%Y') AS data_inicio_empresa_1_br,
                    data_saida_empresa_1,
                    DATE_FORMAT(data_saida_empresa_1, '%d/%m/%Y') AS data_saida_empresa_1_br,
                    motivo_saida_empresa_1,
                    ultimo_salario_empresa_1,
                    nome_responsavel_direto_empresa_1,
                    nome_empresa_2,
                    tempo_empresa_2,
                    cargo_empresa_2,
                    atividades_empresa_2,
                    data_inicio_empresa_2,
                    DATE_FORMAT(data_inicio_empresa_2, '%d/%m/%Y') AS data_inicio_empresa_2_br,
                    data_saida_empresa_2,
                    DATE_FORMAT(data_saida_empresa_2, '%d/%m/%Y') AS data_saida_empresa_2_br,
                    motivo_saida_empresa_2,
                    ultimo_salario_empresa_2,
                    nome_responsavel_direto_empresa_2,
                    nome_empresa_3,
                    tempo_empresa_3,
                    cargo_empresa_3,
                    atividades_empresa_3,
                    data_inicio_empresa_3,
                    DATE_FORMAT(data_inicio_empresa_3, '%d/%m/%Y') AS data_inicio_empresa_3_br,
                    data_saida_empresa_3,
                    DATE_FORMAT(data_saida_empresa_3, '%d/%m/%Y') AS data_saida_empresa_3_br,
                    motivo_saida_empresa_3,
                    ultimo_salario_empresa_3,
                    nome_responsavel_direto_empresa_3,
                    nome_empresa_4,
                    tempo_empresa_4,
                    cargo_empresa_4,
                    atividades_empresa_4,
                    data_inicio_empresa_4,
                    DATE_FORMAT(data_inicio_empresa_4, '%d/%m/%Y') AS data_inicio_empresa_4_br,
                    data_saida_empresa_4,
                    DATE_FORMAT(data_saida_empresa_4, '%d/%m/%Y') AS data_saida_empresa_4_br,
                    motivo_saida_empresa_4,
                    ultimo_salario_empresa_4,
                    nome_responsavel_direto_empresa_4,
                    experiencias_complementares,
                    objetivos_curto_prazo,
                    objetivos_medio_prazo,
                    objetivos_longo_prazo
                FROM
                    rh_candidatos_caracteristicas_profissionais
                WHERE
                    id_rh_candidatos = ?
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

    function getId_rh_candidatos_caracteristicas_profissionais() {
        return $this->id_rh_candidatos_caracteristicas_profissionais;
    }

    function getNome_empresa_1() {
        return $this->nome_empresa_1;
    }

    function getTempo_empresa_1() {
        return $this->tempo_empresa_1;
    }

    function getCargo_empresa_1() {
        return $this->cargo_empresa_1;
    }

    function getAtividades_empresa_1() {
        return $this->atividades_empresa_1;
    }

    function getData_inicio_empresa_1() {
        return $this->data_inicio_empresa_1;
    }

    function getData_saida_empresa_1() {
        return $this->data_saida_empresa_1;
    }

    function getMotivo_saida_empresa_1() {
        return $this->motivo_saida_empresa_1;
    }

    function getUltimo_salario_empresa_1() {
        return $this->ultimo_salario_empresa_1;
    }

    function getNome_responsavel_direto_empresa_1() {
        return $this->nome_responsavel_direto_empresa_1;
    }

    function getNome_empresa_2() {
        return $this->nome_empresa_2;
    }

    function getTempo_empresa_2() {
        return $this->tempo_empresa_2;
    }

    function getCargo_empresa_2() {
        return $this->cargo_empresa_2;
    }

    function getAtividades_empresa_2() {
        return $this->atividades_empresa_2;
    }

    function getData_inicio_empresa_2() {
        return $this->data_inicio_empresa_2;
    }

    function getData_saida_empresa_2() {
        return $this->data_saida_empresa_2;
    }

    function getMotivo_saida_empresa_2() {
        return $this->motivo_saida_empresa_2;
    }

    function getUltimo_salario_empresa_2() {
        return $this->ultimo_salario_empresa_2;
    }

    function getNome_responsavel_direto_empresa_2() {
        return $this->nome_responsavel_direto_empresa_2;
    }

    function getNome_empresa_3() {
        return $this->nome_empresa_3;
    }

    function getTempo_empresa_3() {
        return $this->tempo_empresa_3;
    }

    function getCargo_empresa_3() {
        return $this->cargo_empresa_3;
    }

    function getAtividades_empresa_3() {
        return $this->atividades_empresa_3;
    }

    function getData_inicio_empresa_3() {
        return $this->data_inicio_empresa_3;
    }

    function getData_saida_empresa_3() {
        return $this->data_saida_empresa_3;
    }

    function getMotivo_saida_empresa_3() {
        return $this->motivo_saida_empresa_3;
    }

    function getUltimo_salario_empresa_3() {
        return $this->ultimo_salario_empresa_3;
    }

    function getNome_responsavel_direto_empresa_3() {
        return $this->nome_responsavel_direto_empresa_3;
    }

    function getNome_empresa_4() {
        return $this->nome_empresa_4;
    }

    function getTempo_empresa_4() {
        return $this->tempo_empresa_4;
    }

    function getCargo_empresa_4() {
        return $this->cargo_empresa_4;
    }

    function getAtividades_empresa_4() {
        return $this->atividades_empresa_4;
    }

    function getData_inicio_empresa_4() {
        return $this->data_inicio_empresa_4;
    }

    function getData_saida_empresa_4() {
        return $this->data_saida_empresa_4;
    }

    function getMotivo_saida_empresa_4() {
        return $this->motivo_saida_empresa_4;
    }

    function getUltimo_salario_empresa_4() {
        return $this->ultimo_salario_empresa_4;
    }

    function getNome_responsavel_direto_empresa_4() {
        return $this->nome_responsavel_direto_empresa_4;
    }

    function getExperiencias_complementares() {
        return $this->experiencias_complementares;
    }

    function getObjetivos_curto_prazo() {
        return $this->objetivos_curto_prazo;
    }

    function getObjetivos_medio_prazo() {
        return $this->objetivos_medio_prazo;
    }

    function getObjetivos_longo_prazo() {
        return $this->objetivos_longo_prazo;
    }

    function getId_rh_candidatos() {
        return $this->id_rh_candidatos;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_candidatos_caracteristicas_profissionais($id_rh_candidatos_caracteristicas_profissionais) {
        $this->id_rh_candidatos_caracteristicas_profissionais = $id_rh_candidatos_caracteristicas_profissionais;
    }

    function setNome_empresa_1($nome_empresa_1) {
        $this->nome_empresa_1 = $nome_empresa_1;
    }

    function setTempo_empresa_1($tempo_empresa_1) {
        $this->tempo_empresa_1 = $tempo_empresa_1;
    }

    function setCargo_empresa_1($cargo_empresa_1) {
        $this->cargo_empresa_1 = $cargo_empresa_1;
    }

    function setAtividades_empresa_1($atividades_empresa_1) {
        $this->atividades_empresa_1 = $atividades_empresa_1;
    }

    function setData_inicio_empresa_1($data_inicio_empresa_1) {
        $this->data_inicio_empresa_1 = $data_inicio_empresa_1;
    }

    function setData_saida_empresa_1($data_saida_empresa_1) {
        $this->data_saida_empresa_1 = $data_saida_empresa_1;
    }

    function setMotivo_saida_empresa_1($motivo_saida_empresa_1) {
        $this->motivo_saida_empresa_1 = $motivo_saida_empresa_1;
    }

    function setUltimo_salario_empresa_1($ultimo_salario_empresa_1) {
        $this->ultimo_salario_empresa_1 = $ultimo_salario_empresa_1;
    }

    function setNome_responsavel_direto_empresa_1($nome_responsavel_direto_empresa_1) {
        $this->nome_responsavel_direto_empresa_1 = $nome_responsavel_direto_empresa_1;
    }

    function setNome_empresa_2($nome_empresa_2) {
        $this->nome_empresa_2 = $nome_empresa_2;
    }

    function setTempo_empresa_2($tempo_empresa_2) {
        $this->tempo_empresa_2 = $tempo_empresa_2;
    }

    function setCargo_empresa_2($cargo_empresa_2) {
        $this->cargo_empresa_2 = $cargo_empresa_2;
    }

    function setAtividades_empresa_2($atividades_empresa_2) {
        $this->atividades_empresa_2 = $atividades_empresa_2;
    }

    function setData_inicio_empresa_2($data_inicio_empresa_2) {
        $this->data_inicio_empresa_2 = $data_inicio_empresa_2;
    }

    function setData_saida_empresa_2($data_saida_empresa_2) {
        $this->data_saida_empresa_2 = $data_saida_empresa_2;
    }

    function setMotivo_saida_empresa_2($motivo_saida_empresa_2) {
        $this->motivo_saida_empresa_2 = $motivo_saida_empresa_2;
    }

    function setUltimo_salario_empresa_2($ultimo_salario_empresa_2) {
        $this->ultimo_salario_empresa_2 = $ultimo_salario_empresa_2;
    }

    function setNome_responsavel_direto_empresa_2($nome_responsavel_direto_empresa_2) {
        $this->nome_responsavel_direto_empresa_2 = $nome_responsavel_direto_empresa_2;
    }

    function setNome_empresa_3($nome_empresa_3) {
        $this->nome_empresa_3 = $nome_empresa_3;
    }

    function setTempo_empresa_3($tempo_empresa_3) {
        $this->tempo_empresa_3 = $tempo_empresa_3;
    }

    function setCargo_empresa_3($cargo_empresa_3) {
        $this->cargo_empresa_3 = $cargo_empresa_3;
    }

    function setAtividades_empresa_3($atividades_empresa_3) {
        $this->atividades_empresa_3 = $atividades_empresa_3;
    }

    function setData_inicio_empresa_3($data_inicio_empresa_3) {
        $this->data_inicio_empresa_3 = $data_inicio_empresa_3;
    }

    function setData_saida_empresa_3($data_saida_empresa_3) {
        $this->data_saida_empresa_3 = $data_saida_empresa_3;
    }

    function setMotivo_saida_empresa_3($motivo_saida_empresa_3) {
        $this->motivo_saida_empresa_3 = $motivo_saida_empresa_3;
    }

    function setUltimo_salario_empresa_3($ultimo_salario_empresa_3) {
        $this->ultimo_salario_empresa_3 = $ultimo_salario_empresa_3;
    }

    function setNome_responsavel_direto_empresa_3($nome_responsavel_direto_empresa_3) {
        $this->nome_responsavel_direto_empresa_3 = $nome_responsavel_direto_empresa_3;
    }

    function setNome_empresa_4($nome_empresa_4) {
        $this->nome_empresa_4 = $nome_empresa_4;
    }

    function setTempo_empresa_4($tempo_empresa_4) {
        $this->tempo_empresa_4 = $tempo_empresa_4;
    }

    function setCargo_empresa_4($cargo_empresa_4) {
        $this->cargo_empresa_4 = $cargo_empresa_4;
    }

    function setAtividades_empresa_4($atividades_empresa_4) {
        $this->atividades_empresa_4 = $atividades_empresa_4;
    }

    function setData_inicio_empresa_4($data_inicio_empresa_4) {
        $this->data_inicio_empresa_4 = $data_inicio_empresa_4;
    }

    function setData_saida_empresa_4($data_saida_empresa_4) {
        $this->data_saida_empresa_4 = $data_saida_empresa_4;
    }

    function setMotivo_saida_empresa_4($motivo_saida_empresa_4) {
        $this->motivo_saida_empresa_4 = $motivo_saida_empresa_4;
    }

    function setUltimo_salario_empresa_4($ultimo_salario_empresa_4) {
        $this->ultimo_salario_empresa_4 = $ultimo_salario_empresa_4;
    }

    function setNome_responsavel_direto_empresa_4($nome_responsavel_direto_empresa_4) {
        $this->nome_responsavel_direto_empresa_4 = $nome_responsavel_direto_empresa_4;
    }

    function setExperiencias_complementares($experiencias_complementares) {
        $this->experiencias_complementares = $experiencias_complementares;
    }

    function setObjetivos_curto_prazo($objetivos_curto_prazo) {
        $this->objetivos_curto_prazo = $objetivos_curto_prazo;
    }

    function setObjetivos_medio_prazo($objetivos_medio_prazo) {
        $this->objetivos_medio_prazo = $objetivos_medio_prazo;
    }

    function setObjetivos_longo_prazo($objetivos_longo_prazo) {
        $this->objetivos_longo_prazo = $objetivos_longo_prazo;
    }

    function setId_rh_candidatos($id_rh_candidatos) {
        $this->id_rh_candidatos = $id_rh_candidatos;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
