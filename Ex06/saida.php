<link rel="stylesheet" href="css/estilo.css">

<?php
$nmr = $_GET['nmr'];
$i = $nmr;
$res = 1;
while($i > 0)
{
    $res *= $i;
    $i--;
}
echo "<h2>O fatorial de {$nmr} é: {$res}</h2>";
?>