<!doctype html>
<html lang="en">
  <head>
    <title>Ukol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form method="post" class="form-signin" >
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name='emailAddress' class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="passw" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    
<?php

session_start();

if($_POST['emailAddress']=='admin@admin.admin' && $_POST['passw']=='top-secret'){
    $_SESSION['login'] = $_POST['emailAddress'];
    $_SESSION['data'] = ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23];
    echo '<a href="/php-lekce-3/admin2.php">Pokračovat do administrace</a>';
} else {
    echo "Chybné jméno nebo heslo";
}



/*
 * 
7. Nyní nahraďte vypsání loginu kontrolou na správnost přihlašovacích údajů:
  1. Pokud je login `admin` a heslo `top-secret`, uložte do session:
    1. Pod klíč `login` text zadaný jako login do formuláře
    2. Pod klíč `data` následující pole: `['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23]`
  2. Pokud byl login úspěšný, vypište odkaz s textem `Pokračovat do administrace` vedoucí na stránku `admin.php`, kterou vytvoříme v dalších bodech tohoto úkolu
  3. V opačném případě vypište hlášku `Chybné jméno nebo heslo`
8. Vytvořte stránku `logout.php`, která vychází z `_template.php` a:
  1. Provede odhlášení (smaže z session všechna uživatelská data)
  2. Vypíše hlášku `Odhlášení proběhlo úspěšně`
  3. Zobrazí odkaz vedoucí na `login.php` s textem `Zpět na přihlašovací formulář`
9. Vytvořte stránku `admin.php`, která:
  1. Pokud uživatel není přihlášen (není nastaven `login` v session), zobrazí pouze hlášku `Přístup zamítnut`
  2. Pokud je uživatel přihlášen, zobrazí:
    1. Text `Vítejte,` a login uložený v session
    2. Tabulku s daty uloženými v session pod klíčem `data` (pro výpis použijte cyklus)
    3. Odkaz na odhlášení jako tlačítko s textem `Odhlásit` (odkaz povede na `logout.php`)
10. Změny commitněte, mergněte do masteru a pushněte na GitHub
 */













?>

</div>
  </body>
</html>
