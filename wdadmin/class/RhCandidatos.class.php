<?php

require_once "Conexao.class.php";

class RhCandidatos extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_rh_candidatos;
    private $nome_completo;
    private $email;
    private $senha;
    private $data_preenchimento;
    private $celular_whats;
    private $telefone_recados;
    private $naturalidade;
    private $nacionalidade;
    private $data_nascimento;
    private $idade;
    private $sexo;
    private $cnh;
    private $cnh_categoria;
    private $cnh_validade;
    private $rg;
    private $cpf;
    private $pis;
    private $endereco;
    private $numero;
    private $bairro;
    private $cidade;
    private $quanto_tempo_mora_cidade;
    private $mora_com_quem;
    private $imovel;
    private $possui_veiculo;
    private $doador;
    private $tipo_sanguineo;
    private $religiao;
    private $vaga_interesse;
    private $como_soube_vaga;
    private $participou_processos_seletivos_ap;
    private $data_processos_seletivos_ap;
    private $para_qual_vaga;
    private $testes_psicologicos_ap;
    private $participou_outros_processos_seletivos;
    private $para_quais_empresas;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function insere_dados() {
        try {

            $pdo = parent::getDB();

            $insere_dados = $pdo->prepare('
                INSERT INTO rh_candidatos (
                    nome_completo,
                    email,
                    senha,
                    data_preenchimento,
                    celular_whats,
                    telefone_recados,
                    naturalidade,
                    nacionalidade,
                    data_nascimento,
                    idade,
                    sexo,
                    cnh,
                    cnh_categoria,
                    cnh_validade,
                    rg,
                    cpf,
                    pis,
                    endereco,
                    numero,
                    bairro,
                    cidade,
                    quanto_tempo_mora_cidade,
                    mora_com_quem,
                    imovel,
                    possui_veiculo,
                    doador,
                    tipo_sanguineo,
                    religiao,
                    vaga_interesse,
                    como_soube_vaga,
                    participou_processos_seletivos_ap,
                    data_processos_seletivos_ap,
                    para_qual_vaga,
                    testes_psicologicos_ap,
                    participou_outros_processos_seletivos,
                    para_quais_empresas
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
                    ?
                );
            ');
            $insere_dados->execute(array(
                "$this->nome_completo",
                "$this->email",
                "$this->senha",
                "$this->data_preenchimento",
                "$this->celular_whats",
                "$this->telefone_recados",
                "$this->naturalidade",
                "$this->nacionalidade",
                "$this->data_nascimento",
                "$this->idade",
                "$this->sexo",
                "$this->cnh",
                "$this->cnh_categoria",
                "$this->cnh_validade",
                "$this->rg",
                "$this->cpf",
                "$this->pis",
                "$this->endereco",
                "$this->numero",
                "$this->bairro",
                "$this->cidade",
                "$this->quanto_tempo_mora_cidade",
                "$this->mora_com_quem",
                "$this->imovel",
                "$this->possui_veiculo",
                "$this->doador",
                "$this->tipo_sanguineo",
                "$this->religiao",
                "$this->vaga_interesse",
                "$this->como_soube_vaga",
                "$this->participou_processos_seletivos_ap",
                "$this->data_processos_seletivos_ap",
                "$this->para_qual_vaga",
                "$this->testes_psicologicos_ap",
                "$this->participou_outros_processos_seletivos",
                "$this->para_quais_empresas"
            ));
            $this->setRetorno_dados($pdo->lastInsertId());
            return true;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== FUNÇÃO ATUALIZA DADOS =============== */

    public function atualiza_dados() {
        try {

            $pdo = parent::getDB();

            $atualiza_dados = $pdo->prepare('
                UPDATE rh_candidatos SET 
                    nome_completo = ?,
                    email = ?,
                    celular_whats = ?,
                    telefone_recados = ?,
                    naturalidade = ?,
                    nacionalidade = ?,
                    data_nascimento = ?,
                    idade = ?,
                    sexo = ?,
                    cnh = ?,
                    cnh_categoria = ?,
                    cnh_validade = ?,
                    rg = ?,
                    cpf = ?,
                    pis = ?,
                    endereco = ?,
                    numero = ?,
                    bairro = ?,
                    cidade = ?,
                    quanto_tempo_mora_cidade = ?,
                    mora_com_quem = ?,
                    imovel = ?,
                    possui_veiculo = ?,
                    doador = ?,
                    tipo_sanguineo = ?,
                    religiao = ?,
                    vaga_interesse = ?,
                    como_soube_vaga = ?,
                    participou_processos_seletivos_ap = ?,
                    data_processos_seletivos_ap = ?,
                    para_qual_vaga = ?,
                    testes_psicologicos_ap = ?,
                    participou_outros_processos_seletivos = ?,
                    para_quais_empresas = ?
                WHERE 
                    id_rh_candidatos = ?;
            ');
            $atualiza_dados->execute(array(
                "$this->nome_completo",
                "$this->email",
                "$this->celular_whats",
                "$this->telefone_recados",
                "$this->naturalidade",
                "$this->nacionalidade",
                "$this->data_nascimento",
                "$this->idade",
                "$this->sexo",
                "$this->cnh",
                "$this->cnh_categoria",
                "$this->cnh_validade",
                "$this->rg",
                "$this->cpf",
                "$this->pis",
                "$this->endereco",
                "$this->numero",
                "$this->bairro",
                "$this->cidade",
                "$this->quanto_tempo_mora_cidade",
                "$this->mora_com_quem",
                "$this->imovel",
                "$this->possui_veiculo",
                "$this->doador",
                "$this->tipo_sanguineo",
                "$this->religiao",
                "$this->vaga_interesse",
                "$this->como_soube_vaga",
                "$this->participou_processos_seletivos_ap",
                "$this->data_processos_seletivos_ap",
                "$this->para_qual_vaga",
                "$this->testes_psicologicos_ap",
                "$this->participou_outros_processos_seletivos",
                "$this->para_quais_empresas",
                "$this->id_rh_candidatos"
            ));
            $this->setRetorno_dados($this->id_rh_candidatos);
            return true;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== FUNÇÃO ATUALIZA SENHA =============== */

    public function atualiza_senha() {
        try {

            $pdo = parent::getDB();

            $atualiza_senha = $pdo->prepare('
                UPDATE rh_candidatos SET 
                    senha = ?
                WHERE 
                    id_rh_candidatos = ?;
            ');
            $atualiza_senha->execute(array(
                "$this->senha",
                "$this->id_rh_candidatos"
            ));
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
                    id_rh_candidatos,
                    nome_completo,
                    celular_whats,
                    vaga_interesse
                FROM
                    rh_candidatos
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
                    nome_completo,
                    email,
                    senha,
                    data_preenchimento,
                    DATE_FORMAT(data_preenchimento, '%d/%m/%Y') AS data_preenchimento_br,
                    celular_whats,
                    telefone_recados,
                    naturalidade,
                    nacionalidade,
                    data_nascimento,
                    DATE_FORMAT(data_nascimento, '%d/%m/%Y') AS data_nascimento_br,
                    idade,
                    sexo,
                    cnh,
                    cnh_categoria,
                    cnh_validade,
                    DATE_FORMAT(cnh_validade, '%d/%m/%Y') AS cnh_validade_br,
                    rg,
                    cpf,
                    pis,
                    endereco,
                    numero,
                    bairro,
                    cidade,
                    quanto_tempo_mora_cidade,
                    mora_com_quem,
                    imovel,
                    possui_veiculo,
                    doador,
                    tipo_sanguineo,
                    religiao,
                    vaga_interesse,
                    como_soube_vaga,
                    participou_processos_seletivos_ap,
                    data_processos_seletivos_ap,
                    DATE_FORMAT(data_processos_seletivos_ap, '%d/%m/%Y') AS data_processos_seletivos_ap_br,
                    para_qual_vaga,
                    testes_psicologicos_ap,
                    participou_outros_processos_seletivos,
                    para_quais_empresas
                FROM
                    rh_candidatos
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

    /* =============== FUNÇÃO VERIFICA CADASTRO EXISTENTE =============== */

    public function verifica_cadastro_existente() {

        try {
            $pdo = parent::getDB();

            $verifica_cadastro_existente = $pdo->prepare("
                SELECT
                    id_rh_candidatos
                FROM
                    rh_candidatos
                WHERE
                    email = ? OR
                    cpf = ?
            ");
            $verifica_cadastro_existente->execute(array(
                "$this->email",
                "$this->cpf"
            ));
            if ($verifica_cadastro_existente->rowCount() > 0):
                return true;
            else:
                return false;
            endif;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    public function login() {
        session_start();

        $pdo = parent::getDB();

        $login = $pdo->prepare("
            SELECT   
                id_rh_candidatos,
                nome_completo,
                email,
                senha
            FROM
                rh_candidatos
            WHERE
                email = ? AND senha = ?
        ");
        $login->bindValue(1, $this->email);
        $login->bindValue(2, $this->senha);
        $login->execute();
        if ($login->rowCount() == 1):
            $dados = $login->fetch(PDO::FETCH_OBJ);
            $_SESSION['rh_candidato_id'] = $dados->id_rh_candidatos;
            $_SESSION['rh_candidato_nome_completo'] = $dados->nome_completo;
            $_SESSION['rh_candidato_email'] = $dados->email;
            $_SESSION['rh_candidato_logado'] = true;
            return true;
        else:
            return false;
        endif;
    }

    /* =============== FUNÇÃO LOGOFF =============== */

    public static function logoff() {
        session_start();

        if ($_SESSION['rh_candidato_logado']):
            unset($_SESSION['rh_candidato_logado']);
            session_destroy();
            return true;
        else:
            return false;
        endif;
    }

    /* =============== GETTERS E SETTERS =============== */

    function getId_rh_candidatos() {
        return $this->id_rh_candidatos;
    }

    function getNome_completo() {
        return $this->nome_completo;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getData_preenchimento() {
        return $this->data_preenchimento;
    }

    function getCelular_whats() {
        return $this->celular_whats;
    }

    function getTelefone_recados() {
        return $this->telefone_recados;
    }

    function getNaturalidade() {
        return $this->naturalidade;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCnh() {
        return $this->cnh;
    }

    function getCnh_categoria() {
        return $this->cnh_categoria;
    }

    function getCnh_validade() {
        return $this->cnh_validade;
    }

    function getRg() {
        return $this->rg;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getPis() {
        return $this->pis;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getQuanto_tempo_mora_cidade() {
        return $this->quanto_tempo_mora_cidade;
    }

    function getMora_com_quem() {
        return $this->mora_com_quem;
    }

    function getImovel() {
        return $this->imovel;
    }

    function getPossui_veiculo() {
        return $this->possui_veiculo;
    }

    function getDoador() {
        return $this->doador;
    }

    function getTipo_sanguineo() {
        return $this->tipo_sanguineo;
    }

    function getReligiao() {
        return $this->religiao;
    }

    function getVaga_interesse() {
        return $this->vaga_interesse;
    }

    function getComo_soube_vaga() {
        return $this->como_soube_vaga;
    }

    function getParticipou_processos_seletivos_ap() {
        return $this->participou_processos_seletivos_ap;
    }

    function getData_processos_seletivos_ap() {
        return $this->data_processos_seletivos_ap;
    }

    function getPara_qual_vaga() {
        return $this->para_qual_vaga;
    }

    function getTestes_psicologicos_ap() {
        return $this->testes_psicologicos_ap;
    }

    function getParticipou_outros_processos_seletivos() {
        return $this->participou_outros_processos_seletivos;
    }

    function getPara_quais_empresas() {
        return $this->para_quais_empresas;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_rh_candidatos($id_rh_candidatos) {
        $this->id_rh_candidatos = $id_rh_candidatos;
    }

    function setNome_completo($nome_completo) {
        $this->nome_completo = $nome_completo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setData_preenchimento($data_preenchimento) {
        $this->data_preenchimento = $data_preenchimento;
    }

    function setCelular_whats($celular_whats) {
        $this->celular_whats = $celular_whats;
    }

    function setTelefone_recados($telefone_recados) {
        $this->telefone_recados = $telefone_recados;
    }

    function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCnh($cnh) {
        $this->cnh = $cnh;
    }

    function setCnh_categoria($cnh_categoria) {
        $this->cnh_categoria = $cnh_categoria;
    }

    function setCnh_validade($cnh_validade) {
        $this->cnh_validade = $cnh_validade;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setPis($pis) {
        $this->pis = $pis;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setQuanto_tempo_mora_cidade($quanto_tempo_mora_cidade) {
        $this->quanto_tempo_mora_cidade = $quanto_tempo_mora_cidade;
    }

    function setMora_com_quem($mora_com_quem) {
        $this->mora_com_quem = $mora_com_quem;
    }

    function setImovel($imovel) {
        $this->imovel = $imovel;
    }

    function setPossui_veiculo($possui_veiculo) {
        $this->possui_veiculo = $possui_veiculo;
    }

    function setDoador($doador) {
        $this->doador = $doador;
    }

    function setTipo_sanguineo($tipo_sanguineo) {
        $this->tipo_sanguineo = $tipo_sanguineo;
    }

    function setReligiao($religiao) {
        $this->religiao = $religiao;
    }

    function setVaga_interesse($vaga_interesse) {
        $this->vaga_interesse = $vaga_interesse;
    }

    function setComo_soube_vaga($como_soube_vaga) {
        $this->como_soube_vaga = $como_soube_vaga;
    }

    function setParticipou_processos_seletivos_ap($participou_processos_seletivos_ap) {
        $this->participou_processos_seletivos_ap = $participou_processos_seletivos_ap;
    }

    function setData_processos_seletivos_ap($data_processos_seletivos_ap) {
        $this->data_processos_seletivos_ap = $data_processos_seletivos_ap;
    }

    function setPara_qual_vaga($para_qual_vaga) {
        $this->para_qual_vaga = $para_qual_vaga;
    }

    function setTestes_psicologicos_ap($testes_psicologicos_ap) {
        $this->testes_psicologicos_ap = $testes_psicologicos_ap;
    }

    function setParticipou_outros_processos_seletivos($participou_outros_processos_seletivos) {
        $this->participou_outros_processos_seletivos = $participou_outros_processos_seletivos;
    }

    function setPara_quais_empresas($para_quais_empresas) {
        $this->para_quais_empresas = $para_quais_empresas;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
