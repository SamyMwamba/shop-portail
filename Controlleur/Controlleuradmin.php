<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 7/24/17
 * Time: 4:38 AM
 */

require_once '../Modele/Admin.php';
include_once "sessions.php";

$tableauadmin=array();


//controlleur connexion les donnes sont envoyees via ajax de la page login.php
if(isset($_POST['connexion']) ) {

    $tableauadmin = Admin::login($_POST['username'], $_POST['password']);

    if ($tableauadmin != null) {

        foreach ($tableauadmin as $admin) {
            $_SESSION['username'] = $admin->getUsername();
            $_SESSION['password'] = $admin->getPassword();

        }


        echo 'true';


    }
    else
    {

        echo 'false';

    }

}

//controlleur deconnexion,les donnees sont envoyees via ajax sur la page index.php
if(isset($_POST['deconnexion']))

{

    unset($_SESSION['username']);
    unset($_SESSION['password']);
 ;
    echo 'true';


}



