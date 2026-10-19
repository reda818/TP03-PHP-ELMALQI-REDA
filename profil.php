<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<p>Bienvenue <?= htmlspecialchars($_SESSION['login']) ?></p>
<a href="deconnexion.php">Déconnexion</a>