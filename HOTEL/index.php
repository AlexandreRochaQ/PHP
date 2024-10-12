<?php

session_start();

include "classes/Chambre.php";
include "classes/Utilisateurs.php";

include "model/ModeleGeneric.php";
include "model/ModelChbre.php";
include "model/UserMdl.php";

include "controller/AbstractController.php";
include "controller/ChambreCtl.php";
include "controller/ReserverCtl.php";
include "controller/UserCtl.php";

$chambreClt = new ChambreCtl();
$userCtl = new UserCtl();
$reserverCtl = new ReserverCtl();

if( isset($_GET["action"]) ){
    $chambreClt->actionsChambre();
    $userCtl->actionsUser();
    $reserverCtl->actionsReserver();

}else{
    $chambres = $chambreClt->getModelChbre()->liste();
    $chambreClt->render("home", ["chambres" => $chambres]);
}

