<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=banque", "root", "root", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Erreur de connection: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $numeroCompte = $_POST['numeroCompte'];
    $solde = $_POST['solde'];
    $typeDeCompte = $_POST['typeDeCompte'];

    $sql = "INSERT INTO comptebancaire (numeroCompte, solde, typeDeCompte) VALUES (:numeroCompte, :solde, :typeDeCompte)";

        
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':numeroCompte', $numeroCompte);
    $stmt->bindparam(':solde', $solde);
    $stmt->bindparam('typeDeCompte', $typeDeCompte);
    

    
    if ($stmt->execute()) {
        header("Location: espace_personnel.php");
        exit();
    } else {
        echo "Erreur.";
    }
}
?>
