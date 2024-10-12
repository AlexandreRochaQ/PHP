<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=banque", "root", "root", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Erreur connection: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sql = "SELECT * FROM client WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user && $mdp == $user['mdp']) {
        $_SESSION['client_id'] = $user['id'];

        header("Location: espace_personnel.php");
        exit(); 
    } else {
        echo "Mauvais mot de passe.";
    }
}
?>
