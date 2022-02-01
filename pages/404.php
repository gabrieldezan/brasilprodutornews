<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <link rel="shortcut icon" href="<?php echo URL ?>wdadmin/uploads/informacoes_gerais/<?php echo $voResultadoConfiguracoes->favicon ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="<?php echo $voResultadoConfiguracoes->descricao ?>">
        <meta name="author" content="Web Dezan - Agência Digital">
        <meta name="robots" content="noindex" />
        <meta name="googlebot" content="noindex" />
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $voResultadoConfiguracoes->titulo . " - " . "404" ?>"/>
        <meta property="og:description" content="<?php echo $voResultadoConfiguracoes->descricao ?>"/>
        <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "404" ?>"/>
        <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "404" ?>"/>
        <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->nome_empresa ?>"/>
        <meta property="fb:admins" content="<?php echo $voResultadoConfiguracoes->facebook ?>"/>
        <title><?php echo $voResultadoConfiguracoes->titulo ?> - 404</title>
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
            <div class="container">
                <div class="row">
                    <div class="col-12" style="margin-top: 150px;">
                        <center>
                            <img src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" alt="<?php echo $voResultadoConfiguracoes->nome_empresa ?>" title="<?php echo $voResultadoConfiguracoes->nome_empresa ?>">
                            <br/>
                            <br/>
                            <br/>
                            <h1 style="font: 400 30px/28px 'Oswald';">404</h1>
                            <h2 style="color:#76af00;font: 400 18px/22px 'Oswald';">Página não encontrada</h2>
                            <br/>
                            <br/>
                            <a href="<?php echo URL ?>" class="link-v1">Voltar a Página Inicial</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <?php //CSS ?>
        <?php
        include 'php/css.php';
        ?>

        <?php
        /* JS */
        include 'php/js.php';
        ?>

    </body>

</html>