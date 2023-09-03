<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Para Testar as Regras</title>
</head>
<body>
    <?php
    //case sensitive 
     $nome = "Pedro";
     $Nome = "Maria";

     echo "É verdade que seu nome é $Nome?  ";
     
     //Aceita acentuação 
     $salário = 2500.75;

     echo "Seu salário é de R$: $salário ";

     //Aceita caracteres da tabela ASCII *não é aconselhavel usar
     $valorø = 200;

     echo "O valor é igual a $valorø no programa ";

     //Regras com constante
     const _TX = 850;

     echo "Resultado = " . _TX;
    ?>
    
</body>
</html>