<?php
session_start();

if (isset($_POST['login']) && trim($_POST['login']) !== '') {
    $login = trim($_POST['login']);
    $_SESSION['login'] = $login;

    $info = [
        "login" => $login,
        "date" => date("d/m/Y H:i:s")
    ];

    setcookie("dernier_login", json_encode($info), time() + 86400, "/");
    header("Location: profil.php");
    exit;
}

$login_cookie = '';
$date_cookie = '';

if (isset($_COOKIE['dernier_login'])) {
    $data = json_decode($_COOKIE['dernier_login'], true);
    $login_cookie = $data['login'] ?? '';
    $date_cookie = $data['date'] ?? '';
}
?>

<form action="login.php" method="post">
    <label>Login :</label>
    <input type="text" name="login" value="<?= htmlspecialchars($login_cookie) ?>">
    <input type="submit" value="Connexion">
</form>

<?php if ($date_cookie !== ''): ?>
    <p>Dernière connexion le : <?= htmlspecialchars($date_cookie) ?></p>
<?php endif; ?>