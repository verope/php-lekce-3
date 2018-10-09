<?php

/*
 * 9. Vytvořte stránku `admin.php`, která:
  1. Pokud uživatel není přihlášen (není nastaven `login` v session), zobrazí pouze hlášku `Přístup zamítnut`
  2. Pokud je uživatel přihlášen, zobrazí:
    1. Text `Vítejte,` a login uložený v session
    2. Tabulku s daty uloženými v session pod klíčem `data` (pro výpis použijte cyklus)
    3. Odkaz na odhlášení jako tlačítko s textem `Odhlásit` (odkaz povede na `logout.php`)
 */

session_start();
if(isset($_SESSION['login'])){
    echo 'Vítejte ';
    echo $_SESSION['login'];
    ?>
    <div class="container">
    <table class= "table table-bordered">
    <?php

    foreach($_SESSION['data'] as $key => $value){
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
        }

    ?>
    </table>
<?php
    echo '<br>';
    echo '<a href="/php-lekce-3/logout.php">Odhlásit</a>';
    } else {
        echo 'Přístup zamítnut';
        
    }



?>
 