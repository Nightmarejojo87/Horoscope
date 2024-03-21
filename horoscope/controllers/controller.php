<?php
switch ($action) {
  case 'response': {
    //var_dump ($_REQUEST ['liste']);
    $liste = $_REQUEST['liste'];
    $signe=getLeSigne($liste);
    //$signe=signe();

    include 'views/response.php';

    break;
  }

  case 'connexion': {
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    $connexion = 0;
    $connexion=getConnexion($login,$password);

    //$signe=signe();
    if ($connexion=1) {
      $signe=getLesSignes();
      include 'views/choix.php';
    } else {
      include 'views/connexion.php';
    }

    break;
  }
  case 'modifier': {
    include 'views/admin.php';

    break;
  }

  case 'administrer': {
    $signe=getLesSignes();
    foreach ($signe as $k => $v) {
      if (isset($signe[$k])):
        $signe[$k] = $v;
      endif;
    }

    include 'views/choix.php';
    break;
  }
 default: {
    include 'views/connexion.php';
  }
}