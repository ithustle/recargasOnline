<?php
    
    require_once '../Conexao.php';
    require_once '../Recargas.php';
    
    $recargas = new Recargas();
    $nSer = $_GET['s'];
    
    var_dump($recargas->recargaSelecionada($nSer));
    die();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/CSS" href="../CSS/estilo.css" />
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="../iecss.css" />
        <![endif]-->
        <title></title>
    </head>
    <body>
        <div id="tudo">
            <div id="topo">
                
            </div>
            <div id="midTopo">
                
            </div>
                <div id="lateralDireito">
                    <div id="Unitel" class="cartoes"><!--<a href="../?recarga=unitel" />--><img class="logo" src="../imagens/Unitel.jpg" height="45" /></div><br />
                    <div id="Movicel" class="cartoes"><!--<a href="../?recarga=movicel" />--><img class="logo" src="../imagens/Movicel.jpg" height="55" /></div><br />
                    <div id="NetOne" class="cartoes"><!--<a href="../?recarga=netone" />--><img class="logo" src="../imagens/NetOne.gif" height="58" /></div><br />
                    <div id="Zap" class="cartoes"><!--<a href="../?recarga=zap" />--><img class="logo" src="../imagens/Zap.jpg" width="150" height="70" /></div>
                </div>
            <div id="principal">
                <div id="produtos">
                    <div id="cartao"></div>
                    <div id="caractCard">
                    <?php   ?>
                    </div>
                    <div id="instruct">
                        
                    </div>
                </div>
            </div>
            <div id="rodape">
                BCCL - Comércio Geral & Serviços - Todos os Direitos Reservados
            </div>
        </div>
    </body>
</html>
