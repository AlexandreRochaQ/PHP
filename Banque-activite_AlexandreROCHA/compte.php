<?php

$pdo = new PDO("mysql:host=localhost;dbname=banque", "root", "root", [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "deposer":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numeroCompte = $_POST['numeroCompte'];
                $montant = $_POST['montant'];

                $sql = "UPDATE comptebancaire SET solde = solde + :montant WHERE numeroCompte = :numeroCompte";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':montant', $montant);
                $stmt->bindParam(':numeroCompte', $numeroCompte);

                if ($stmt->execute()) {
                    echo "Montant déposé";
                } else {
                    echo "Erreur ";
                }
            }
            break;

        case "retirer":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numero_compte = $_POST['numeroCompte'];
                $montant = $_POST['montant'];

                $sql = "SELECT solde FROM comptebancaire WHERE numeroCompte = :numeroCompte";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':numeroCompte', $numeroCompte);
                $stmt->execute();
                $compte = $stmt->fetch();

                if ($compte && $compte['solde'] >= $montant) {

                    $sql = "UPDATE comptebancaire SET solde = solde - :montant WHERE numeroCompte = :numeroCompte";

                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':montant', $montant);
                    $stmt->bindParam(':numeroCompte', $numeroCompte);

                    if ($stmt->execute()) {
                        echo "Montant retiré";
                    } else {
                        echo "Erreur";
                    }
                } else {
                    echo "Solde insuffisant.";
                }
            }
            break;

        case "virer":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numeroCompte_source = $_POST['numeroCompte_source'];
                $numeroCompte_dest = $_POST['numeroCompte_dest'];
                $montant = $_POST['montant'];

                $sql = "SELECT solde FROM comptebancaire WHERE numeroCompte = :numeroCompte_source";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':numeroCompte_source', $numeroCompte_source);
                $stmt->execute();
                $compte_source = $stmt->fetch();

                if ($compte_source && $compte_source['solde'] >= $montant) {
                    $sql = "UPDATE comptebancaire SET solde = solde - :montant WHERE numeroCompte = :numeroCompte_source";

                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':montant', $montant);
                    $stmt->bindParam(':numeroCompte_source', $numeroCompte_source);
                    $stmt->execute();

                    $sql = "UPDATE comptebancaire SET solde = solde + :montant WHERE numeroCompte = :numeroCompte_dest";

                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':montant', $montant);
                    $stmt->bindParam(':numeroCompte_dest', $numeroCompte_dest);
                    if ($stmt->execute()) {
                        echo "Transfert effectué";
                    } else {
                        echo "Erreur";
                    }
                } else {
                    echo "Solde insuffisant";
                }
            }
            break;
    }
}