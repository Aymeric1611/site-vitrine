<?php
$pageTitle = "Nous Contacter - Kécolor";
include __DIR__ . '/includes/header.php';
?>

<main class="content container">
    <h1>Nous Contacter</h1>
    <p class="intro-text">Vous avez une question ? Une demande particulière ? Nous sommes à votre écoute 24/7.</p>

    <div class="contact-wrapper">
        <!-- Formulaire de contact -->
        <section class="contact-form-section">
            <h2>Formulaire de Contact</h2>
            <form id="contactForm" class="contact-form">
                <div class="form-group">
                    <label for="name">Nom *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="subject">Sujet *</label>
                    <select id="subject" name="subject" required>
                        <option value="">-- Sélectionner un sujet --</option>
                        <option value="product">Question sur un produit</option>
                        <option value="order">Suivi de commande</option>
                        <option value="partnership">Partenariat commercial</option>
                        <option value="job">Candidature</option>
                        <option value="other">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>

                <div class="form-group">
                    <label for="privacy" class="checkbox-label">
                        <input type="checkbox" id="privacy" name="privacy" required>
                        J'accepte la politique de confidentialité
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
            <div id="successMessage" class="success-message" style="display:none;">
                ✓ Merci ! Votre message a été envoyé avec succès. Nous vous répondrons dans les 24h.
            </div>
        </section>

        <!-- Informations de contact -->
        <section class="contact-info-section">
            <h2>Informations de Contact</h2>

            <div class="contact-info">
                <h3>📍 Adresse</h3>
                <p>Kécolor SARL<br>
                123 Avenue des Couleurs<br>
                25000 Besançon, France</p>
            </div>

            <div class="contact-info">
                <h3>☎️ Téléphone</h3>
                <p><a href="tel:+33123456789">+33 06 23 45 67 89</a></p>
            </div>

            <div class="contact-info">
                <h3>📧 Email</h3>
                <p><a href="mailto:contact@kecolor.fr">contact@kecolor.fr</a></p>
            </div>

            <div class="contact-info">
                <h3>⏰ Horaires</h3>
                <p>
                    Lundi - Vendredi: 9h00 - 18h00<br>
                    Samedi: 10h00 - 14h00<br>
                    Dimanche: Fermé
                </p>
            </div>

            <div class="contact-departments">
                <h3>📞 Nos Départements</h3>
                <div class="dept-list">
                    <div class="dept-item">
                        <strong>Ventes:</strong> <a href="tel:+33123456701">+33 06 23 45 67 01</a>
                    </div>
                    <div class="dept-item">
                        <strong>Support Client:</strong> <a href="tel:+33123456702">+33 06 23 45 67 02</a>
                    </div>
                    <div class="dept-item">
                        <strong>Ressources Humaines:</strong> <a href="tel:+33123456703">+33 06 23 45 67 03</a>
                    </div>
                    <div class="dept-item">
                        <strong>Facturation:</strong> <a href="mailto:facturation@kecolor.fr">facturation@kecolor.fr</a>
                    </div>
                </div>
            </div>

            <div class="contact-social">
                <h3>Suivez-nous</h3>
                <div class="social-links">
                    <a href="#" class="social-icon">📱 Facebook</a>
                    <a href="#" class="social-icon">📷 Instagram</a>
                    <a href="#" class="social-icon">🐦 Twitter</a>
                    <a href="#" class="social-icon">💼 LinkedIn</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Section FAQ -->
    <section id="FAQ" class="faq-section">
        <h2>Questions Fréquemment Posées</h2>
        <div class="faq-grid">
            <div class="faq-item">
                <h3>Quelle est la durée de livraison ?</h3>
                <p>Nos délais standard sont de 3 à 5 jours ouvrables. Pour les commandes urgentes, nous proposons une livraison express de 24h.</p>
            </div>
            <div class="faq-item">
                <h3>Acceptez-vous les retours ?</h3>
                <p>Oui ! Vous avez 30 jours après réception pour retourner un produit. Les frais de retour sont gratuits.</p>
            </div>
            <div class="faq-item">
                <h3>Puis-je payer en plusieurs fois ?</h3>
                <p>Oui, pour les commandes supérieures à 100€, nous proposons un paiement en 3 fois sans frais.</p>
            </div>
            <div class="faq-item">
                <h3>Vos produits sont-ils écologiques ?</h3>
                <p>Nous utilisons des pigments écologiques et biodégradables. Nos emballages sont 100% recyclables.</p>
            </div>
            <div class="faq-item">
                <h3>Comment puis-je suivre ma commande ?</h3>
                <p>Vous recevrez un numéro de suivi par email dès l'expédition. Vous pouvez le saisir sur notre site pour suivre en temps réel.</p>
            </div>
            <div class="faq-item">
                <h3>Y a-t-il une commande minimum ?</h3>
                <p>Pour les particuliers, il n'y a pas de minimum. Pour les professionnels, nous proposons des tarifs avantageux à partir de 500€.</p>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    document.getElementById('contactForm').style.display = 'none';
    document.getElementById('successMessage').style.display = 'block';
});
</script>
</body>
</html>
