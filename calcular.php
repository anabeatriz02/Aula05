<link rel="stylesheet" href="style.css"/>

<?php

if (

    isset($_POST["nome"]) && isset($_POST["salarioAtual"])
    && isset($_POST["genero"]) && isset($_POST["cargo"])){

        $nome = $_POST["nome"];
        $salarioAtual = $_POST["salarioAtual"];
        $genero = $_POST["genero"];
        $cargo = $_POST["cargo"];

        $salarioNovo = 0;

        // if($salarioNovo > 5000){
        //     $salarioNovo = $salarioAtual * 1.1;
        // }else{
        //     $salarioNovo = $salarioAtual * 1.2;
        // }

        $salarioNovo = $salarioAtual > 5000 ? $salarioAtual * 1.1 : $salarioAtual * 1.2;
    
    }else{
        die("<main>Você não enviou os dados</main>");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular salario</title>
</head>
<body>
    <main>
        <p>
            <? $genero === "M" ? "O" : ($genero === "F" ? "A" : "")?>
            <?php echo $nome . " passará a receber R$ " . $salarioNovo . " no cargo de ". $cargo?>
        </p>
    </main>
</body>
</html>