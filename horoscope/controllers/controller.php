<?php 
switch($action)
{
    case 'response':
    {
        //var_dump ($_REQUEST ['liste']);
        $liste=$_REQUEST ['liste'];

       include 'views/response.php';

    break;
    }

    case 'connexion':
    {
        $login=$_REQUEST ['login'];
        $password=$_REQUEST ['password'];
        $flag=false;
foreach($connexion as $k=>$v){
          if($login == $k && $password == $v):
$flag=true;
        endif;
}
  if($flag){
    include 'views/choix.php';
  }else{
    include 'views/connexion.php';
  }

    break;
    }
    default:
    {include 'views/connexion.php';}

    case 'modifier':
    {
      include 'views/admin.php';
    
    break;
    }

    case 'administrer' : 
    {
      var_dump($liste);

    break;
    }

}