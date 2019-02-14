<?php

//magazzino sci


require 'Sci.php';



//#1
$salomon = new Sci('Salomon', 'S Race Pro', '5A7', 1000);
//#2
$dynafit = new Sci('Dynafit', 'Seven Summit', '4F3', 500);
//#3
$scott = new Sci('Scott', 'Superguide 88', '4D3', 600);
//#4
$k2 = new Sci('K2', 'Wayback', '4J5', 800);
//#5
$skitrab = new Sci('Ski Trab', 'Piuma Evo', '6Y7', 670);
//#6
$blackcrows = new Sci('Black Crows', 'Freebird', '3M8', 980);
//#7
$volkl = new Sci('Volkl', 'Mantra', '4E6', 780);





?>

<ul>

<li>
<?php 
//per gestire le eccezioni, in accoppiata con throw dentro alla funzione nella classe
try {
    echo $salomon->getProductSki();
} catch (\Exception $e) {
    echo 'E stata lanciata un eccezione con messaggio: ' . $e->getMessage();
}
?>
</li>
<li>
<?php 
    echo $dynafit->getProductSki();
?>
</li>
<li>
<?php 
    echo $scott->getProductSki();
?>
</li>
<li>
<?php 
    echo $k2->getProductSki();
?>
</li>
<li>
<?php 
    echo $skitrab->getProductSki();
?>
</li>
<li>
<?php 
    echo $blackcrows->getProductSki();
?>
</li>
<li>
<?php 
    echo $volkl->getProductSki();
?>
</li>


</ul>