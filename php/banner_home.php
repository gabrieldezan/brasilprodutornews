<?php
// MONTA BANNERS
$vsSqlBanner = "
    SELECT
        bp.titulo,
        bp.imagem,
        DATE_FORMAT(bp.data_publicacao, '%d/%m/%Y às %H:%i') AS data_publicacao_br,
        bs.descricao AS subcategorias,
        bs.url_amigavel AS url_subcategorias,
        bp.url_amigavel AS url_post,
        bs.cor_hexadecimal
    FROM
        blog_postagem bp
        INNER JOIN blog_subcategorias bs ON bp.id_blog_subcategorias = bs.id_blog_subcategorias
    WHERE
        bp.data_publicacao < now() AND
        bs.status = 1
    ORDER BY
        data_publicacao DESC
        LIMIT 15
";
$vrsExecutaBanner = mysqli_query($Conexao, $vsSqlBanner) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));

$x = 0;
while ($row = mysqli_fetch_array($vrsExecutaBanner)) {
    $item_banner[$x]['titulo'] = $row['titulo'];
    $item_banner[$x]['imagem'] = $row['imagem'];
    $item_banner[$x]['data_publicacao_br'] = $row['data_publicacao_br'];
    $item_banner[$x]['subcategorias'] = $row['subcategorias'];
    $item_banner[$x]['url_subcategorias'] = $row['url_subcategorias'];
    $item_banner[$x]['url_post'] = $row['url_post'];
    $item_banner[$x]['cor_hexadecimal'] = $row['cor_hexadecimal'];
    $x++;
}
?>
<div class="home3-slideshow home4_sileshow float-left box">
    <div class="container">
        <div class="slider-one-item nav-ver3 hidden-desktop">
            <div class="items">
                <div class="col-md-3">
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[0]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[0]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[0]['url_subcategorias'] . "/" . $item_banner[0]['url_post'] ?>" title="<?php echo $item_banner[0]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[0]['imagem'] ?>" alt="<?php echo $item_banner[0]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[0]['url_subcategorias'] . "/" . $item_banner[0]['url_post'] ?>" title="<?php echo $item_banner[0]['titulo'] ?>"><?php echo $item_banner[0]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[0]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[1]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[1]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[1]['url_subcategorias'] . "/" . $item_banner[1]['url_post'] ?>" title="<?php echo $item_banner[1]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[1]['imagem'] ?>" alt="<?php echo $item_banner[1]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[1]['url_subcategorias'] . "/" . $item_banner[1]['url_post'] ?>" title="<?php echo $item_banner[1]['titulo'] ?>"><?php echo $item_banner[1]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[1]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item-center">
                    <div class="post-item cat-3 ver1 overlay">
                        <span style="background: <?php echo $item_banner[2]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[2]['subcategorias'] ?></span>
                        <a class="images" href="<?php echo URL . "noticia/" . $item_banner[2]['url_subcategorias'] . "/" . $item_banner[2]['url_post'] ?>" title="<?php echo $item_banner[2]['titulo'] ?>">
                            <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[2]['imagem'] ?>" alt="<?php echo $item_banner[2]['titulo'] ?>" alt="<?php echo $item_banner[2]['titulo'] ?>">
                        </a>
                        <div class="text">
                            <h2><a href="<?php echo URL . "noticia/" . $item_banner[2]['url_subcategorias'] . "/" . $item_banner[2]['url_post'] ?>" title="<?php echo $item_banner[2]['titulo'] ?>"><?php echo $item_banner[2]['titulo'] ?></a></h2>
                            <div class="tag">
                                <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[2]['data_publicacao_br'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item-end">
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[3]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[3]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[3]['url_subcategorias'] . "/" . $item_banner[3]['url_post'] ?>" title="<?php echo $item_banner[3]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[3]['imagem'] ?>" alt="<?php echo $item_banner[3]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[3]['url_subcategorias'] . "/" . $item_banner[3]['url_post'] ?>" title="<?php echo $item_banner[3]['titulo'] ?>"><?php echo $item_banner[3]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[3]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[4]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[4]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[4]['url_subcategorias'] . "/" . $item_banner[4]['url_post'] ?>" title="<?php echo $item_banner[4]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[4]['imagem'] ?>" alt="<?php echo $item_banner[4]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[4]['url_subcategorias'] . "/" . $item_banner[4]['url_post'] ?>" title="<?php echo $item_banner[4]['titulo'] ?>"><?php echo $item_banner[4]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[4]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="col-md-3">
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[4]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[4]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[5]['url_subcategorias'] . "/" . $item_banner[5]['url_post'] ?>" title="<?php echo $item_banner[5]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[5]['imagem'] ?>" alt="<?php echo $item_banner[5]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[5]['url_subcategorias'] . "/" . $item_banner[5]['url_post'] ?>" title="<?php echo $item_banner[5]['titulo'] ?>"><?php echo $item_banner[5]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[5]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[6]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[6]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[6]['url_subcategorias'] . "/" . $item_banner[6]['url_post'] ?>" title="<?php echo $item_banner[6]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[6]['imagem'] ?>" alt="<?php echo $item_banner[6]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[6]['url_subcategorias'] . "/" . $item_banner[6]['url_post'] ?>" title="<?php echo $item_banner[6]['titulo'] ?>"><?php echo $item_banner[6]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[6]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item-center">
                    <div class="post-item cat-3 ver1 overlay">
                        <span style="background: <?php echo $item_banner[7]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[7]['subcategorias'] ?></span>
                        <a class="images" href="<?php echo URL . "noticia/" . $item_banner[7]['url_subcategorias'] . "/" . $item_banner[7]['url_post'] ?>" title="<?php echo $item_banner[7]['titulo'] ?>">
                            <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[7]['imagem'] ?>" alt="<?php echo $item_banner[7]['titulo'] ?>" alt="<?php echo $item_banner[7]['titulo'] ?>">
                        </a>
                        <div class="text">
                            <h2><a href="<?php echo URL . "noticia/" . $item_banner[7]['url_subcategorias'] . "/" . $item_banner[7]['url_post'] ?>" title="<?php echo $item_banner[7]['titulo'] ?>"><?php echo $item_banner[7]['titulo'] ?></a></h2>
                            <div class="tag">
                                <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[7]['data_publicacao_br'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item-end">
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[8]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[8]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[8]['url_subcategorias'] . "/" . $item_banner[8]['url_post'] ?>" title="<?php echo $item_banner[8]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[8]['imagem'] ?>" alt="<?php echo $item_banner[8]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[8]['url_subcategorias'] . "/" . $item_banner[8]['url_post'] ?>" title="<?php echo $item_banner[8]['titulo'] ?>"><?php echo $item_banner[8]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[8]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[9]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[9]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[9]['url_subcategorias'] . "/" . $item_banner[9]['url_post'] ?>" title="<?php echo $item_banner[9]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[9]['imagem'] ?>" alt="<?php echo $item_banner[9]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[9]['url_subcategorias'] . "/" . $item_banner[9]['url_post'] ?>" title="<?php echo $item_banner[9]['titulo'] ?>"><?php echo $item_banner[9]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[10]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="col-md-3">
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[10]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[10]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[10]['url_subcategorias'] . "/" . $item_banner[10]['url_post'] ?>" title="<?php echo $item_banner[10]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[10]['imagem'] ?>" alt="<?php echo $item_banner[10]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[10]['url_subcategorias'] . "/" . $item_banner[10]['url_post'] ?>" title="<?php echo $item_banner[10]['titulo'] ?>"><?php echo $item_banner[10]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[10]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[11]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[11]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[11]['url_subcategorias'] . "/" . $item_banner[11]['url_post'] ?>" title="<?php echo $item_banner[11]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[11]['imagem'] ?>" alt="<?php echo $item_banner[11]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[11]['url_subcategorias'] . "/" . $item_banner[11]['url_post'] ?>" title="<?php echo $item_banner[11]['titulo'] ?>"><?php echo $item_banner[11]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[11]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item-center">
                    <div class="post-item cat-3 ver1 overlay">
                        <span style="background: <?php echo $item_banner[12]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[12]['subcategorias'] ?></span>
                        <a class="images" href="<?php echo URL . "noticia/" . $item_banner[12]['url_subcategorias'] . "/" . $item_banner[12]['url_post'] ?>" title="<?php echo $item_banner[12]['titulo'] ?>">
                            <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[12]['imagem'] ?>" alt="<?php echo $item_banner[12]['titulo'] ?>" alt="<?php echo $item_banner[12]['titulo'] ?>">
                        </a>
                        <div class="text">
                            <h2><a href="<?php echo URL . "noticia/" . $item_banner[12]['url_subcategorias'] . "/" . $item_banner[12]['url_post'] ?>" title="<?php echo $item_banner[12]['titulo'] ?>"><?php echo $item_banner[12]['titulo'] ?></a></h2>
                            <div class="tag">
                                <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[12]['data_publicacao_br'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item-end">
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[13]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[13]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[13]['url_subcategorias'] . "/" . $item_banner[13]['url_post'] ?>" title="<?php echo $item_banner[13]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[13]['imagem'] ?>" alt="<?php echo $item_banner[13]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[13]['url_subcategorias'] . "/" . $item_banner[13]['url_post'] ?>" title="<?php echo $item_banner[13]['titulo'] ?>"><?php echo $item_banner[13]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[13]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="post-item cat-3 ver1 overlay">
                            <span style="background: <?php echo $item_banner[14]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[14]['subcategorias'] ?></span>
                            <a class="images" href="<?php echo URL . "noticia/" . $item_banner[14]['url_subcategorias'] . "/" . $item_banner[14]['url_post'] ?>" title="<?php echo $item_banner[14]['titulo'] ?>">
                                <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[14]['imagem'] ?>" alt="<?php echo $item_banner[14]['titulo'] ?>">
                            </a>
                            <div class="text">
                                <h2><a href="<?php echo URL . "noticia/" . $item_banner[14]['url_subcategorias'] . "/" . $item_banner[14]['url_post'] ?>" title="<?php echo $item_banner[14]['titulo'] ?>"><?php echo $item_banner[14]['titulo'] ?></a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[14]['data_publicacao_br'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-owl-mobile home3-slide-owl nav-ver5">
            <div class="item">
                <div class="post-item cat-3 ver1 overlay">
                    <span style="background: <?php echo $item_banner[0]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[0]['subcategorias'] ?></span>
                    <a class="images" href="<?php echo URL . "noticia/" . $item_banner[0]['url_subcategorias'] . "/" . $item_banner[0]['url_post'] ?>" title="<?php echo $item_banner[0]['titulo'] ?>">
                        <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[0]['imagem'] ?>" alt="<?php echo $item_banner[0]['titulo'] ?>">
                    </a>
                    <div class="text">
                        <h2><a href="<?php echo URL . "noticia/" . $item_banner[0]['url_subcategorias'] . "/" . $item_banner[0]['url_post'] ?>" title="<?php echo $item_banner[0]['titulo'] ?>"><?php echo $item_banner[0]['titulo'] ?></a></h2>
                        <div class="tag">
                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[0]['data_publicacao_br'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item cat-3 ver1 overlay">
                    <span style="background: <?php echo $item_banner[1]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[1]['subcategorias'] ?></span>
                    <a class="images" href="<?php echo URL . "noticia/" . $item_banner[1]['url_subcategorias'] . "/" . $item_banner[1]['url_post'] ?>" title="<?php echo $item_banner[1]['titulo'] ?>">
                        <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[1]['imagem'] ?>" alt="<?php echo $item_banner[1]['titulo'] ?>">
                    </a>
                    <div class="text">
                        <h2><a href="<?php echo URL . "noticia/" . $item_banner[1]['url_subcategorias'] . "/" . $item_banner[1]['url_post'] ?>" title="<?php echo $item_banner[1]['titulo'] ?>"><?php echo $item_banner[1]['titulo'] ?></a></h2>
                        <div class="tag">
                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[1]['data_publicacao_br'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item cat-3 ver1 overlay">
                    <span style="background: <?php echo $item_banner[2]['cor_hexadecimal'] ?>" class="lable"><?php echo $item_banner[2]['subcategorias'] ?></span>
                    <a class="images" href="<?php echo URL . "noticia/" . $item_banner[2]['url_subcategorias'] . "/" . $item_banner[2]['url_post'] ?>" title="<?php echo $item_banner[2]['titulo'] ?>">
                        <img src="<?php echo URL . "wdadmin/uploads/blog_postagens/" . $item_banner[2]['imagem'] ?>" alt="<?php echo $item_banner[2]['titulo'] ?>">
                    </a>
                    <div class="text">
                        <h2><a href="<?php echo URL . "noticia/" . $item_banner[2]['url_subcategorias'] . "/" . $item_banner[2]['url_post'] ?>" title="<?php echo $item_banner[2]['titulo'] ?>"><?php echo $item_banner[2]['titulo'] ?></a></h2>
                        <div class="tag">
                            <p class="date"><i class="fa fa-clock-o"></i><?php echo $item_banner[2]['data_publicacao_br'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>