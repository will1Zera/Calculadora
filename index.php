<?php 

    // Iniciando as variaveis
    $num1 = "";
    $num2 = "";
    $num3 = "";

    // Verifica se o formulário foi submetido pelo POST
    if(isset($_POST['submit'])){
        
        $drop = $_POST['drop'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        switch($drop){
            case "add":
                $num3 = $num1 + $num2;
                break;
            case "sub":
                $num3 = $num1 - $num2;
                break;
            case "mult":
                $num3 = $num1 * $num2;
                break;
            case "div":
                $num3 = $num1 / $num2;
                break;
        }

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="container">
        <div>
            <form class="card" action="index.php" method="POST">
                <h1>Calculadora</h1>
                <div class="input-container">
                    <input type="text" autocomplete="off" name="num1" class="text-input" placeholder="Digite o primeiro número"  value="<?php print $num1; ?>">
                    <label class="label">1º Número</label>
                </div>
                <div class="input-container">
                    <input type="text" autocomplete="off" name="num2" class="text-input" placeholder="Digite o segundo número"  value="<?php print $num2; ?>">
                    <label class="label">2º Número</label>
                </div>
                <select name="drop">
                    <option value="add">Soma</option>
                    <option value="sub">Subtração</option>
                    <option value="mult">Multiplicação</option>
                    <option value="div">Divisão</option>
                </select>
                <input type="submit" class="button-enviar" name="submit">
                <div class="result">
                    <h5>Resultado: <span><?php print $num3; ?></span></h5>
                </div>
            </form>
        </div>
    </div>
</body>
</html>