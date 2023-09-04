<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Escalares </h1>
    <?php 
    
    //numeros em hexadecimal
     $num = 0x1A;
     echo "O valor da variável é $num ";

     //var_dump
     $v = 300;
     var_dump($v);

     //coerção
     $num = (integer) 3e2;
     //echo "O valor de $num";
     var_dump($num);
     
    ?>

    <h1>Compostos</h1>
    <?php 
    //array
    $vet = [6, 3, 2, 1, 7];
    var_dump($vet);

    class Pessoa {
        private string $nome;
    }
    
    $p = new Pessoa;
    var_dump($p);
    ?>
</body>
</html>