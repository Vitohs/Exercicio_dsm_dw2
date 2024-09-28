<link rel="stylesheet" href="css/style.css">
<header>
    <h1>
       Resultado da Média
    </h1>
</header>
<a href="index.php">
        <h4>
            Retornar
        </h4>
</a>
<?php
$nmr1 = $_GET['nmr1'];
$nmr2 = $_GET['nmr2'];
$resultado = ($nmr1 + $nmr2) / 2;
$res_formatado = number_format($resultado, 2);
echo "<h3>A média dos numeros: {$nmr1} e {$nmr2} é de {$res_formatado}</h3>";
?>