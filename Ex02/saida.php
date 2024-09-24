<link rel="stylesheet" href="css/style.css">

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    $nmr = $_GET["numero"];
    $res = $nmr * $nmr;

    echo "<h2>O resultado deu {$res} :)</h2>";
}
?>
<a href="index.php">
    <button class="return">
        Retornar
    </button>
</a>