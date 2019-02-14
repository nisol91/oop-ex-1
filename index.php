<?php

//ho bisogno della CLASSE Auto e lo prendo dal suo file
require 'Auto.php';




//creo varie ISTANZE

//#1
// $lancia = new Auto();

// $lancia->modello = 'Delta';
// $lancia->marca = 'Lancia';

// //#2
// $alfaRomeo = new Auto();

// $alfaRomeo->modello = 'Giulia';
// $alfaRomeo->marca = 'Alfa Romeo';


//grazie al costruttore posso rendere le istanze piu comode da scrivere:

//#1
$lancia = new Auto('', 'Delta', 5, 10000);
//#2
$alfaRomeo = new Auto('Alfa Romeo', 'Giulia', 4, 35700);





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