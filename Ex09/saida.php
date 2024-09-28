<link rel="stylesheet" href="css/style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['palavras'];
    $palavras = explode(' ', $texto);
    $contagem = array_count_values($palavras);
    echo "<div>";
    echo "<legend>";
    echo "<h3>Contagem D. Palavras</h3>";
    echo "</legend>";
    echo "<ul>";
    foreach ($contagem as $palavra => $quantidade)
    {
        echo "<li>$palavra: $quantidade</li>";
    }
    echo "</ul>";
    echo "</div>";
}
?>