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
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $voResultadoConfiguracoes->titulo . " - " . "contato" ?>"/>
        <meta property="og:description" content="<?php echo $voResultadoConfiguracoes->descricao ?>"/>
        <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "contato" ?>"/>
        <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "contato" ?>"/>
        <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->nome_empresa ?>"/>
        <meta property="fb:admins" content="<?php echo $voResultadoConfiguracoes->facebook ?>"/>
        <title><?php echo $voResultadoConfiguracoes->titulo ?> - Contato</title>
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

            <?php
            include 'php/menu.php';
            ?>

            <div class="container margin-top-30">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single-post">
                            <iframe src="<?php echo $voResultadoConfiguracoes->mapa ?>" frameborder="0" style="border:0;width:100%;height:400px;" allowfullscreen=""></iframe>
                            <div class="blog-post-item cat-1 box margin-top-30">
                                <div class="title-v1">
                                    <h3>Entre em contato conosco</h3>
                                </div>
                                <div class="box">
                                    <form id="form_contato" class="form-horizontal space-50" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="vsUrl" name="vsUrl" value="<?php echo URL ?>" />
                                        <input type="hidden" id="vsEmailContato" name="vsEmailContato" value="<?php echo EMAIL_CONTATO ?>" />
                                        <input type="hidden" id="vsNomeEmpresa" name="vsNomeEmpresa" value="<?php echo $voResultadoConfiguracoes->nome_empresa ?>" />
                                        <div class="head">
                                            <div class="form-group col-md-4 space-30">
                                                <label class="control-label">Nome *</label>
                                                <input type="text" name="vsNome" id="vsNome" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-4 space-30">
                                                <label class="control-label">E-Mail *</label>
                                                <input type="email" name="vsEmail" id="vsEmail" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-4 space-30">
                                                <label class="control-label">Telefone</label>
                                                <input type="tel" name="vsTelefone" id="vsTelefone" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Sua Mensagem *</label>
                                            <textarea name="vsMensagem" id="vsMensagem" class="form-control" required></textarea>
                                        </div>
                                        <button id="botao_enviar_mensagem" type="submit" class="link-v1"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

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
        include 'php/css.php';
        ?>

        <?php //JAVASCRIPT ?>
        <?php
        include 'php/js.php'
        ?>

        <script src="<?php echo URL ?>js/jquery.mask.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>wdadmin/js/contato.js"></script>
        <link rel="stylesheet" href="<?php echo URL ?>wdadmin/assets/plugins/sweetalert/sweetalert.css">
        <script type="text/javascript" src="<?php echo URL ?>wdadmin/assets/plugins/sweetalert/sweetalert.min.js"></script>

    </body>
</html>