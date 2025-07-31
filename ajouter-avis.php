<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($nom) && !empty($message)) {
        $stmt = $pdo->prepare("INSERT INTO avis (nom, message) VALUES (?, ?)");
        $stmt->execute([$nom, $message]);
    }
    header("Location: index.html");
    exit();
}
?>
