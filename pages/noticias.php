<?php
// definir o numero de itens por pagina
$itens_por_pagina = 10;

// pegar a pagina atual
$pagina = intval($numero_pagina - 1 . "0");

//verifica se a página é menor que 0
if ($pagina < 0) {
    include "pages/404.php";
} else {

    // pega a quantidade total de objetos no banco de dados
    $vsSqlTotal = "
        SELECT
            bp.titulo,
            bp.texto,
            bp.imagem,
            DATE_FORMAT(bp.data_publicacao, '%d/%m/%Y') AS data_publicacao_formatada,
            bp.url_amigavel AS url_noticia,
            sc.url_amigavel AS url_subcategoria,
            ct.url_amigavel AS url_categoria,
            sc.descricao AS subcategoria,
            ct.descricao AS categoria,
            sc.id_blog_subcategorias
        FROM
            blog_postagem bp
            LEFT JOIN blog_subcategorias sc ON bp.id_blog_subcategorias = sc.id_blog_subcategorias
            LEFT JOIN blog_categorias ct ON ct.id_blog_categorias = sc.id_blog_categorias
        WHERE
            sc.url_amigavel = '$subcategoria'
        ORDER BY
            bp.data_publicacao DESC
    ";
    $vrsExecutaTotal = mysqli_query($Conexao, $vsSqlTotal) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
    $viNumRowsTotal = mysqli_num_rows($vrsExecutaTotal);
    $voResultadoTotal = mysqli_fetch_object($vrsExecutaTotal);

    // puxar registros do banco
    $vsSqlNoticias = "
        $vsSqlTotal
        LIMIT $pagina, $itens_por_pagina
    ";
    $vrsExecutaNoticias = mysqli_query($Conexao, $vsSqlNoticias) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
    $viNumRowsNoticias = mysqli_num_rows($vrsExecutaNoticias);

    // definir numero de páginas
    $num_paginas = ceil($viNumRowsTotal / $itens_por_pagina);

    // verifica se existe resultado e se a página é maior que a quantidade total de páginas
    if ($viNumRowsTotal == 0 || $numero_pagina > $num_paginas) {
        include "pages/404.php";
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="utf-8">
                <meta http-equiv=X-UA-Compatible content="IE=edge">
                <link rel="shortcut icon" href="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->favicon ?>">
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
                <meta name="description" content="<?php echo $voResultadoConfiguracoes->descricao ?>">
                <meta name="author" content="Web Dezan - Agência Digital">
                <meta name="robots" content="index, follow" />
                <meta name="googlebot" content="index, follow" />
                <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . $subcategoria ?>"/>
                <meta property="og:type" content="website"/>
                <meta property="og:title" content="<?php echo $voResultadoTotal->subcategoria . " - " . $voResultadoConfiguracoes->titulo ?>"/>
                <meta property="og:description" content="<?php echo $voResultadoConfiguracoes->descricao ?>"/>
                <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . $subcategoria ?>"/>
                <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->nome_empresa ?>"/>
                <meta property="fb:admins" content="<?php echo $voResultadoConfiguracoes->facebook ?>"/>
                <title><?php echo $voResultadoTotal->subcategoria ?> - <?php echo $voResultadoConfiguracoes->titulo ?></title>
                <style type="text/css">.awe-body-loading{overflow:hidden}.awe-page-loading{position:fixed;z-index:9999999;background:#fff;left:0;top:0;width:100%;height:100%}.awe-loading-wrapper{text-align:center;width:150px;height:100px;position:absolute;top:50%;left:50%;margin-top:-50px;margin-left:-70px}.awe-loading-wrapper .awe-loading-icon{font-size:75px;line-height:1;margin-bottom:10px;-webkit-animation-name:aweIcon;animation-name:aweIcon;-webkit-animation-duration:4s;animation-duration:4s;animation-iteration-count:infinite}.awe-loading-wrapper .awe-loading-icon img{width:100%}.awe-loading-wrapper .awe-loading-icon .icon{cursor:default}.awe-loading-wrapper .progress{background:#eee;border-radius:0;box-shadow:none;margin-bottom:0;height:2px}.awe-loading-wrapper .progress .progress-bar{background:#76af00;box-shadow:none;width:100%;-webkit-animation-name:aweProgress;animation-name:aweProgress;-webkit-animation-duration:3s;animation-duration:3s}</style>
            </head>
            <body class="gray-background">
                <div class="awe-page-loading">
                    <div class="awe-loading-wrapper">
                        <div class="awe-loading-icon">
                            <img src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" title="<?php echo $voResultadoConfiguracoes->titulo ?>" alt="<?php echo $voResultadoConfiguracoes->titulo ?>">
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="wrappage">

                    <?php /* MENU */ ?>
                    <?php
                    include 'php/menu.php';
                    ?>

                    <div class="container margin-top-30">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="single-post">
                                    <div class="blog-post-item cat-1 box">
                                        <div class="title-v1 box">
                                            <h3><?php echo $voResultadoTotal->subcategoria ?></h3>
                                        </div>
                                        <div class="technnology box space-30">
                                            <?php
                                            while ($voResultadoNoticias = mysqli_fetch_object($vrsExecutaNoticias)) {
                                                ?>
                                                <div class="post-item white-card margin_bottom_30 ver2">
                                                    <a class="images" href="<?php echo URL . "noticia/" . $subcategoria . "/" . $voResultadoNoticias->url_noticia ?>"><img class="img-responsive" src="<?php echo URL ?>wdadmin/uploads/blog_postagens/<?php echo $voResultadoNoticias->imagem ?>" title="<?php echo $voResultadoNoticias->titulo ?>" alt="<?php echo $voResultadoNoticias->titulo ?>"></a>
                                                    <div class="text">
                                                        <h2 class="margin_bottom_10"><a href="<?php echo URL . "noticia/" . $subcategoria . "/" . $voResultadoNoticias->url_noticia ?>"><?php echo $voResultadoNoticias->titulo ?></a></h2>
                                                        <div class="tag margin_bottom_10">
                                                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoNoticias->data_publicacao_formatada ?></p>
                                                        </div>
                                                        <div class="description"><?php echo substr(strip_tags(trim($voResultadoNoticias->texto)), 0, strrpos(substr(strip_tags(trim($voResultadoNoticias->texto)), 0, 120), ' ')) . '...'; ?></div>
                                                        <a class="read-more" href="<?php echo URL . "noticia/" . $subcategoria . "/" . $voResultadoNoticias->url_noticia ?>">Ver Mais</a>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="box center float-left space-30">
                                    <nav class="pagination">
                                        <ul>
                                            <a href="<?php echo URL . $subcategoria ?>"><i class="fa fa-angle-double-left"></i></a>
                                            <?php
                                            $limite = 10;

                                            if ($num_paginas <= $limite) {
                                                $minimo = 0;
                                                $maximo = $num_paginas;
                                            } else if ($numero_pagina < $limite) {
                                                $minimo = 0;
                                                $maximo = $limite;
                                            } else if ($numero_pagina > ($num_paginas - 9)) {
                                                $minimo = $num_paginas - $limite;
                                                $maximo = $num_paginas;
                                            } else {
                                                $minimo = $numero_pagina - 6;
                                                $maximo = $numero_pagina + 5;
                                            }
                                            for ($i = $minimo; $i < $maximo; $i++) {
                                                $estilo = "";
                                                if ($numero_pagina == $i + 1)
                                                    $estilo = "active";
                                                ?>
                                                <li class="<?php echo $estilo ?>"><a href="<?php echo URL . $subcategoria . "/" ?><?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
                                            <?php } ?>
                                            <a href="<?php echo URL . $subcategoria . "/" . $num_paginas ?>"><i class="fa fa-angle-double-right"></i></a>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <?php
                            /* COLUNA DIREITA */
                            include 'php/coluna_direita.php';
                            ?>

                        </div>
                    </div>

                    <div id="back-to-top">
                        <i class="fa fa-long-arrow-up"></i>
                    </div>

                    <?php
                    /* RODAPÉ */
                    include 'php/rodape.php';
                    ?>

                </div>

                <?php //CSS ?>
                <?php
                include 'php/css.php';
                ?>

                <?php /* JAVASCRIPT */ ?>
                <?php
                include 'php/js.php';
                ?>

            </body>
        </html>
        <?php
    }
}