<link rel="stylesheet" href="css/style.css">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#57cc99" fill-opacity="1" d="M0,160L30,160C60,160,120,160,180,144C240,
128,300,96,360,90.7C420,85,480,107,540,106.7C600,107,660,85,720,96C780,107,
840,149,900,149.3C960,149,1020,107,1080,106.7C1140,107,1200,149,1260,160C1320,171,1380,149,1410,
138.7L1440,128L1440,0L1410,0C1380,0,1320,0,1260,
0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0
L0,0Z"></path></svg>

<?php
$vito = $_GET['ano'];
function isLeapYear($year) 
{
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) 
    {
        return true;
    } 
    else 
    {
        return false;
    }
}

if (isLeapYear($vito)) 
{
    echo "<h2>$vito é um ano bissexto</h2>";
} 
else 
{
    echo "<h2>$vito não é um ano bissexto</h2>";
}

?>

<!-- <img src="img/macaco.jpg"> -->

<footer>
    <a href="index">
        <h3>
            Digitar outro ano
        </h3>
    </a>
</footer>