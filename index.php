<?php
$pageTitle = "Accueil - Kécolor";
include __DIR__ . '/includes/header.php';
?>

<main class="content container">
    <!-- Section Hero -->
    <section class="hero">
        <h1>Kécolor - La Couleur de Vos Envies</h1>
        <p>Découvrez nos peintures et feutres 100% personnalisables</p>
        <img src="image/image produits.png" alt="Produits Kécolor" style="max-width: 50%; height: auto; margin: 30px 0; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
        <div class="hero-buttons">
            <a href="produits.php" class="btn btn-primary">Découvrir nos produits</a>
            <a href="contact.php" class="btn btn-secondary">Nous contacter</a>
        </div>
    </section>

    <!-- Section Avantages -->
    <section class="avantages">
        <h2>Pourquoi choisir Kécolor ?</h2>
        <div class="cards-grid">
            <div class="card">
                <h3>🎨 Personnalisation</h3>
                <p>Choisissez la couleur exacte que vous désirez avec notre système de sélection.</p>
            </div>
            <div class="card">
                <h3>🎯 Qualité Premium</h3>
                <p>Nos produits sont fabriqués avec les meilleurs pigments du marché.</p>
            </div>
            <div class="card">
                <h3>🚚 Livraison Rapide</h3>
                <p>Recevez vos commandes dans les meilleurs délais.</p>
            </div>
            <div class="card">
                <h3>💰 Prix Compétitifs</h3>
                <p>Profitez de nos tarifs avantageux sans compromis sur la qualité.</p>
            </div>
        </div>
    </section>

    <!-- Section Produits en vedette -->
    <section class="featured">
        <h2>Nos Produits Phares</h2>
        <div class="products-preview">
            <div class="product-preview-card">
                <h3>Peintures Acryliques</h3>
                <img src="" alt="">
                <p>Peintures haute qualité disponibles en plus de 10 000 teintes différentes</p>
                <a href="produits.php#peintures" class="btn-link">Voir les peintures →</a>
            </div>
            <div class="product-preview-card">
                <h3>Feutres Professionnels</h3>
                <img src="" alt="">
                <p>Feutres haut de gamme pour artistes avec teinte au choix</p>
                <a href="produits.php#feutres" class="btn-link">Voir les feutres →</a>
            </div>
        </div>
    </section>

    <!-- Appel à l'action -->
    <section class="cta">
        <h2>Prêt à explorer votre palette de couleurs ?</h2>
        <a href="produits.php" class="btn btn-large">Commencer maintenant</a>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
