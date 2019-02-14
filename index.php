<?php

//magazzino sci


require 'Sci.php';



//#1
$salomon = new Auto('Salomon', 'Delta', 5, 10000);
//#2
$dynafit = new Auto('Dynafit', 'Giulia', 4, 35700);
//#3
$scott = new Auto('Scott', 'Giulia', 4, 35700);
//#4
$k2 = new Auto('K2', 'Giulia', 4, 35700);
//#5
$skitrab = new Auto('Ski Trab', 'Giulia', 4, 35700);
//#6
$blackcrows = new Auto('Black Crows', 'Giulia', 4, 35700);
//#7
$volkl = new Auto('Volkl', 'Giulia', 4, 35700);





?>

<ul>

<li>
<?php 
//per gestire le eccezioni, in accoppiata con throw dentro alla funzione nella classe
try {
    echo $lancia->getFullName();
    echo $lancia->getPrice();
} catch (\Exception $e) {
    echo 'E stata lanciata un eccezione con messaggio: ' . $e->getMessage();
}
?>
</li>
<li>
<?php 
    echo $alfaRomeo->getFullName();
    echo $alfaRomeo->getPrice();
?>
</li>

</ul>