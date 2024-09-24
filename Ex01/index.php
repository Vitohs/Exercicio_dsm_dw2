<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form</title>
</head>
<body>
    <form class="forms" action="#" method="get">
        <legend>
            <h1>Calcule</h1>
        </legend>
        <label  for="numero">Numero1
            <input type="text" name="nmr1" placeholder="insira um numero">
        </label>
        <label for="numero2">Numero2
            <input type="text" name="nmr2" placeholder="insira um numero">
            <input class="botao" type="submit" value="Confirmar">
            <input class="botao" type="reset" value="Limpar">
        </label>
    </form>
    <div>
            <legend>
                <h2>
                    Resultado
                </h2>
                <?php
                    $nmr1 = $_GET["nmr1"];
                    $nmr2 = $_GET["nmr2"];
                    $resultado = $nmr1 + $nmr2;

                    echo "O resultado de {$nmr1} + {$nmr2} é de: {$resultado}";
                ?>
            </legend>
        </div>
    <!-- quem tiver lendo isso, ta funcionando viu, digite o numero e ta confirma -->
</body>
</html>