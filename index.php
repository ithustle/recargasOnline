<?php
    
    require_once 'Conexao.php';
    require_once 'Recargas.php';
    
    $recargas = new Recargas();
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/CSS" href="CSS/estilo.css" />
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="iecss.css" />
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
                    <div id="Unitel" class="cartoes"><a href="?recarga=unitel" /><img class="logo" src="imagens/Unitel.jpg" height="45" /></div><br />
                    <div id="Movicel" class="cartoes"><a href="?recarga=movicel" /><img class="logo" src="imagens/Movicel.jpg" height="55" /></div><br />
                    <div id="NetOne" class="cartoes"><a href="?recarga=netone" /><img class="logo" src="imagens/NetOne.gif" height="58" /></div><br />
                    <div id="Zap" class="cartoes"><a href="?recarga=zap" /><img class="logo" src="imagens/Zap.jpg" width="150" height="70" /></div>
                </div>
            <div id="principal">
                <div id="produtos">
                    <?php foreach ($recargas->mostrarRecargas() as $cartoes) { ?>
                        <div class="prod_box">

                            <div class="center_prod_box">            
                                <div class="product_title"><a href="details.html"><?php echo $cartoes['descricao']; ?> </a></div>
                                <div class="product_img"><a href="details.html"><img src="imagens/unitel125.jpg" alt="" title="Cartão de Recarga Unitel de 125 UTT" border="0" width="160" height="100" /></a></div>
                                <div class="prod_price"><span class="preco"><?php echo $cartoes['preco']." KZ"; ?> </span></div>                        
                            </div>

                            <div class="prod_details_tab">
                                <a href="comprar/compra_saldo.php?s=<?php echo $cartoes['nserie']; ?>" class="prod_buy">Comprar</a>          
                                <a href="#" class="prod_buy">Detalhes</a>            
                            </div>                     
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div id="rodape">
                BCCL - Comércio Geral & Serviços - Todos os Direitos Reservados
            </div>
        </div>
    </body>
</html>
