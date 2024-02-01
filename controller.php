<?php 
switch($action)
{
    case 'reponse':
    {
        var_dump ($_REQUEST ['liste']);
        $liste=$_REQUEST ['liste'];

        echo $signe [$liste];
    break;
    }
    default:
    {include 'views/choix.php';}
}