<?php

/*
 * Úkol č. 4
2. V souboru `prihlasit.php` uložte do session pod klíč `loggedIn` hodnotu `true`
3. V souboru `odhlasit.php` smažte v session klíč `loggedIn`
4. V souboru `administrace.php` vypište text “přihlášen” nebo ”nepřihlášen” podle existence klíče `loggedIn` v poli `$_SESSION`
5. Nyní postupně:
  1. Načtěte `administrace.php`, mělo by se zobrazit ”nepřihlášen”
  2. Načtěte `prihlasit.php`
  3. Načtěte `administrace.php`, mělo by se zobrazit ”přihlášen”
  4. Načtěte `odhlasit.php`
  5. Načtěte `administrace.php`, mělo by se zobrazit ”nepřihlášen”
 */

session_start();
$_SESSION['loggedIn']=TRUE;
