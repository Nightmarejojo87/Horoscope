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
    default:
    {include 'views/choix.php';}
}