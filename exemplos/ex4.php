<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <h1>Heredoc</h1>
    <?php
    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< TESTE
    Hello! Calera do $canal!
    Tudo bem??
    Como está sendo seu ano de $ano?
    Forte abraço! \u{1F596}
    TESTE;
    ?>
    
    <h1>Nowdoc</h1>
    <?php
    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< 'TESTE'
    Hello! Calera do $canal!
    Tudo bem??
    Como está sendo seu ano de $ano?
    Forte abraço! \u{1F596}
    TESTE;
    ?>
</body>
</html>