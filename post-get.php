<?php

/*
 * Úkol č. 6

1. Vytvořte formulář odeslatelný metodou POST obsahující:
  1. Textový input s názvem (atribut `name`) “firstName”
  2. Input typu password s názvem “secret”
  3. Checkbox s názvem “optIn” a popiskem “Souhlasím”
  4. Tlačítko pro odeslání formuláře
2. Doplňte před inputy popisky “Jméno:” a “Heslo:” tak, aby byl každý na jednom řádku
3. Pokud byl formulář odeslán, vypište pod ním  všechna odeslaná data
 */
?>

<form method="post">
   Jmeno: <input type="text" name="firstName" <!-- vstupní pole --> <br><br>
   Heslo: <input type="text" name="secret"><!-- vstupní pole --> <br><br>
   <input type="checkbox" name="optIn" value="souhlas">Souhlasim<br><br>
   <input type="submit"><!-- tlačítko pro odeslání formuláře -->
</form>
<?php
echo 'GET: '; // get to da do url, takze v pripade hesla by to chtelo byt post treba no, je to dobry treba u vyhledavani pro sharovani linku
var_dump($_GET);
echo '<br>POST: '; // post to neda nikam
var_dump($_POST);