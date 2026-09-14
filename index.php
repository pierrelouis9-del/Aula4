<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $nome="juvensky";
    $idade="16";

    if ($idade >= 18 ){
       $adulto="Voce é maior de idade";
    } else {
        $adulto="Voce é menor de idade";
    }
    ?>
    <h1>Nome:<?= $nome ?> </h1>
    <h2>Idade:<?= $idade ?> </h2>
    <P><?= $adulto ?></P>

    
</body>
</html>