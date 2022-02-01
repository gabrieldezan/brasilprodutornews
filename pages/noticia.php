<?php
$vsSqlPostagem = "
    SELECT
        bp.titulo,
        bp.imagem,
        bp.id_blog_postagem,
        bp.texto,
        bp.data_publicacao,
        bp.video,
        DATE_FORMAT(data_publicacao, '%d/%m/%Y') AS data_publicacao_formatada,
        sc.id_blog_subcategorias,
        sc.descricao,
        sc.cor_hexadecimal,
        sc.url_amigavel AS url_subcategoria,
        ct.url_amigavel AS url_categoria
    FROM
        blog_postagem bp
        LEFT JOIN blog_subcategorias sc on sc.descricao = sc.descricao
        LEFT JOIN blog_categorias ct ON ct.url_amigavel = ct.url_amigavel AND ct.descricao = ct.descricao
    WHERE
        sc.id_blog_categorias = ct.id_blog_categorias AND
        bp.data_publicacao < now() AND
        bp.url_amigavel = '$parametro' AND
        bp.id_blog_subcategorias = sc.id_blog_subcategorias
";
$vrsExecutaPostagem = mysqli_query($Conexao, $vsSqlPostagem) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
$vrsQntPostagem = mysqli_num_rows($vrsExecutaPostagem);

if ($vrsQntPostagem > 0) {
    $voResultadoPostagem = mysqli_fetch_object($vrsExecutaPostagem);

    $vsSqlView = "UPDATE blog_postagem SET visualizacoes = visualizacoes+1 WHERE url_amigavel= '$parametro'";
    mysqli_query($Conexao, $vsSqlView) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));

    $vsSqlPostagemGaleria = "SELECT descricao, imagem FROM blog_postagem_galeria WHERE id_blog_postagem = '$voResultadoPostagem->id_blog_postagem'";
    $vrsExecutaPostagemGaleria = mysqli_query($Conexao, $vsSqlPostagemGaleria) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
    $vrsQntPostagemGaleria = mysqli_num_rows($vrsExecutaPostagemGaleria);
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="description" content="<?php echo substr(strip_tags(trim($voResultadoPostagem->texto)), 0, strrpos(substr(strip_tags(trim($voResultadoPostagem->texto)), 0, 197), ' ')) . '...'; ?>">
            <meta name="author" content="Web Dezan - Agência Digital">
            <meta name="robots" content="index, follow" />
            <meta name="googlebot" content="index, follow" />
            <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "noticia/" . $voResultadoPostagem->url_subcategoria . "/" . $parametro ?>"/>
            <meta property="og:type" content="website"/>
            <meta property="og:title" content="<?php echo $voResultadoPostagem->titulo . " - " . $voResultadoConfiguracoes->titulo ?>"/>
            <meta property="og:description" content="<?php echo substr(strip_tags(trim($voResultadoPostagem->texto)), 0, strrpos(substr(strip_tags(trim($voResultadoPostagem->texto)), 0, 197), ' ')) . '...'; ?>"/>
            <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] ?><?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoPostagem->imagem ?>"/>
            <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->nome_empresa ?>"/>
            <meta property="fb:admins" content="<?php echo $voResultadoConfiguracoes->facebook ?>"/>
            <link rel="shortcut icon" type="image/png" href="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->favicon ?>"/>
            <title><?php echo $voResultadoPostagem->titulo ?> - <?php echo $voResultadoConfiguracoes->titulo ?></title>
            <style type="text/css">.awe-body-loading{overflow:hidden}.awe-page-loading{position:fixed;z-index:9999999;background:#fff;left:0;top:0;width:100%;height:100%}.awe-loading-wrapper{text-align:center;width:150px;height:100px;position:absolute;top:50%;left:50%;margin-top:-50px;margin-left:-70px}.awe-loading-wrapper .awe-loading-icon{font-size:75px;line-height:1;margin-bottom:10px;-webkit-animation-name:aweIcon;animation-name:aweIcon;-webkit-animation-duration:4s;animation-duration:4s;animation-iteration-count:infinite}.awe-loading-wrapper .awe-loading-icon img{width:100%}.awe-loading-wrapper .awe-loading-icon .icon{cursor:default}.awe-loading-wrapper .progress{background:#eee;border-radius:0;box-shadow:none;margin-bottom:0;height:2px}.awe-loading-wrapper .progress .progress-bar{background:#76af00;box-shadow:none;width:100%;-webkit-animation-name:aweProgress;animation-name:aweProgress;-webkit-animation-duration:3s;animation-duration:3s}</style>
        </head>
        <body>
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

                <?php // MENU ?>
                <?php
                include 'php/menu.php'
                ?>

                <div class="container margin-top-30">
                    <div class="row">
                        <div class="col-md-8 col-ms-8 col-xs-12">
                            <div class="single-post">
                                <div class="blog-post-item cat-1 box">
                                    <div class="blog-post-images">
                                        <a class="hover-images"><img class="img-responsive" src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoPostagem->imagem ?>" title="<?php echo $voResultadoPostagem->titulo ?>" alt="<?php echo $voResultadoPostagem->titulo ?>"></a>
                                    </div>
                                    <div class="content">
                                        <h3><?php echo $voResultadoPostagem->titulo ?></h3>
                                        <div class="tag">
                                            <p style="background: <?php echo $voResultadoPostagem->cor_hexadecimal ?>" class="label"><?php echo $voResultadoPostagem->descricao ?></p>
                                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostagem->data_publicacao_formatada ?></p>
                                        </div>
                                        <?php echo $voResultadoPostagem->texto ?><br>
                                        <?php if ($voResultadoPostagem->video != null || !empty($voResultadoPostagem->video)) { ?>
                                            <?php echo $voResultadoPostagem->video ?>
                                        <?php } ?>
                                    </div><br>
                                    <?php
                                    if ($vrsQntPostagemGaleria > 0) {
                                        ?>
                                        <div class="wrap-slide-youtube box">
                                            <div class="container-fluid">
                                                <div class="title-v2">
                                                    <h3>GALERIA DE IMAGENS</h3>
                                                </div>
                                                <div class="tp-banner-container hidden-dot hidden-nav ver2 space_70 hidden-desktop position-initial">
                                                    <div class="tp-banner">
                                                        <ul>
                                                            <?php
                                                            while ($voResultadoPostagemGaleria = mysqli_fetch_object($vrsExecutaPostagemGaleria)) {
                                                                ?>
                                                                <li data-transition="random" data-slotamount="6" data-masterspeed="1000"  data-saveperformance="on"  data-title="Intro Slide">
                                                                    <img src="<?php echo URL . "wdadmin/uploads/blog_postagens_galeria/" . $voResultadoPostagemGaleria->imagem ?>" title="<?php echo $voResultadoPostagemGaleria->descricao ?>" alt="<?php echo $voResultadoPostagemGaleria->descricao ?>" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                                                    <div class="tp-caption title_slider"
                                                                         data-x="388"
                                                                         data-y="290"
                                                                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                                         data-speed="800"
                                                                         data-start="1600"
                                                                         data-easing="Power4.easeOut"
                                                                         data-endspeed="300"
                                                                         data-endeasing="Power1.easeIn"
                                                                         data-captionhidden="on"
                                                                         style="z-index: 9">
                                                                    </div>
                                                                    <div class="tp-caption comment_slider post-item cat-1"
                                                                         data-x="400"
                                                                         data-y="438"
                                                                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                                         data-speed="800"
                                                                         data-start="1600"
                                                                         data-easing="Power4.easeOut"
                                                                         data-endspeed="300"
                                                                         data-endeasing="Power1.easeIn"
                                                                         data-captionhidden="on"
                                                                         style="z-index: 9">
                                                                    </div>
                                                                </li>
                                                                <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <div class="tp-bannertimer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <p class="tag-cat"><span>Compartilhe</span>
                                    <a href="http://www.facebook.com/sharer.php?u=<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "noticia/" . $voResultadoPostagem->url_subcategoria . "/" . $parametro ?>&title=<?php echo $voResultadoPostagem->titulo ?>" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable');
                                            return false;" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="http://twitter.com/share?url=<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "noticia/" . $voResultadoPostagem->url_subcategoria . "/" . $parametro ?>&title=<?php echo $voResultadoPostagem->titulo ?>" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable');
                                            return false;" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="http://pinterest.com/pin/create/button/?url=<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "noticia/" . $voResultadoPostagem->url_subcategoria . "/" . $parametro ?>&amp;media=<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoPostagem->imagem ?>&amp;description=<?php echo substr(strip_tags(trim($voResultadoPostagem->descricao)), 0, strrpos(substr(strip_tags(trim($voResultadoPostagem->descricao)), 0, 140), ' ')) . '...'; ?>" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable');
                                            return false;" rel="nofollow" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=Leia mais em: <?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "noticia/" . $voResultadoPostagem->url_subcategoria . "/" . $parametro ?>" onclick="window.open(this.href, 'windowName', 'width=600, height=400, left=24, top=24, scrollbars, resizable');
                                            return false;" rel="nofollow" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                </p>
                            </div>
                            <div class="title-v1 box">
                                <h3>POSTS RELACIONADOS</h3>
                            </div>
                            <div class="slider-two-item box float-left space-40 nav-ver2 nav-white">
                                <?php
                                $vsSqlPostagemsRelacionados = "
                                    SELECT
                                        bp.titulo,
                                        bp.imagem,
                                        bp.texto,
                                        sc.descricao,
                                        sc.cor_hexadecimal,
                                        sc.descricao AS subcategoria,
                                        bp.url_amigavel AS url_noticia,
                                        sc.url_amigavel AS url_subcategoria,
                                        ct.url_amigavel AS url_categoria,
                                        bp.data_publicacao,
                                        DATE_FORMAT(data_publicacao, '%d/%m/%Y') AS data_publicacao_formatada
                                    FROM
                                        blog_postagem bp
                                        LEFT JOIN blog_subcategorias sc ON bp.id_blog_subcategorias = sc.id_blog_subcategorias
                                        LEFT JOIN blog_categorias ct ON ct.id_blog_categorias = sc.id_blog_categorias
                                    WHERE
                                        bp.data_publicacao < now() AND
                                        bp.id_blog_subcategorias = sc.id_blog_subcategorias AND
                                        bp.id_blog_postagem !=$voResultadoPostagem->id_blog_postagem AND
                                        sc.id_blog_subcategorias = $voResultadoPostagem->id_blog_subcategorias
                                    LIMIT 4
                                ";
                                $vrsExecutaPostagemsRelacionados = mysqli_query($Conexao, $vsSqlPostagemsRelacionados) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                while ($voResultadoPostagemsRelacionados = mysqli_fetch_object($vrsExecutaPostagemsRelacionados)) {
                                    ?>
                                    <div class="post-item ver3 overlay">
                                        <span class="lable" style="top:23px; left:23px; background: <?php echo $voResultadoPostagemsRelacionados->cor_hexadecimal ?>"><?php echo $voResultadoPostagemsRelacionados->subcategoria ?></span>
                                        <div class="wrap-images">
                                            <a class="images" href="<?php echo URL . "noticia/" . $voResultadoPostagemsRelacionados->url_subcategoria . "/" . $voResultadoPostagemsRelacionados->url_noticia ?>"><img class='img-responsive' src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoPostagemsRelacionados->imagem ?>" title="<?php echo $voResultadoPostagemsRelacionados->titulo ?>" alt="<?php echo $voResultadoPostagemsRelacionados->titulo ?>"></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="<?php echo URL . "noticia/" . $voResultadoPostagemsRelacionados->url_subcategoria . "/" . $voResultadoPostagemsRelacionados->url_noticia ?>"><?php echo $voResultadoPostagemsRelacionados->titulo ?></a></h2>
                                            <div class="tag">
                                                <p class="date"><i class="fa fa-clock-o"></i><?php echo $voResultadoPostagemsRelacionados->data_publicacao_formatada ?></p>
                                            </div>
                                            <?php echo substr($voResultadoPostagemsRelacionados->texto, 0, strrpos(substr($voResultadoPostagemsRelacionados->texto, 0, 110), ' ')) . '...'; ?><br/>
                                            <a class="read-more" href="<?php echo URL . "noticia/" . $voResultadoPostagemsRelacionados->url_subcategoria . "/" . $voResultadoPostagemsRelacionados->url_noticia ?>">ver mais</a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                        <?php //COLUNA DIREITA ?>
                        <?php
                        include 'php/coluna_direita.php'
                        ?>
                    </div>
                </div>

                <div id="back-to-top">
                    <i class="fa fa-long-arrow-up"></i>
                </div>

                <?php //RODAPÉ ?>
                <?php
                include 'php/rodape.php'
                ?>

            </div>

            <?php //CSS ?>
            <?php
            include 'php/css.php'
            ?>

            <?php //JAVASCRIPT ?>
            <?php
            include 'php/js.php'
            ?>

        </body>
    </html>
    <?php
} else {
    include "pages/404.php";
}