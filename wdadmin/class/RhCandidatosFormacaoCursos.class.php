<?php

require_once "Conexao.class.php";

class RhCandidatosFormacaoCursos extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_candidatos_formacao_cursos;
    private $escolaridade;
    private $profissao;
    private $formacao_cursos_complementares;
    private $curso_conhecimento;
    private $informatica;
    private $excel;
    private $experiencia_elaboracao_planilhas;
    private $ingles;
    private $espanhol;
    private $outros;
    private $tem_experiencia;
    private $possui_habito_leitura;
    private $nome_ultimo_livro;
    private $data_conclusao_leitura;
    private $id_rh_candidatos;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_rh_candidatos_formacao_cursos === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO rh_candidatos_formacao_cursos (
                        escolaridade,
                        profissao,
                        formacao_cursos_complementares,
                        curso_conhecimento,
                        informatica,
                        excel,
                        experiencia_elaboracao_planilhas,
                        ingles,
                        espanhol,
                        outros,
                        tem_experiencia,
                        possui_habito_leitura,
                        nome_ultimo_livro,
                        data_conclusao_leitura,
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
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->escolaridade",
                    "$this->profissao",
                    "$this->formacao_cursos_complementares",
                    "$this->curso_conhecimento",
                    "$this->informatica",
                    "$this->excel",
                    "$this->experiencia_elaboracao_planilhas",
                    "$this->ingles",
                    "$this->espanhol",
                    "$this->outros",
                    "$this->tem_experiencia",
                    "$this->possui_habito_leitura",
                    "$this->nome_ultimo_livro",
                    "$this->data_conclusao_leitura",
                    "$this->id_rh_candidatos"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE rh_candidatos_formacao_cursos SET 
                        escolaridade = ?,
                        profissao = ?,
                        formacao_cursos_complementares = ?,
                        curso_conhecimento = ?,
                        informatica = ?,
                        excel = ?,
                        experiencia_elaboracao_planilhas = ?,
                        ingles = ?,
                        espanhol = ?,
                        outros = ?,
                        tem_experiencia = ?,
                        possui_habito_leitura = ?,
                        nome_ultimo_livro = ?,
                        data_conclusao_leitura = ?,
                        id_rh_candidatos = ?
                    WHERE 
                        id_rh_candidatos_formacao_cursos = ?;
                ');
                $salva_dados->execute(array(
                    "$this->escolaridade",
                    "$this->profissao",
                    "$this->formacao_cursos_complementares",
                    "$this->curso_conhecimento",
                    "$this->informatica",
                    "$this->excel",
                    "$this->experiencia_elaboracao_planilhas",
                    "$this->ingles",
                    "$this->espanhol",
                    "$this->outros",
                    "$this->tem_experiencia",
                    "$this->possui_habito_leitura",
                    "$this->nome_ultimo_livro",
                    "$this->data_conclusao_leitura",
                    "$this->id_rh_candidatos",
                    "$this->id_rh_candidatos_formacao_cursos"
                ));
                $this->setRetorno_dados($this->id_rh_candidatos_formacao_cursos);
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
                    id_rh_candidatos_formacao_cursos,
                    escolaridade,
                    profissao,
                    formacao_cursos_complementares,
                    curso_conhecimento,
                    informatica,
                    excel,
                    experiencia_elaboracao_planilhas,
                    ingles,
                    espanhol,
                    outros,
                    tem_experiencia,
                    possui_habito_leitura,
                    nome_ultimo_livro,
                    data_conclusao_leitura,
                    DATE_FORMAT(data_conclusao_leitura, '%d/%m/%Y') AS data_conclusao_leitura_br
                FROM
                    rh_candidatos_formacao_cursos
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

    function getId_rh_candidatos_formacao_cursos() {
        return $this->id_rh_candidatos_formacao_cursos;
    }

    function getEscolaridade() {
        return $this->escolaridade;
    }

    function getProfissao() {
        return $this->profissao;
    }

    function getFormacao_cursos_complementares() {
        return $this->formacao_cursos_complementares;
    }

    function getCurso_conhecimento() {
        return $this->curso_conhecimento;
    }

    function getInformatica() {
        return $this->informatica;
    }

    function getExcel() {
        return $this->excel;
    }

    function getExperiencia_elaboracao_planilhas() {
        return $this->experiencia_elaboracao_planilhas;
    }

    function getIngles() {
        return $this->ingles;
    }

    function getEspanhol() {
        return $this->espanhol;
    }

    function getOutros() {
        return $this->outros;
    }

    function getTem_experiencia() {
        return $this->tem_experiencia;
    }

    function getPossui_habito_leitura() {
        return $this->possui_habito_leitura;
    }

    function getNome_ultimo_livro() {
        return $this->nome_ultimo_livro;
    }

    function getData_conclusao_leitura() {
        return $this->data_conclusao_leitura;
    }

    function getId_rh_candidatos() {
        return $this->id_rh_candidatos;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_candidatos_formacao_cursos($id_rh_candidatos_formacao_cursos) {
        $this->id_rh_candidatos_formacao_cursos = $id_rh_candidatos_formacao_cursos;
    }

    function setEscolaridade($escolaridade) {
        $this->escolaridade = $escolaridade;
    }

    function setProfissao($profissao) {
        $this->profissao = $profissao;
    }

    function setFormacao_cursos_complementares($formacao_cursos_complementares) {
        $this->formacao_cursos_complementares = $formacao_cursos_complementares;
    }

    function setCurso_conhecimento($curso_conhecimento) {
        $this->curso_conhecimento = $curso_conhecimento;
    }

    function setInformatica($informatica) {
        $this->informatica = $informatica;
    }

    function setExcel($excel) {
        $this->excel = $excel;
    }

    function setExperiencia_elaboracao_planilhas($experiencia_elaboracao_planilhas) {
        $this->experiencia_elaboracao_planilhas = $experiencia_elaboracao_planilhas;
    }

    function setIngles($ingles) {
        $this->ingles = $ingles;
    }

    function setEspanhol($espanhol) {
        $this->espanhol = $espanhol;
    }

    function setOutros($outros) {
        $this->outros = $outros;
    }

    function setTem_experiencia($tem_experiencia) {
        $this->tem_experiencia = $tem_experiencia;
    }

    function setPossui_habito_leitura($possui_habito_leitura) {
        $this->possui_habito_leitura = $possui_habito_leitura;
    }

    function setNome_ultimo_livro($nome_ultimo_livro) {
        $this->nome_ultimo_livro = $nome_ultimo_livro;
    }

    function setData_conclusao_leitura($data_conclusao_leitura) {
        $this->data_conclusao_leitura = $data_conclusao_leitura;
    }

    function setId_rh_candidatos($id_rh_candidatos) {
        $this->id_rh_candidatos = $id_rh_candidatos;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
