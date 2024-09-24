<link rel="stylesheet" href="css/style.css">
<?php
if (isset($_GET['word'])) 
{
    $palavra = $_GET['word'];

    function ehPalindromo($palavra) 
    {
        // Remove espaços e converte para minúsculas para uma comparação mais precisa
        $palavra = strtolower(str_replace(' ', '', $palavra));
        
        // Reverte a palavra
        $reversa = strrev($palavra);
        
        // Compara a palavra original com a reversa
        return $palavra == $reversa;
    }

    if (ehPalindromo($palavra)) 
    {
        echo "<h2>$palavra é um palíndromo.</h2>";
    } 
    else 
    {
        echo "<h2>$palavra não é um palíndromo.</h2>";
    }
}
?>
<a href="index.php">
    Voltar
</a>
