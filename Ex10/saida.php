<link rel="stylesheet" href="css/style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $data = $_POST['data'];
    $mensagem = validarData($data) ? 'Data válida!' : 'Data inválida. Por favor, use o formato dd/mm/aaaa.';
    echo "<h3>$mensagem</h3>";
}

function validarData($data) 
{
    $regex = '/^(\d{2})\/(\d{2})\/(\d{4})$/';
    if (!preg_match($regex, $data, $matches)) 
    {
        return false;
    }

    $dia = $matches[1];
    $mes = $matches[2];
    $ano = $matches[3];

    return checkdate($mes, $dia, $ano);
}
?>
<a href="index.php">
    Inserir novamente
</a>
