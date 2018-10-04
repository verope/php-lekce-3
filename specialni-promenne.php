<?php
/* $_SESSION = pro urceni sezeni jednoho cloveka na nejake strance (napr eshop)
 * 
 */

// nastartovani session
session_start();

// identifikator session - ten ma uzivatel v prohlizeci - tohle se v praxi nevyuziva
//var_dump(session_id());

// nastaveni nove hodnoty 
//$_SESSION['registrationDate'] = '2018-05-05';

//var_dump($_SESSION);

// vymazani informace ze session
unset($_SESSION['registrationDate']);

$_SESSION['registrationDate'] = '2018-06-05';

// isset = ochrana proti chybe
if(isset($_SESSION['registrationDate'])){
    echo $_SESSION['registrationDate'];
} ;
