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
        <form method="POST" >
            <input type="text" placeholder="Escrever seu nome" id="nome" name="nome">
            <br>
            <input type="number" placeholder="Escrever sua idade" id="idade" name="idade">
            <br>
            <button type="submit"> Enviar</button>
        </form>
        
    </div>
    <div>

    </div>


</body>

</html>