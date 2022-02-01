<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->favicon ?>"/>
        <meta name="description" content="<?php echo $voResultadoConfiguracoes->descricao ?>">
        <meta name="author" content="Web Dezan - Agência Digital">
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $voResultadoConfiguracoes->titulo ?>"/>
        <meta property="og:description" content="<?php echo $voResultadoConfiguracoes->descricao ?>"/>
        <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL ?>"/>
        <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->nome_empresa ?>"/>
        <meta property="fb:admins" content="<?php echo $voResultadoConfiguracoes->facebook ?>"/>
        <title><?php echo $voResultadoConfiguracoes->titulo ?></title>
        <style type="text/css">.awe-body-loading{overflow:hidden}.awe-page-loading{position:fixed;z-index:9999999;background:#fff;left:0;top:0;width:100%;height:100%}.awe-loading-wrapper{text-align:center;width:150px;height:100px;position:absolute;top:50%;left:50%;margin-top:-50px;margin-left:-70px}.awe-loading-wrapper .awe-loading-icon{font-size:75px;line-height:1;margin-bottom:10px;-webkit-animation-name:aweIcon;animation-name:aweIcon;-webkit-animation-duration:4s;animation-duration:4s;animation-iteration-count:infinite}.awe-loading-wrapper .awe-loading-icon img{width:100%}.awe-loading-wrapper .awe-loading-icon .icon{cursor:default}.awe-loading-wrapper .progress{background:#eee;border-radius:0;box-shadow:none;margin-bottom:0;height:2px}.awe-loading-wrapper .progress .progress-bar{background:#76af00;box-shadow:none;width:100%;-webkit-animation-name:aweProgress;animation-name:aweProgress;-webkit-animation-duration:3s;animation-duration:3s}</style>
    </head>

    <body class="gray-background">
        <div class="awe-page-loading">
            <div class="awe-loading-wrapper">
                <div class="awe-loading-icon">
                    <img src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" title="<?php $voResultadoConfiguracoes->titulo ?>" alt="<?php $voResultadoConfiguracoes->titulo ?>">
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="wrappage">

            <?php
            // MENU
            include 'php/menu.php';


            // MONTA BANNERS
            include 'php/banner_home.php';
            ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        $vsSqlPosicao1 = "SELECT descricao, id_blog_subcategorias, posicao FROM blog_subcategorias WHERE posicao=1 AND status=1";
                        $vrsExecutaPosicao1 = mysqli_query($Conexao, $vsSqlPosicao1) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoPosicao1 = mysqli_fetch_object($vrsExecutaPosicao1)) {
                            ?>
                            <div class="title-v1">
                                <h3><?php echo $voResultadoPosicao1->descricao ?></h3>
                            </div>
                            <div class="travel box">
                                <div class="row">
                                    <?php
                                    $vsSqlPostsPosicao1 = "
                                        SELECT
                                            bp.titulo,
                                            bp.texto,
                                            bp.imagem,
                                            DATE_FORMAT(bp.data_publicacao, '%d/%m/%Y') AS data_publicacao_formatada,
                                            bp.url_amigavel AS url_noticia,
                                            sc.url_amigavel AS url_subcategoria,
                                            sc.descricao AS subcategoria
                                        FROM
                                            blog_postagem bp
                                            INNER JOIN blog_subcategorias sc ON bp.id_blog_subcategorias=sc.id_blog_subcategorias AND sc.descricao=sc.descricao
                                        WHERE
                                            bp.data_publicacao < now() AND
                                            sc.status = 1 AND
                                            sc.posicao = $voResultadoPosicao1->posicao
                                        ORDER BY
                                            bp.data_publicacao DESC
                                            LIMIT 4
                                    ";
                                    $vrsExecutaPostsPosicao1 = mysqli_query($Conexao, $vsSqlPostsPosicao1) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                    $i = 1;
                                    while ($voResultadoPostsPosicao1 = mysqli_fetch_object($vrsExecutaPostsPosicao1)) {
                                        if ($i % 3 == 0) {
                                            ?>
                                            <div class="col-md-6">
                                                <div class="post-item white-card ver2 space-15">
                                                    <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao1->url_subcategoria . "/" . $voResultadoPostsPosicao1->url_noticia ?>"><img class="img-responsive" src="<?php echo URL ?>wdadmin/uploads/blog_postagens/<?php echo $voResultadoPostsPosicao1->imagem ?>" title="<?php echo $voResultadoPostsPosicao1->titulo ?>" alt="<?php echo $voResultadoPostsPosicao1->titulo ?>"></a>
                                                    <div class="text">
                                                        <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao1->url_subcategoria . "/" . $voResultadoPostsPosicao1->url_noticia ?>"><?php echo $voResultadoPostsPosicao1->titulo ?></a></h2>
                                                        <div class="tag">
                                                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao1->data_publicacao_formatada ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else if ($i % 2 == 0) {
                                            ?>
                                            <div class="col-md-6">
                                                <div class="post-item white-card ver2 space-15">
                                                    <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao1->url_subcategoria . "/" . $voResultadoPostsPosicao1->url_noticia ?>"><img class="img-responsive" src="<?php echo URL ?>wdadmin/uploads/blog_postagens/<?php echo $voResultadoPostsPosicao1->imagem ?>" title="<?php echo $voResultadoPostsPosicao1->titulo ?>" alt="<?php echo $voResultadoPostsPosicao1->titulo ?>"></a>
                                                    <div class="text">
                                                        <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao1->url_subcategoria . "/" . $voResultadoPostsPosicao1->url_noticia ?>"><?php echo $voResultadoPostsPosicao1->titulo ?></a></h2>
                                                        <div class="tag">
                                                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao1->data_publicacao_formatada ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else if ($i % 1 == 0) {
                                            ?>
                                            <div class="col-md-6">
                                                <div class="post-item white-card ver3 overlay space-15">
                                                    <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao1->url_subcategoria . "/" . $voResultadoPostsPosicao1->url_noticia ?>"><img class="img-responsive" src="<?php echo URL ?>wdadmin/uploads/blog_postagens/<?php echo $voResultadoPostsPosicao1->imagem ?>" title="<?php echo $voResultadoPostsPosicao1->titulo ?>" alt="<?php echo $voResultadoPostsPosicao1->titulo ?>"></a>
                                                    <div class="text">
                                                        <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao1->url_subcategoria . "/" . $voResultadoPostsPosicao1->url_noticia ?>"><?php echo $voResultadoPostsPosicao1->titulo ?></a></h2>
                                                        <div class="tag">
                                                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao1->data_publicacao_formatada ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        $vsSqlPosicao2 = "SELECT descricao, id_blog_subcategorias, posicao FROM blog_subcategorias WHERE posicao=2 AND status=1";
                        $vrsExecutaPosicao2 = mysqli_query($Conexao, $vsSqlPosicao2) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoPosicao2 = mysqli_fetch_object($vrsExecutaPosicao2)) {
                            ?>
                            <div class="title-v1">
                                <h3><?php echo $voResultadoPosicao2->descricao ?></h3>
                            </div>
                            <div class="travel space-30 box">
                                <div class="row">
                                    <?php
                                    $vsSqlPostsPosicao2 = "
                                        SELECT
                                            bp.titulo,
                                            bp.texto,
                                            bp.imagem,
                                            DATE_FORMAT(bp.data_publicacao, '%d/%m/%Y') AS data_publicacao_formatada,
                                            bp.url_amigavel AS url_noticia,
                                            sc.url_amigavel AS url_subcategoria,
                                            sc.descricao AS subcategoria
                                        FROM
                                            blog_postagem bp
                                            INNER JOIN blog_subcategorias sc ON bp.id_blog_subcategorias=sc.id_blog_subcategorias AND sc.descricao=sc.descricao
                                        WHERE
                                            bp.data_publicacao < now() AND
                                            sc.status=1 AND
                                            sc.posicao = $voResultadoPosicao2->posicao
                                        ORDER BY
                                            bp.data_publicacao DESC
                                            LIMIT 4
                                    ";
                                    $vrsExecutaPostsPosicao2 = mysqli_query($Conexao, $vsSqlPostsPosicao2) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                    while ($voResultadoPostsPosicao2 = mysqli_fetch_object($vrsExecutaPostsPosicao2)) {
                                        ?>
                                        <div class="col-md-6 space-30">
                                            <div class="post-item white-card ver4 overlay-v2 cat-2">
                                                <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao2->url_subcategoria . "/" . $voResultadoPostsPosicao2->url_noticia ?>"><img class='img-responsive' src="<?php echo URL ?>wdadmin/uploads/blog_postagens/<?php echo $voResultadoPostsPosicao2->imagem ?>" title="<?php echo $voResultadoPostsPosicao2->titulo ?>" alt="<?php echo $voResultadoPostsPosicao2->titulo ?>"></a>
                                                <div class="text">
                                                    <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao2->url_subcategoria . "/" . $voResultadoPostsPosicao2->url_noticia ?>"><?php echo $voResultadoPostsPosicao2->titulo ?></a></h2>
                                                    <div class="tag">
                                                        <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao2->data_publicacao_formatada ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="col-md-12">
                            <?php
                            $vsSqlBannerPropaganda = "SELECT titulo, imagem_destaque, link FROM informacoes WHERE id_paginas = 13 ORDER BY id_informacoes DESC LIMIT 1";
                            $vrsExecutaBannerPropaganda = mysqli_query($Conexao, $vsSqlBannerPropaganda) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                            while ($voResultadoBannerPropaganda = mysqli_fetch_object($vrsExecutaBannerPropaganda)) {
                                ?>
                                <div class="banner">
                                    <a target="_blank" href="<?php echo $voResultadoBannerPropaganda->link ?>">
                                        <img class="img-responsive" src="<?php echo URL . "wdadmin/uploads/informacoes/" . $voResultadoBannerPropaganda->imagem_destaque ?>" title="<?php echo $voResultadoBannerPropaganda->titulo ?>" alt="<?php echo $voResultadoBannerPropaganda->titulo ?>">
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                    </div>

                    <div class="col-md-4 col-lg-4">
                        <aside class="widget popular">
                            <?php
                            $vsSqlBannerClima = "SELECT titulo, link FROM informacoes WHERE id_informacoes = 39";
                            $vrsExecutaBannerClima = mysqli_query($Conexao, $vsSqlBannerClima) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                            while ($voResultadoClima = mysqli_fetch_object($vrsExecutaBannerClima)) {
                                ?>
                                <h3 class="widget-title"><?php echo $voResultadoClima->titulo ?></h3>
                                <div class="content">
                                    <?php echo $voResultadoClima->link ?>
                                </div>
                                <?php
                            }
                            ?>
                        </aside>
                        <aside class="widget popular">
                            <h3 class="widget-title">MAIS POPULARES</h3>
                            <div class="content">
                                <?php
                                $vsSqlMaisVisitados = "
                                    SELECT
                                        bp.titulo,
                                        bp.texto,
                                        bp.imagem,
                                        sc.cor_hexadecimal,
                                        sc.descricao AS subcategoria,
                                        bp.url_amigavel,
                                        sc.url_amigavel AS url_subcategoria,
                                        ct.url_amigavel AS url_categoria,
                                        DATE_FORMAT(bp.data_publicacao, '%d/%m/%Y') AS data_publicacao_formatada
                                    FROM
                                        blog_postagem bp
                                        INNER JOIN blog_subcategorias sc ON bp.id_blog_subcategorias=sc.id_blog_subcategorias AND sc.descricao=sc.descricao
                                        INNER JOIN blog_categorias ct ON sc.id_blog_categorias=ct.id_blog_categorias
                                    WHERE
                                        bp.data_publicacao < now() AND
                                        sc.status=1
                                    ORDER BY
                                        bp.visualizacoes DESC
                                    LIMIT 4
                                ";
                                $vrsExecutaMaisVisitados = mysqli_query($Conexao, $vsSqlMaisVisitados) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                while ($voResultadoMaisVisitados = mysqli_fetch_object($vrsExecutaMaisVisitados)) {
                                    ?>
                                    <div class="post-item white-card cat-1 ver1 overlay">
                                        <span class="lable" style="top:23px; left:23px; background: <?php echo $voResultadoMaisVisitados->cor_hexadecimal ?>"><?php echo $voResultadoMaisVisitados->subcategoria ?></span>
                                        <a class="images" href="<?php echo URL . "noticia/" . $voResultadoMaisVisitados->url_subcategoria . "/" . $voResultadoMaisVisitados->url_amigavel ?>">
                                            <img class='img-responsive' src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoMaisVisitados->imagem ?>" title="<?php echo $voResultadoMaisVisitados->titulo ?>" alt="<?php echo $voResultadoMaisVisitados->titulo ?>"></a>
                                        <div class="text">
                                            <h2><a href="<?php echo URL . "noticia/" . $voResultadoMaisVisitados->url_subcategoria . "/" . $voResultadoMaisVisitados->url_amigavel ?>"><?php echo $voResultadoMaisVisitados->titulo ?></a></h2>
                                            <div class="tag">
                                                <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoMaisVisitados->data_publicacao_formatada ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <div class="container">
                <?php
                $vsSqlPosicao3 = "SELECT descricao, id_blog_subcategorias, posicao FROM blog_subcategorias WHERE posicao=3 AND status=1";
                $vrsExecutaPosicao3 = mysqli_query($Conexao, $vsSqlPosicao3) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                while ($voResultadoPosicao3 = mysqli_fetch_object($vrsExecutaPosicao3)) {
                    ?>
                    <div class="title-v1">
                        <h3><?php echo $voResultadoPosicao3->descricao ?></h3>
                    </div>

                    <div class="slide-four-item size-18 nav-ver2 nav-white box space-30">
                        <?php
                        $vsSqlPostsPosicao3 = "
                            SELECT
                                bp.titulo,
                                bp.texto,
                                bp.imagem,
                                DATE_FORMAT(bp.data_publicacao, '%d/%m/%Y') AS data_publicacao_formatada,
                                bp.url_amigavel AS url_noticia,
                                sc.url_amigavel AS url_subcategoria,
                                sc.descricao AS subcategoria,
                                sc.cor_hexadecimal
                            FROM
                                blog_postagem bp
                                INNER JOIN blog_subcategorias sc ON bp.id_blog_subcategorias=sc.id_blog_subcategorias AND sc.descricao=sc.descricao
                            WHERE
                                bp.data_publicacao < now() AND
                                sc.status=1 AND
                                sc.posicao = $voResultadoPosicao3->posicao
                            ORDER BY
                                bp.data_publicacao DESC
                                LIMIT 6
                        ";
                        $vrsExecutaPostsPosicao3 = mysqli_query($Conexao, $vsSqlPostsPosicao3) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoPostsPosicao3 = mysqli_fetch_object($vrsExecutaPostsPosicao3)) {
                            ?>
                            <div class="post-item ver3 cat-1 overlay">
                                <div class="wrap-images">
                                    <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao3->url_subcategoria . "/" . $voResultadoPostsPosicao3->url_noticia ?>" title="<?php echo $voResultadoPostsPosicao3->titulo ?>">
                                        <img class='img-responsive' src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoPostsPosicao3->imagem ?>" alt="<?php echo $voResultadoPostsPosicao3->titulo ?>">
                                    </a>
                                    <div class="tag">
                                        <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao3->data_publicacao_formatada ?></p>
                                    </div>
                                </div>
                                <div class="text">
                                    <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao3->url_subcategoria . "/" . $voResultadoPostsPosicao3->url_noticia ?>" title="<?php echo $voResultadoPostsPosicao3->titulo ?>"><?php echo $voResultadoPostsPosicao3->titulo ?></a></h2>
                                    <?php echo substr($voResultadoPostsPosicao3->texto, 0, strrpos(substr($voResultadoPostsPosicao3->texto, 0, 85), ' ')) . '...'; ?><br>
                                    <a class="read-more" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao3->url_subcategoria . "/" . $voResultadoPostsPosicao3->url_noticia ?>" title="Ver Mais">Ver Mais</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>                    
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $vsSqlPosicao4 = "SELECT descricao, posicao FROM blog_subcategorias WHERE posicao=4 AND status=1";
                        $vrsExecutaPosicao4 = mysqli_query($Conexao, $vsSqlPosicao4) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoPosicao4 = mysqli_fetch_object($vrsExecutaPosicao4)) {
                            ?>
                            <div class="title-v1">
                                <h3><?php echo $voResultadoPosicao4->descricao ?></h3>
                            </div>
                            <div class="row space-30 size-18">
                                <?php
                                $vsSqlPostsPosicao4 = "
                                    SELECT
                                        bp.titulo,
                                        bp.imagem,
                                        bp.texto,
                                        bp.url_amigavel AS url_noticia,
                                        sc.url_amigavel AS url_subcategoria,
                                        bp.data_publicacao,
                                        sc.descricao,
                                        DATE_FORMAT(data_publicacao, '%d/%m/%Y') AS data_publicacao
                                    FROM
                                        blog_postagem bp
                                        INNER JOIN blog_subcategorias sc on sc.descricao=sc.descricao AND sc.id_blog_subcategorias=sc.id_blog_subcategorias
                                    WHERE
                                        bp.data_publicacao < now() AND
                                        bp.id_blog_subcategorias=sc.id_blog_subcategorias AND
                                        sc.status=1 AND
                                        sc.posicao= $voResultadoPosicao4->posicao
                                    ORDER BY bp.data_publicacao DESC
                                    LIMIT 5
                                ";
                                $vrsExecutaPostsPosicao4 = mysqli_query($Conexao, $vsSqlPostsPosicao4) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));

                                $i = 1;
                                while ($voResultadoPostsPosicao4 = mysqli_fetch_object($vrsExecutaPostsPosicao4)) {
                                    if ($i <= 2) {
                                        ?>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="post-item white-card ver3 overlay space-30">
                                                <div class="wrap-images">
                                                    <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao4->url_subcategoria . "/" . $voResultadoPostsPosicao4->url_noticia ?>">
                                                        <img class="img-responsive" src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoPostsPosicao4->imagem ?>" title="<?php echo $voResultadoPostsPosicao4->titulo ?>" alt="<?php echo $voResultadoPostsPosicao4->titulo ?>">
                                                    </a>
                                                    <div class="tag">
                                                        <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao4->data_publicacao ?></p>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao4->url_subcategoria . "/" . $voResultadoPostsPosicao4->url_noticia ?>"><?php echo $voResultadoPostsPosicao4->titulo ?></a></h2>
                                                    <?php echo substr($voResultadoPostsPosicao4->texto, 0, strrpos(substr($voResultadoPostsPosicao4->texto, 0, 85), ' ')) . '...'; ?><br>
                                                    <a class="read-more" href="<?php echo URL ?><?php echo $voResultadoPostsPosicao4->url_grupo ?>/<?php echo $voResultadoPostsPosicao4->url_subgrupo ?>/<?php echo $voResultadoPostsPosicao4->url_amigavel ?>">Ver Mais</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <div class="col-sm-12">
                                            <div class="post-bottom-footer box space-15">
                                                <div class="post-item white-card ver2 cat-1">
                                                    <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao4->url_subcategoria . "/" . $voResultadoPostsPosicao4->url_noticia ?>" title="<?php echo $voResultadoPostsPosicao4->titulo ?>">
                                                        <img class='img-responsive' src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoPostsPosicao4->imagem ?>" alt="<?php echo $voResultadoPostsPosicao4->titulo ?>" title="<?php echo $voResultadoPostsPosicao4->titulo ?>">
                                                    </a>
                                                    <div class="text">
                                                        <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao4->url_subcategoria . "/" . $voResultadoPostsPosicao4->url_noticia ?>" title="<?php echo $voResultadoPostsPosicao4->titulo ?>"><?php echo $voResultadoPostsPosicao4->titulo ?></a></h2>
                                                        <div class="tag">
                                                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao4->data_publicacao ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    $i++;
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $vsSqlPosicao5 = "SELECT descricao, posicao FROM blog_subcategorias WHERE posicao=5 AND status=1";
                        $vrsExecutaPosicao5 = mysqli_query($Conexao, $vsSqlPosicao5) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoPosicao5 = mysqli_fetch_object($vrsExecutaPosicao5)) {
                            ?>
                            <div class="title-v1">
                                <h3><?php echo $voResultadoPosicao5->descricao ?></h3>
                            </div>
                            <div class="row space-15 size-18">
                                <?php
                                $vsSqlPostsPosicao5 = "
                                    SELECT
                                        bp.titulo,
                                        bp.imagem,
                                        bp.texto,
                                        bp.url_amigavel AS url_noticia,
                                        sc.url_amigavel AS url_subcategoria,
                                        bp.data_publicacao,
                                        sc.descricao,
                                        DATE_FORMAT(data_publicacao, '%d/%m/%Y') AS data_publicacao
                                    FROM
                                        blog_postagem bp
                                        INNER JOIN blog_subcategorias sc on sc.descricao=sc.descricao AND sc.id_blog_subcategorias=sc.id_blog_subcategorias
                                    WHERE
                                        bp.data_publicacao < now() AND
                                        bp.id_blog_subcategorias=sc.id_blog_subcategorias AND
                                        sc.status=1 AND
                                        sc.posicao= $voResultadoPosicao5->posicao
                                    ORDER BY bp.data_publicacao DESC
                                    LIMIT 5
                                ";
                                $vrsExecutaPostsPosicao5 = mysqli_query($Conexao, $vsSqlPostsPosicao5) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));

                                $i = 1;
                                while ($voResultadoPostsPosicao5 = mysqli_fetch_object($vrsExecutaPostsPosicao5)) {
                                    if ($i <= 2) {
                                        ?>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="post-item white-card ver3 overlay space-15">
                                                <div class="wrap-images">
                                                    <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao5->url_subcategoria . "/" . $voResultadoPostsPosicao5->url_noticia ?>"><img class="img-responsive" src="<?php echo URL ?>wdadmin/uploads/blog_postagens/<?php echo $voResultadoPostsPosicao5->imagem ?>" title="<?php echo $voResultadoPostsPosicao5->titulo ?>" alt="<?php echo $voResultadoPostsPosicao5->titulo ?>"></a>
                                                    <div class="tag">
                                                        <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao5->data_publicacao ?></p>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao5->url_subcategoria . "/" . $voResultadoPostsPosicao5->url_noticia ?>"><?php echo $voResultadoPostsPosicao5->titulo ?></a></h2>
                                                    <?php echo substr($voResultadoPostsPosicao5->texto, 0, strrpos(substr($voResultadoPostsPosicao5->texto, 0, 85), ' ')) . '...'; ?><br>
                                                    <a class="read-more" href="<?php echo URL ?><?php echo $voResultadoPostsPosicao5->url_grupo ?>/<?php echo $voResultadoPostsPosicao5->url_subgrupo ?>/<?php echo $voResultadoPostsPosicao5->url_amigavel ?>">Ver Mais</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <div class="col-sm-12">
                                            <div class="post-bottom-footer box space-15">
                                                <div class="post-item white-card ver2 cat-1">
                                                    <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao5->url_subcategoria . "/" . $voResultadoPostsPosicao5->url_noticia ?>" title="<?php echo $voResultadoPostsPosicao5->titulo ?>">
                                                        <img class='img-responsive' src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoPostsPosicao5->imagem ?>" alt="<?php echo $voResultadoPostsPosicao5->titulo ?>" title="<?php echo $voResultadoPostsPosicao5->titulo ?>">
                                                    </a>
                                                    <div class="text">
                                                        <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostsPosicao5->url_subcategoria . "/" . $voResultadoPostsPosicao5->url_noticia ?>" title="<?php echo $voResultadoPostsPosicao5->titulo ?>"><?php echo $voResultadoPostsPosicao5->titulo ?></a></h2>
                                                        <div class="tag">
                                                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostsPosicao5->data_publicacao ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    $i++;
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div id="back-to-top">
                <i class="fa fa-long-arrow-up"></i>
            </div>

            <?php //RODAPÉ  ?>
            <?php
            include 'php/rodape.php'
            ?>

        </div>

        <?php //CSS  ?>
        <?php
        include 'php/css.php';
        ?>

        <?php //JAVASCRIPT  ?>
        <?php
        include 'php/js.php'
        ?>

    </body>    
</html>