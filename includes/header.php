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

<!-- Bouton fixe en bas à droite (affiché sur toutes les pages) -->
<a href="#bas de page" class="fixed-bottom-right-button" aria-label="Aller en bas de la page">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/></svg></a>