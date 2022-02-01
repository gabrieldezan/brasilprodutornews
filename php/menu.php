<header id="header" class="header-v1 white-background">
    <div class="search">
        <form class="form-search" action="#" method="get">
            <input type="hidden" id="vsUrl" name="vsUrl" value="<?php echo URL ?>"/>
            <input class="form-control" id="campo_buscar" name="campo_buscar" type="text">
            <button id="botao_buscar" class="button" type="button"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="box float-left">
                <p class="icon-menu-mobile"><i class="fa fa-bars"></i></p>
                <div class="logo">
                    <a href="<?php echo URL ?>">
                        <img src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" title="<?php echo $voResultadoConfiguracoes->titulo ?>" alt="<?php echo $voResultadoConfiguracoes->titulo ?>">
                    </a>
                </div>
                <div class="logo-mobile"><a href="<?php echo URL ?>"><img src="<?php echo URL ?>wdadmin/uploads/informacoes_gerais/<?php echo $voResultadoConfiguracoes->logo_principal ?>" title="<?php echo $voResultadoConfiguracoes->titulo ?>" alt="<?php echo $voResultadoConfiguracoes->logo_principal ?>"></a></div>

                <div class="box-right">
                    <div class="social">
                        <a href="https://www.facebook.com/<?php echo $voResultadoConfiguracoes->facebook ?>" target="blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/<?php echo $voResultadoConfiguracoes->instagram ?>" target="blank" title="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/<?php echo $voResultadoConfiguracoes->youtube ?>" target="blank" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?php echo str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>" target="blank"title="Whatsapp"><i class="fa fa-whatsapp"></i></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                            <div id="google_translate_element" class="boxTradutor"></div>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:trocarIdioma('pt')">Mostrar Original</a>
                                <a class="dropdown-item" href="javascript:trocarIdioma('de')"><img src="<?php echo URL ?>images/alemanha.png" class="img-responsive" />&nbsp;Alemão</a>
                                <a class="dropdown-item" href="javascript:trocarIdioma('es')"><img src="<?php echo URL ?>images/espanha.png" class="img-responsive" />&nbsp;Espanhol</a>
                                <a class="dropdown-item" href="javascript:trocarIdioma('en')"><img src="<?php echo URL ?>images/estados-unidos.png" class="img-responsive" />&nbsp;Inglês</a>
                                <a class="dropdown-item" href="javascript:trocarIdioma('fr')"><img src="<?php echo URL ?>images/franca.png" class="img-responsive" />&nbsp;Francês</a>
                            </div>
                        </li>
                    </div>
                </div>
            </div>                
        </div>
    </div>
    <div class="container">
        <nav class="mega-menu">
            <ul class="nav navbar-nav" id="navbar">
                <?php
                $vsSqlCategorias = "
                    SELECT
                        sc.descricao,
                        sc.url_amigavel,
                        ct.url_amigavel AS url_grupo
                    FROM
                        blog_subcategorias sc
                        INNER JOIN blog_categorias ct ON sc.id_blog_categorias = ct.id_blog_categorias
                    WHERE
                        sc.status = 1 AND
                        sc.id_blog_categorias = 4
                    ORDER BY sc.posicao, sc.descricao
                ";
                $vrsExecutaCategorias = mysqli_query($Conexao, $vsSqlCategorias) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                while ($voResultadoCategorias = mysqli_fetch_object($vrsExecutaCategorias)) {
                    ?>
                    <li class="level1 hover-menu"><a href="<?php echo URL . $voResultadoCategorias->url_amigavel ?>"><?php echo $voResultadoCategorias->descricao ?></a></li>
                    <?php
                }
                ?>
                <li class="level1 hover-menu">
                    <?php
                    $vsSqlCotacao = "SELECT titulo, link FROM informacoes WHERE id_paginas = 11";
                    $vrsExecutaCotacao = mysqli_query($Conexao, $vsSqlCotacao) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                    while ($voResultadoCotacao = mysqli_fetch_object($vrsExecutaCotacao)) {
                        ?>
                        <a target="blank" href="<?php echo $voResultadoCotacao->link ?>"><?php echo $voResultadoCotacao->titulo ?></a>
                        <?php
                    }
                    ?>
                </li>
                <li class="level1 hover-menu">
                    <a href="<?php echo URL . "sobre" ?>">Sobre</a>
                </li>
                <li class="level1 hover-menu">
                    <a href="<?php echo URL . "contato" ?>">Contato</a>
                </li>
            </ul>
        </nav>
    </div>
</header>