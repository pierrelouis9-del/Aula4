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
    $idade="18";

    if ($idade >= 18 ){
        echo"<h3>$nome é maior de iadade</h3>";
    }
    ?>
    <h1>Nome:<?= $nome ?> </h1>
    <br>
    <p>Idade:<?= $idade ?> </p>
</body>
</html>