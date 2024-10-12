<?php

class ReserverCtl extends AbstractController {

    public function actionsReserver() {

        if(!empty($_GET['action'])) {
            switch($_GET['action']) {
                
                case "reserver":

                    if(isset($_POST['prenom'])) {
                        $mdlch->insertReserver($_POST);
                    }

                    $mdlch = new ModelChbre();
                    var_dump($mdlch->getChambre($_GET['id']));

                    $this->render("reserver", ["chambre" => $chambre]);

                    break;

            }
        }
    }
}