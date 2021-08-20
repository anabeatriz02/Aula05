<?php

// $cargos = array();

// declarando um vetor
$cargos = [
    "Gerente de produtos",
    "Gerente de projetos",
    "Desenvolvedor Back-end",
    "Desenvolvedor Front-end",
];

// adicionando um elemento no valor
$cargos[] = "DevOps";
$cargos[] = "Designer UI/UX";
$cargos[] = "QA";
$cargos[] = "Engenhieor de Software";
$cargos[] = "Arquiteto";
$cargos[] = "DBA";
$cargos[] = "Analista de sistemas";

// // excluindo uma posição do vetor
// unset($cargos[2]);

// imprimindo um vator na tela
// print_r($cargos);

// die;


?>









<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Fintech Fulbank</title>
</head>
<body>
 
    <main>

        <form method="POST" action="./calcular.php">

            <h1>Ajuste salarial</h1>

        <label for="nome"><b>Nome:</b></label>
        <input id="nome" name="nome"/>

        <label for="salarioAtual"><b>Salário atual:</b></label>
        <input type="number" id="salarioAtual" name="salarioAtual" placeholder="Qual seu salário?">

        <label for="genero"><b>Gênero:</b></label>

        <div class="input-radio">
            <input type="radio" id="Masc" name="genero" value="M"/>
            <label for="masc">Masculino</label>
        </div>

        <div class="input-radio">
            <input type="radio" id="Fem" name="genero" value="F"/>
            <label for="fem">Feminino</label>
        </div>

        <div class="input-radio">
            <input type="radio" id="outros" name="genero" value="O"/>
            <label for="outros">Outros</label>
        </div>

        <label for="cargo"><b>Cargo:</b></label>
        <select name="cargo" id="cargo">
            <option selected disabled value="nada">Selecione seu cargo</option>

           <?php

        //    $tam = count($cargos);
        //    $contador = 0;
        //    while($contador < $tam){
        //        echo "<option>" . $cargos[$contador] . "</option>";
        //        $contador++;
        //    }

           foreach($cargos as $cargo){
               echo "<option>$cargo</option>";
           }
           ?>

        </select>

        <button>Calcular</button>
    </form>
</main>

    <footer>
        <span>Copyright &copy; | Ana Beatriz Pereira de Brito</span>
    </footer>
</body>
</html>