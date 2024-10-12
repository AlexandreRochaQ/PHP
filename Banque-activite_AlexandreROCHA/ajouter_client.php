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
     
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp']; 

    $sql = "INSERT INTO client (nom, prenom, telephone, email, mdp) VALUES (:nom, :prenom, :telephone, :email, :mdp)";

        
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mdp', $mdp);

    
    if ($stmt->execute()) {
        header("Location: espace_personnel.php");
        exit();
    } else {
        echo "Erreur.";
    }
}
?>
