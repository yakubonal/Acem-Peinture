<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM avis ORDER BY date_creation DESC");
$avis = $stmt->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($avis);
