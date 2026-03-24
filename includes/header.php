<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="image/Logo Kécolor carre.png" type="image/x-icon">
    <script src="cart.js" defer></script>
</head>
<body>
<?php
$activePage = basename($_SERVER['SCRIPT_NAME']);
function isActive(string $page, string $activePage): string {
    return $page === $activePage ? 'active' : '';
}
?>

<header class="site-header">
  <div class="container">
    <div class="header-content">
      <h1 class="site-title">
        <a href="index.php">
          <img src="image/Logo Kécolor avec nom entreprise.png" alt="Kécolor Logo" height="50">
          Kécolor
        </a>
      </h1>
      <button class="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="main-navigation">
        <span class="hamburger"></span>
      </button>
      <nav id="main-navigation" class="site-nav" role="navigation" aria-label="Menu principal">
        <a href="index.php" class="<?= isActive('index.php', $activePage) ?>">Accueil</a>
        <a href="histoire.php" class="<?= isActive('histoire.php', $activePage) ?>">Histoire</a>
        <a href="produits.php" class="<?= isActive('produits.php', $activePage) ?>">Produits</a>
        <a href="recrutement.php" class="<?= isActive('recrutement.php', $activePage) ?>">Recrutement</a>
        <a href="equipe.php" class="<?= isActive('equipe.php', $activePage) ?>">Équipe</a>
        <a href="contact.php" class="<?= isActive('contact.php', $activePage) ?>">Contact</a>
        <a href="panier.php" class="cart-link <?= isActive('panier.php', $activePage) ?>">🛒 Panier</a>
      </nav>
    </div>
  </div>
</header>