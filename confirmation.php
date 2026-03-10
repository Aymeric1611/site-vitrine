<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Confirmation - Kécolor</title>
  <link href="style.css" rel="stylesheet">
  <link rel="shortcut icon" href="image/Logo Kécolor carre.png" type="image/x-icon">

</head>
<body>
<header class="site-header">
  <div class="container">
    <div class="header-content">
      <h1 class="site-title">
        <a href="index.html">
          <img src="image/Logo Kécolor avec nom entreprise.png" alt="Kécolor Logo" height="50">
          Kécolor
        </a>
      </h1>
      <nav class="site-nav" role="navigation" aria-label="Menu principal">
        <a href="index.html">Accueil</a>
        <a href="histoire.html">Histoire</a>
        <a href="produits.php">Produits</a>
        <a href="recrutement.html">Recrutement</a>
        <a href="equipe.html">Équipe</a>
        <a href="contact.html">Contact</a>
        <a href="panier.html" class="cart-link">🛒 Panier</a>
      </nav>
    </div>
  </div>
</header>

<main class="content">
    <div class="confirmation-page">
        <div class="confirmation-box">
            <div class="confirmation-icon">✓</div>
            <h1>Merci pour votre commande!</h1>
            <p>Votre commande a été reçue avec succès. Un agent Kécolor confirmera votre demande dans les 24 heures.</p>
            
            <div class="order-info">
                <p><strong>Numéro de commande:</strong> KLC-<?=  date("Y") ?>-001</p>
                <p><strong>Date:</strong><?=  date("d:m:Y"); ?> </p>
                <p><strong>Statut:</strong> En attente de confirmation</p>
                <p><strong>Contact:</strong> support@kecolor.fr</p>
            </div>
            
            <p class="contact-email">
                Un email de confirmation a été envoyé à votre adresse. Si vous ne l'avez pas reçu, 
                veuillez contacter <a href="mailto:support@kecolor.fr">support@kecolor.fr</a>
            </p>
            
            <div class="confirmation-buttons">
                <a href="index.html" class="btn btn-primary">Retour à l'accueil</a>
                <a href="produits.php" class="btn btn-secondary">Continuer les achats</a>
            </div>
        </div>
    </div>
</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-section">
        <h4>À propos</h4>
        <ul>
          <li><a href="histoire.html">Notre histoire</a></li>
          <li><a href="equipe.html">Notre équipe</a></li>
          <li><a href="recrutement.html">Rejoignez-nous</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Support</h4>
        <ul>
          <li><a href="contact.html">Nous contacter</a></li>
          <li><a href="panier.html">Panier</a></li>
          <li><a href="contact.html#FAQ">FAQ</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Suivez-nous</h4>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 Kécolor - Aymeric Joblin — <a href="mailto:aymericjoblin@gmail.com">aymericjoblin@gmail.com</a></p>
    </div>
  </div>
</footer>
</body>
</html>
