<link rel="stylesheet" href="css/style.css">
<header>
    <h1 class="airbnb">Par ou Ìmpar?</h1>
</header>
<form action="#" method="GET">
    <legend>
        <h2>
            Informe um numero
        </h2>
    </legend>
    <input type="number" name="nmr">
    <button type="submit">Gerar</button>
</form>
<?php
    if (isset($_GET['nmr']))
    {
        $thanks = $_GET["nmr"];
        if($thanks % 2 == 0)
        {
            echo "<span>O numero: {$thanks} é par</span>";
        }
        else
        {
            echo "<span>O numero: {$thanks} é ímpar</span>";
        }
    }
?>