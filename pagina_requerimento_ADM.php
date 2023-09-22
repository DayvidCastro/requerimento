<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimento online</title>
    <link rel="stylesheet" href="requerimento.css">
</head>

<center>

<body class="fundo">


    <div class="sub_cabecalho">

    <h1 class="sub_titulo">Requerimento Online (ADM)</h1>

    </div>


    <div class="div_opcao">
        <form class="" action="" method="post">

            <button class="opcao" name="ir_para_o_suap">Ir para o suap</button>

            <button class="opcao" name="enviar_requerimento">Ver requerimentos</button>

            <button class="opcao" name="configuracao">Configuraçoes</button>
                

        </form>



        </form>

    </div>

<?php

    extract($_POST);

    if (isset($enviar_requerimento)) {

        header('Location: pagina_requerimento_ADM.php');

}

if (isset($ir_para_suap)) {

        

}


if (isset($meus_requerimento)) {

        

}

if (isset($status_requerimento)) {

        

}

if (isset($configuracao)) {

        

}


?>

</body>

</center>

</html>