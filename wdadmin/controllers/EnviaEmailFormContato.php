<?php

require_once "../class/class.phpmailer.php";

/* ARMAZENA EM VARIÁVEIS */
$vsNome = $_POST["vsNome"];
$vsEmail = $_POST["vsEmail"];
$vsAssunto = $_POST["vsAssunto"];
$vsMensagem = $_POST["vsMensagem"];
$vsEmailContato = $_POST["vsEmailContato"];
$vsNomeEmpresa = $_POST["vsNomeEmpresa"];

try {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = "UTF-8";
    $mail->Encoding = 'base64';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "mail.webdezan.com.br";
    $mail->Port = 465;
    $mail->Username = "naoresponda@webdezan.com.br";
    $mail->Password = "!@#nr!@#";
    $mail->From = "naoresponda@webdezan.com.br";
    $mail->FromName = '=?utf-8?B?' . base64_encode("Não Responda") . '?=';
    $mail->AddAddress($vsEmailContato, '=?utf-8?B?' . base64_encode($vsNomeEmpresa) . '?=');
    $mail->IsHTML(true);
    $mail->Subject = '=?utf-8?B?' . base64_encode("Contato via E-mail") . '?=';
    $mail->Body = "
        <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml'>
            <head>
                <title>Web Dezan - Envios de E-mail</title>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                <style type='text/css'>
                    * {
                        -ms-text-size-adjust:100%;
                        -webkit-text-size-adjust:none;
                        -webkit-text-resize:100%;
                        text-resize:100%;
                    }
                    a{
                        outline:none;
                        color:#40aceb;
                        text-decoration:underline;
                    }
                    a:hover{text-decoration:none !important;}
                    .nav a:hover{text-decoration:underline !important;}
                    .title a:hover{text-decoration:underline !important;}
                    .title-2 a:hover{text-decoration:underline !important;}
                    .btn:hover{opacity:0.8;}
                    .btn a:hover{text-decoration:none !important;}
                    .btn{
                        -webkit-transition:all 0.3s ease;
                        -moz-transition:all 0.3s ease;
                        -ms-transition:all 0.3s ease;
                        transition:all 0.3s ease;
                    }
                    #corpo_mensagem img{max-width:500px!important;height:auto!important;}
                    table td {border-collapse: collapse !important;}
                    .ExternalClass, .ExternalClass a, .ExternalClass span, .ExternalClass b, .ExternalClass br, .ExternalClass p, .ExternalClass div{line-height:inherit;}
                    @media only screen and (max-width:500px) {
                        table[class='flexible']{width:100% !important;}
                        table[class='center']{
                            float:none !important;
                            margin:0 auto !important;
                        }
                        *[class='hide']{
                            display:none !important;
                            width:0 !important;
                            height:0 !important;
                            padding:0 !important;
                            font-size:0 !important;
                            line-height:0 !important;
                        }
                        td[class='img-flex'] img{
                            width:100% !important;
                            height:auto !important;
                        }
                        td[class='aligncenter']{text-align:center !important;}
                        th[class='flex']{
                            display:block !important;
                            width:100% !important;
                        }
                        td[class='wrapper']{padding:0 !important;}
                        td[class='holder']{padding:30px 15px 20px !important;}
                        td[class='nav']{
                            padding:20px 0 0 !important;
                            text-align:center !important;
                        }
                        td[class='h-auto']{height:auto !important;}
                        td[class='description']{padding:30px 20px !important;}
                        td[class='i-120'] img{
                            width:120px !important;
                            height:auto !important;
                        }
                        td[class='footer']{padding:5px 20px 20px !important;}
                        td[class='footer'] td[class='aligncenter']{
                            line-height:25px !important;
                            padding:20px 0 0 !important;
                        }
                        tr[class='table-holder']{
                            display:table !important;
                            width:100% !important;
                        }
                        th[class='thead']{display:table-header-group !important; width:100% !important;}
                        th[class='tfoot']{display:table-footer-group !important; width:100% !important;}
                    }
                </style>
            </head>
            <body style='margin:0; padding:0;' bgcolor='#eaeced'>
                <table style='min-width:320px;' width='100%' cellspacing='0' cellpadding='0' bgcolor='#eaeced'>
                    <tr>
                        <td class='hide'>
                            <table width='600' cellpadding='0' cellspacing='0' style='width:600px !important;'>
                                <tr>
                                    <td style='min-width:600px; font-size:0; line-height:0;'>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class='wrapper' style='padding:0 10px;'>
                            <table data-module='module-2' data-thumb='thumbnails/02.png' width='100%' cellpadding='10' cellspacing='0'>
                                <tr>
                                    <td data-bgcolor='bg-module' bgcolor='#eaeced'>
                                        <table class='flexible' width='600' align='center' style='margin:0 auto;' cellpadding='0' cellspacing='0'>
                                            <tr>
                                                <td class='img-flex'><img src='https://webdezan.com.br/images/cabecalho.png' style='vertical-align:top;' width='600' height='200'/></td>
                                            </tr>
                                            <tr>
                                                <td data-bgcolor='bg-block' class='holder' style='padding:58px 50px 52px;' bgcolor='#f9f9f9'>
                                                    <table width='100%' cellpadding='0' cellspacing='0'>
                                                    <tr>
                                                        <td data-color='title' data-size='size title' data-min='25' data-max='45' data-link-color='link title color' data-link-style='text-decoration:none; color:#292c34;' class='title' align='center' style='font:28px/31px Arial, Helvetica, sans-serif; color:#292c34; padding:0 0 24px;'>
                                                            Contato via Site
                                                        </td>
                                                    </tr>
                                                        <tr>
                                                            <td id='corpo_mensagem' data-color='text' data-size='size text' data-min='10' data-max='26' data-link-color='link text color' data-link-style='font-weight:light; text-decoration:underline; color:#40aceb;' style='font:lighter 16px/25px Arial, Helvetica, sans-serif; color:#888; padding:0 0 23px;'>
                                                                <b>Nome:</b> $vsNome <br /><br />
                                                                <b>E-mail:</b> $vsEmail <br /><br />
                                                                <b>Assunto:</b> $vsAssunto <br /><br />
                                                                <b>Mensagem:</b> $vsMensagem
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class='img-flex'><img src='https://webdezan.com.br/images/rodape.png' style='vertical-align:top;' width='600' height='95'/></td>
                                            </tr>
                                            <tr><td height='28'></td></tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style='line-height:0;'><div style='display:none; white-space:nowrap; font:15px/1px courier;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div></td>
                    </tr>
                </table>
            </body>
        </html>
    ";

    if ($mail->Send()) {
        print 1;
    } else {
        print 0;
    }
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
    print 0;
}