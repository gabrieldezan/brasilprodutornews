<?php

//error_reporting(0);

include 'wdadmin/config.php';
include 'php/conexao.php';
include 'wdadmin/controllers/MontaUrlAmigavel.php';

$Conexao = conecta();

$vsSql = "SELECT * FROM informacoes_gerais";
$vrExecuta = mysqli_query($Conexao, $vsSql) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
$voResultadoConfiguracoes = mysqli_fetch_object($vrExecuta);

define("EMAIL_CONTATO", $voResultadoConfiguracoes->email_contato);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$Url = explode("/", $getUrl);

if ($Url[0] == "" || $Url[0] == "home") {
    $pagina = "home";
    $parametro = "";
} else if ($Url[0] == "sobre") {
    $pagina = "sobre";
    $parametro = "";
} else if ($Url[0] == "noticia" && isset($Url[1]) && isset($Url[2])) {
    $pagina = "noticia";
    $subcategoria = $Url[1];
    $parametro = $Url[2];
} else if ($Url[0] == "busca" && isset($Url[1])) {
    $pagina = "busca";
    $parametro = $Url[1];
    $numero_pagina = isset($Url[2]) ? $Url[2] : "1";
} else if ($Url[0] == "contato") {
    $pagina = "contato";
    $parametro = "";
} else if (isset($Url[0])) {
    $pagina = "noticias";
    $subcategoria = $Url[0];
    $numero_pagina = isset($Url[1]) ? $Url[1] : "1";
} else {
    $pagina = "404";
    $parametro = "";
}

if (file_exists("pages/$pagina.php")) {
    include "pages/$pagina.php";
} else {
    include "pages/404.php";
}