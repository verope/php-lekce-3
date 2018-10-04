<?php

$cislo = -0.1;

if($cislo == 0){
    echo "nula";
} elseif($cislo < 0){
    echo "zaporne cislo";
} else {
    echo "kladne cislo";
}

/*
  1. pokud je číslo menší než nula, vypište “záporné číslo”
  2. pokud je číslo rovno nule, vypište “nula”
  3. pokud je číslo kladné, vypište “kladné číslo” */
 
 
 
 
 
 
 // WHILE CYKLUS
 
echo '<hr></hr>';
$i = 0;
while($i < 10){
    $i = $i + 1;
    echo $i;
    echo ', ';
}

echo "<hr></hr>";

$i = 0;
$first = TRUE;

while($i < 10){
    if($first & $i <9){
        $i = $i + 1;
        echo $i;
        echo ', ';
    } else {
        $i = $i + 1;
        echo $i;
    }
}

/*
)
if($first){
    $first = FALSE;
    echo ', ';
}*/