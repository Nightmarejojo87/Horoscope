<?php
switch ($action) {
  case 'response': {
    //var_dump ($_REQUEST ['liste']);
    $liste = $_REQUEST['liste'];
    $signe=getLesSignes();
    //$signe=signe();

    include 'views/response.php';

    break;
  }

  case 'connexion': {
    /*$login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    $flag = false;
    $connexion=connexion();
    foreach ($connexion as $k => $v) {
      if ($login == $k && $password == $v):
        $flag = true;
      endif;
    }*/
    $flag = true;
    $signe=getLesSignes();
    //$signe=signe();
    if ($flag) {
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