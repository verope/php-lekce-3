<?php
/*
 * Vypracujte doma: Úkol č. 3

1. Použijte soubor `ukol-3.php`
2. Vytvořte pole do kterého vložíte 4 školní předměty jako klíče (čeština, matematika...) a známky celým číslem od 1 do 5 jako hodnoty
3. Vypište tabulku, která bude obsahovat v jednom sloupci jména předmětů a v druhém sloupci známky
4. Pod tabulkou vypište spočítaný průměr ze všech známek
5. Pokud je známka horší než 3, zobrazte řádek červeně (`<tr class="alert-danger">`)
 */




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <table class= "table table-bordered">
    <?php
    $soucet = 0;
    $predmety = ['cestina' => 1,'matematika' => 2,'anglictina' => 3,'italstina' => 4,'dejepis' => 5];
    $pocet = count($predmety);
    
    foreach($predmety as $key => $value){
        if($value > 3){
            echo '<tr class="alert-danger">';
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
            $soucet = $soucet + $value;
        } else {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
            $soucet = $soucet + $value;
        }
    }
    ?>
    </table>

<?php

    echo "Prumer: " . round($soucet / $pocet, 1);    

?>

</div>
</body>
</html>
