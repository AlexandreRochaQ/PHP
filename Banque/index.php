<?php

include "Compte.php";

$pdo = new PDO("mysql:host=localhost;dbname=banque", "root", "", [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);


if(!empty($_GET['action'])){
    $action = $_GET['action'];
    switch($action){
        case "new": 
            include "newCompte.php";
            if(isset($_POST['solde'])){
                $titulaire = $_POST['titulaire'];
                $solde = $_POST['solde'];

                $compte = new Compte(0, $titulaire, $solde);
                
                $query = "INSERT INTO compte VALUES(NULL, ?, ?)";
                $stmt = $pdo->prepare($query);

                $stmt->execute([$titulaire, $solde]);

                header("location: index.php");
                exit;
            }
            break;
        case "delete": 
            $stmt = $pdo->prepare("DELETE FROM compte WHERE id = ?");
            $stmt->execute(array($_GET['id']));
            header("location: index.php");
            exit;
        case "update": 
            if(isset($_POST['solde'])){
                extract($_POST);
                $query = "UPDATE compte SET titulaire = ?, solde = ? WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$titulaire, $solde, $id]);

                header("location: index.php");
                exit;
            }

            $stmt = $pdo->prepare("SELECT * FROM compte WHERE id = ?");
            $stmt->execute(array($_GET['id']));

            extract($stmt->fetch());
            $compte = new Compte($id, $titulaire, $solde);

            include "newCompte.php";
            break;

    }
    
}else{
    $stmt = $pdo->prepare("SELECT * FROM compte");
    $stmt->execute();

    $tab = [];

    while($res = $stmt->fetch()){

        $compte = new Compte($res['id'], $res['titulaire'], $res['solde']);
        $tab[] = $compte;
    }

    include "home.php";
}


