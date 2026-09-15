<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $nome = "juvensky";
    $idade = "18";

    if ($idade >= 18) {
        $adulto = "Voce é maior de idade";
    } else {
        $adulto = "Voce é menor de idade";
    }
    ?>
    <div class="A">
        <form action="" method="get">
            <input type="text" aria-label="Escrever seu nome" id="nome">
            <input type="text" aria-label="Escrever sua idade" id="idade">
            <button type="submit"> Enviar</button>
        </form>
        
    </div>
    <div>

    </div>


</body>

</html>