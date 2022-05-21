<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino</title>
</head>
<body>
    <?php
    
    $titulo = $_POST["titulo"];
    $corpo = $_POST["corpo"];
    $urlLink = $_POST["urlLink"];
    $urlImagem = $_POST["urlImagem"];
    $corTexto = $_POST["corTexto"];
    $corPagina = $_POST["corPagina"]; 
    ?>

    <style>
        body{
            background-color: <?php echo $corPagina; ?>;
            color: <?php echo $corTexto; ?>;

        }
        .gato{
            height: auto;
            width: auto;
        }
    </style>

     <h1>
        <?= $titulo?>
    </h1>
    <hr>
    <P>   
        <?= $corpo?>
    </P>
    
<figure>   
    <img class="gato" src="<?= $urlImagem?>" alt="Gato">
    <figcaption> </figcaption>
</figure>

<?php
echo "<a href=$urlLink target='blank'>lINK PARA A IMAGEM</a>"
?>
</body>
</html>