<?php

$vek = 18;

if($vek < 18){
    echo "Vstup pouze od 18";
} else if($vek >= 18 and $vek <60){
    echo "Vitej dospely";
} else {
    echo "Vitej starce";
}

// pozor porovnavani musi byt '==' !!!
// tri rovnitka porovnava i jako datove typy (stejne jako java script) - php neprevede string na cislo apod

echo "<hr></hr>";


$cislo = '1';

if($cislo === 1){
    echo "jasna paka";
} else {
    echo "nejasna paka";
}

echo "<hr></hr>";

$stav = 'rozbaleno';

if($stav == 'rozbaleno' || $stav == 'ozkouseno'){
    echo "je to rozbaleny nebo ozkouseny";
}


echo "<hr></hr>";

$stav = 2;

if(!($stav < 0) || $stav > 5){
    echo "je to rozbaleny nebo ozkouseny";
}

// negace - pomoci vykricniku, slozite vyrazy davat do zavorek - zneplatni vzdy to, co je tomu nejbliz


echo "<hr></hr>";

// uložení cookie - da se nastavit cas, jak dlouho ma byt cookie v prohlizeci
// time() pise aktualni cas 
setcookie('user', 'John', time() + 3600);

// zobrazení všech cookie
var_dump($_COOKIE);

echo "<hr></hr>";

echo "<hr></hr>";

echo "<hr></hr>";
