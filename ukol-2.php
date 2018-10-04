
<?php

/*Úkol č. 2

1. Pracujte v souboru `ukol-2.php`
2. Před tabulkou vytvořte proměnné `$radek` a `$soucet` do obou přiřaďte číslo `1`
3. Před tabulkou vytvořte proměnnou `$maximum` do které přiřadíte číslo `5`
4. Pomocí cyklu while a výše uvedených proměnných vypište tabulku o celkem pěti řádcích:
  1. v prvním sloupci je vždy číslo řádku (1, 2, 3… - vypisujte proměnnou `$radek`)
  2. v druhém sloupci je součet všech čísel řádků - od prvního do aktuálního řádku
5. Každý sudý řádek udělejte modrý (elementu `tr` přidejte třídu 'alert-info': `class="alert-info"`)*/


$radek = 1;
$soucet = 1;
$maximum = 5;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
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

<?php
/* -------------
 * dodelat podle githubu
 * -------------
 */
?>

    <table class="table table-bordered">
            <?php
            while($radek <= $maximum){
                echo '<tr><td>'.$radek.'</td>';
                echo '<td>'.$soucet.'</td></tr>';
                $radek = $radek + 1;
                $soucet = $soucet + $radek;
            }
            ?>
            <?php
            
            ?>


        </td>
        </tr>
    </table>




</div>
</body>
</html>
