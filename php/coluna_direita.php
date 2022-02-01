<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
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
                        sc.descricao AS subcategoria,
                        sc.cor_hexadecimal,
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
                        <img class="img-responsive" src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $voResultadoMaisVisitados->imagem ?>" title="<?php echo $voResultadoMaisVisitados->titulo ?>" alt="<?php echo $voResultadoMaisVisitados->titulo ?>"></a>
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

    <aside class="widget">
        <?php
        $vsSqlAnuncioColuna = "SELECT titulo, link, imagem_destaque FROM informacoes WHERE id_paginas = 15 ORDER BY id_informacoes DESC LIMIT 1";
        $vrsExecutaAnuncioColuna = mysqli_query($Conexao, $vsSqlAnuncioColuna) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
        while ($voResultadoAnuncioColuna = mysqli_fetch_object($vrsExecutaAnuncioColuna)) {
            ?>
            <div class="banner">
                <a target="_blank" href="<?php echo $voResultadoAnuncioColuna->link ?>">
                    <img class="img-responsive" src="<?php echo URL . "wdadmin/uploads/informacoes/" . $voResultadoAnuncioColuna->imagem_destaque ?>" title="<?php echo $voResultadoAnuncioColuna->titulo ?>" alt="<?php echo $voResultadoAnuncioColuna->titulo ?>">
                </a>
            </div>
            <?php
        }
        ?>
    </aside>
</div>