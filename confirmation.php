<?php 
$pageTitle = "Confirmation de Commande - Kécolor";
include __DIR__ . '/includes/header.php';
?>

<main class="content">
    <div class="confirmation-page">
        <div class="confirmation-box">
            <div class="confirmation-icon">✓</div>
            <h1>Merci pour votre commande!</h1>
            <p>Votre commande a été reçue avec succès. Un agent Kécolor confirmera votre demande dans les 24 heures.</p>
            
            <div class="order-info">
                <p><strong>Numéro de commande:</strong> KLC-<?=  date("Y") ?>-001</p>
                <p><strong>Date:</strong><?=  date("d/m/Y"); ?> </p>
                <p><strong>Statut:</strong> En attente de confirmation</p>
                <p><strong>Contact:</strong> support@kecolor.fr</p>
            </div>
            
            <p class="contact-email">
                Un email de confirmation a été envoyé à votre adresse. Si vous ne l'avez pas reçu, 
                veuillez contacter <a href="mailto:support@kecolor.fr">support@kecolor.fr</a>
            </p>
            
            <div class="confirmation-buttons">
                <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
                <a href="produits.php" class="btn btn-secondary">Continuer les achats</a>
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
