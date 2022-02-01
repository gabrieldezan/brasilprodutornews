<footer id="footer" class="footer-v1">         
    <div class="container padding-bottom-35">
        <div class="row">
            <div class="col-md-12 center padding-bottom-30">
                <a class="logo-footer"><img src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" title="<?php echo $voResultadoConfiguracoes->titulo ?>" alt="<?php echo $voResultadoConfiguracoes->titulo ?>"></a>
            </div>
        </div>
        <div class="social-bottom margin-bottom-30">
            <a class="margin-0-10" href="https://www.facebook.com/<?php echo $voResultadoConfiguracoes->facebook ?>" target="blank" title="Facebook"><i class="fa fa-facebook-square fa-3x"></i>
                <h2 class="texto-rodape">Facebook</h2>
            </a>
            <a class="margin-0-10" href="https://www.instagram.com/<?php echo $voResultadoConfiguracoes->instagram ?>" target="blank" title="Instagram"><i class="fa fa-instagram fa-3x"></i>
                <h2 class="texto-rodape">Instagram</h2>
            </a>
            <a class="margin-0-10" href="https://www.youtube.com/<?php echo $voResultadoConfiguracoes->youtube ?>" target="blank" title="Youtube"><i class="fa fa-youtube-play fa-3x"></i>
                <h2 class="texto-rodape">Youtube</h2>
            </a>
            <a class="margin-0-10" href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?php echo str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>" target="blank" title="Whatsapp"><i class="fa fa-whatsapp fa-3x"></i>
                <h2 class="texto-rodape">Whatsapp</h2>
            </a>
        </div>
        <div class="pages-footer center">
            <a class="margin-0-30" href="<?php echo URL . "sobre" ?>">Sobre</a>
            <?php
            $vsSqlCotacao = "SELECT titulo, link FROM informacoes WHERE id_paginas = 11";
            $vrsExecutaCotacao = mysqli_query($Conexao, $vsSqlCotacao) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
            while ($voResultadoCotacao = mysqli_fetch_object($vrsExecutaCotacao)) {
                ?>
                <a target="blank" class="margin-0-30" href="<?php echo $voResultadoCotacao->link ?>"><?php echo $voResultadoCotacao->titulo ?></a>
                <?php
            }
            ?>
            <a class="margin-0-30" href="<?php echo URL . "contato" ?>">Contato</a>
            <?php
            $vsSqlClima = "SELECT titulo, link FROM informacoes WHERE id_informacoes = 41";
            $vrsExecutaClima = mysqli_query($Conexao, $vsSqlClima) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
            while ($voResultadoClima = mysqli_fetch_object($vrsExecutaClima)) {
                ?>
                <a target="blank" class="margin-0-30" href="<?php echo $voResultadoClima->link ?>"><?php echo $voResultadoClima->titulo ?></a>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="float-left"><a href="<?php echo URL ?>"><?php echo $voResultadoConfiguracoes->nome_empresa ?></a>. Todos os direitos reservados</p>
            <div class="float-right align-right">
                <a href="https://webdezan.com.br" target="blank"><img src="<?php echo URL . "images/logo-wd.png" ?>" title="Web Dezan - Agência Digital" alt="Web Dezan - Agência Digital"></a>
            </div>
        </div>
    </div>
</footer>