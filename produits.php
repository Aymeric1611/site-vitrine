<?php
$pageTitle = "Produits - Kécolor";
include __DIR__ . '/includes/header.php';
?>

<main class="content container">
    <h1>Nos Produits</h1>

    <!-- Section Peintures -->
    <section id="peintures" class="product-section">
        <h2>Peintures Acryliques - Couleur Libre</h2>
        
        <div class="product-card">
            <div class="product-details">
                <h3>Peinture Acrylique Personnalisée</h3>
                <p class="description">Choisissez n'importe quelle couleur! Nos peintures acryliques premium offrent une qualité exceptionnelle avec des couleurs vibrantes et durables.</p>
                
                <div class="color-selector">
                    <div class="color-input-wrapper">
                        <label for="paintColor">Sélectionnez votre pigment :</label>
                        <input type="color" id="paintColor" name="color_paint" value="#FF5733" title="Cliquez pour choisir votre couleur">
                    </div>
                    <div class="color-preview" style="background-color: #FF5733;">
                        Aperçu<br>#FF5733
                    </div>
                </div>

                <div class="product-specs">
                    <h4>Disponibilités :</h4>
                    <ul>
                        <li>250 ml - <strong>3.5€</strong></li>
                        <li>500 ml - <strong>6€</strong></li>
                        <li>1 Litre - <strong>11€</strong></li>
                        <li>5 Litres - <strong>52.5€</strong></li>
                    </ul>
                </div>

                <div class="product-info">
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li>✓ Pigments haute qualité</li>
                        <li>✓ Séchage rapide</li>
                        <li>✓ Résistance aux UV</li>
                        <li>✓ Personnalisation infinie</li>
                        <li>✓ Respectueux de l'environnement</li>
                    </ul>
                </div>

                <form action="#" method="POST" class="product-form">
                    <input type="hidden" name="product" value="Peinture Acrylique">
                    <select name="size" required>
                        <option value="">-- Sélectionnez une taille --</option>
                        <option value="250">250 ml - 3.5€</option>
                        <option value="500">500 ml - 6€</option>
                        <option value="1000">1 Litre - 11€</option>
                        <option value="5000">5 Litres - 52.5€</option>
                    </select>
                    <input type="number" name="quantity" value="1" min="1" max="100" placeholder="Quantité">
                    <input type="color" name="color" id="paint-color-input" value="#FF5733" title="Choisissez votre couleur">
                    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Section Feutres -->
    <section id="feutres" class="product-section">
        <h2>Feutres Professionnels - Couleur Libre</h2>
        
        <div class="product-card">
            <div class="product-details">
                <h3>Feutres Professionnels Personnalisés</h3>
                <p class="description">Choisissez votre couleur! Feutres de haute qualité avec une encre premium et une durée de vie exceptionnelle.</p>
                
                <div class="color-selector">
                    <div class="color-input-wrapper">
                        <label for="feltColor">Sélectionnez votre pigment :</label>
                        <input type="color" id="feltColor" name="color_felt" value="#3357FF" title="Cliquez pour choisir votre couleur">                    </div>
                    <div class="color-preview" style="background-color: #3357FF;">
                        Aperçu<br>#3357FF
                    </div>
                </div>

                <div class="product-specs">
                    <h4>Options de pointe :</h4>
                    <ul>
                        <li>Fine (0.5mm) - <strong>2.5€</strong></li>
                        <li>Moyenne (1mm) - <strong>3.5€</strong></li>
                        <li>Large (2mm) - <strong>4.5€</strong></li>
                    </ul>
                </div>

                <div class="product-info">
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li>✓ Encre longue tenue</li>
                        <li>✓ Mine antidesséchement</li>
                        <li>✓ Parfait pour tous les supports</li>
                        <li>✓ Personnalisation de couleur</li>
                    </ul>
                </div>

                <form action="#" method="POST" class="product-form">
                    <input type="hidden" name="product" value="Feutre Professionnel">
                    <select name="type" required>
                        <option value="">-- Sélectionnez une pointe --</option>
                        <option value="fine">Fine (0.5mm) - 2.5€</option>
                        <option value="medium">Moyenne (1mm) - 3.5€</option>
                        <option value="large">Large (2mm) - 4.5€</option>
                    </select>
                    <select name="quantity" required>
                        <option value="">-- Sélectionnez une quantité --</option>
                        <option value="1">1 feutre</option>
                        <option value="6">6 feutres (5% de réduction)</option>
                        <option value="12">12 feutres (10% de réduction)</option>
                        <option value="24">24 feutres (15% de réduction)</option>
                    </select>
                    <input type="color" name="color" id="felt-color-input" value="#3357FF" title="Choisissez votre couleur">
                    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Section Pinceaux -->
    <section id="pinceaux" class="product-section">
        <h2>Pinceaux Professionnels</h2>
        
        <div class="product-card">
            <div class="product-details">
                <h3>Pinceaux Professionnels</h3>
                <p class="description">Pinceaux de haute qualité et une durée de vie exceptionnelle.</p>
                
                <div class="product-specs">
                    <h4>Options de pointe :</h4>
                    <ul>
                        <li>Fine (0.5mm) - <strong>2.5€</strong></li>
                        <li>Moyenne (1mm) - <strong>3.5€</strong></li>
                        <li>Large (2mm) - <strong>4.5€</strong></li>
                    </ul>
                </div>

                <div class="product-info">
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li>✓ Parfait pour tous les produits</li>
                        <li>✓ Poils synthétiques de qualité</li>
                        <li>✓ Manche ergonomique</li>
                    </ul>
                </div>

                <form action="#" method="POST" class="product-form">
                    <input type="hidden" name="product" value="Pinceau Professionnel">
                    <select name="type" required>
                        <option value="">-- Sélectionnez une  pointe --</option>
                        <option value="fine">Fine (0.5mm) - 2.5€</option>
                        <option value="medium">Moyenne (1mm) - 3.5€</option>
                        <option value="large">Large (2mm) - 4.5€</option>
                    </select>
                    <select name="quantity" required>
                        <option value="">-- Sélectionnez une quantité --</option>
                        <option value="1">1 pinceau</option>
                        <option value="6">6 pinceaux (5% de réduction)</option>
                        <option value="12">12 pinceaux (10% de réduction)</option>
                        <option value="24">24 pinceaux (15% de réduction)</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Section toiles -->
    <section id="toiles" class="product-section">
        <h2>Toiles</h2>
        
        <div class="product-card">
            <div class="product-details">
                <p class="description">Choisissez la taille de toile qui convient à votre projet</p>
                
                <div class="product-specs">
                    <h4>Produits :</h4>
                    <ul>
                        <li>Toile 25x25cm - <strong>8€</strong></li>
                        <li>Toile 50x50cm - <strong>15€</strong></li>
                        <li>Toile 100x100cm - <strong>30€</strong></li>
                    </ul>
                </div>

                <div class="product-info">
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li>✓ Toile de qualité supérieure</li>
                    </ul>
                </div>

                <form action="#" method="POST" class="product-form">
                    <input type="hidden" name="product" value="Toile">
                    <select name="size" required>
                        <option value="">-- Sélectionnez la taille --</option>
                        <option value="25x25">Toile 25x25cm - 8€</option>
                        <option value="50x50">Toile 50x50cm - 15€</option>
                        <option value="100x100">Toile 100x100cm - 30€</option>
                    </select>
                    <input type="number" name="quantity" value="1" min="1" max="100" placeholder="Quantité">
                    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Section autres outils -->
    <section id="autres produits" class="product-section">
        <h2>Autres produits</h2>
        
        <div class="product-card">
            <div class="product-details">
                <p class="description">Choisissez avec quoi utiliser vos feutres et votre peinture</p>
                
                <div class="product-specs">
                    <h4>Produits :</h4>
                    <ul>
                        <li>Palette pour mélanges - <strong>10€</strong></li>
                    </ul>
                </div>

                <div class="product-info">
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li>✓ Large choix de produits de haute qualité pour accompagner vos feutres et votre peintures</li>
                    </ul>
                </div>

                <form action="#" method="POST" class="product-form">
                    <input type="hidden" name="product" value="autres produits">
                    <select name="size" required>
                        <option value="">-- Sélectionnez un outil --</option>
                        <option value="Palette mélange">Palette mélange - 10€</option>
                    </select>
                    <input type="number" name="quantity" value="1" min="1" max="100" placeholder="Quantité">
                    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Section produit à venir -->
    <section id="autres produits" class="product-section">
        <h2>Produits à venir</h2>
        
        <div class="product-card">
            <div class="product-details">
                <p class="description">En cours de conception</p>
                
                <div class="product-specs">
                    <h4>Produits :</h4>
                    <ul>
                        <li>Crayons de couleurs personnalisables</li>
                        <li>Surligneurs personnalisables</li>
                        <li>Stylos personnalisables</li>
                    </ul>
                </div>

                <div class="product-info">
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li>✓ Produits en conception, mais basé sur le même système que pour la peinture et les feutres</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Synchronisation des couleurs pour les peintures
document.addEventListener('DOMContentLoaded', function() {
    // Peintures
    const paintColorInput = document.getElementById('paintColor');
    const paintColorFormInput = document.getElementById('paint-color-input');
    const paintPreview = document.querySelector('#peintures .color-preview');

    if (paintColorInput && paintColorFormInput && paintPreview) {
        const syncPaintColor = (color) => {
            paintColorInput.value = color;
            paintColorFormInput.value = color;
            paintPreview.style.backgroundColor = color;
            paintPreview.innerHTML = `Aperçu<br>${color.toUpperCase()}`;
            // Ajuste le contraste du texte
            const rgb = parseInt(color.slice(1), 16);
            const brightness = (rgb >> 16 & 255) + (rgb >> 8 & 255) + (rgb & 255);
            if (brightness < 382) {
                paintPreview.style.color = '#ffffff';
            } else {
                paintPreview.style.color = '#000000';
            }
        };

        paintColorInput.addEventListener('input', (e) => syncPaintColor(e.target.value));
        paintColorFormInput.addEventListener('input', (e) => syncPaintColor(e.target.value));
    }

    // Feutres
    const feltColorInput = document.getElementById('feltColor');
    const feltColorFormInput = document.getElementById('felt-color-input');
    const feltPreview = document.querySelector('#feutres .color-preview');

    if (feltColorInput && feltColorFormInput && feltPreview) {
        const syncFeltColor = (color) => {
            feltColorInput.value = color;
            feltColorFormInput.value = color;
            feltPreview.style.backgroundColor = color;
            feltPreview.innerHTML = `Aperçu<br>${color.toUpperCase()}`;
            // Ajuste le contraste du texte
            const rgb = parseInt(color.slice(1), 16);
            const brightness = (rgb >> 16 & 255) + (rgb >> 8 & 255) + (rgb & 255);
            if (brightness < 382) {
                feltPreview.style.color = '#ffffff';
            } else {
                feltPreview.style.color = '#000000';
            }
        };

        feltColorInput.addEventListener('input', (e) => syncFeltColor(e.target.value));
        feltColorFormInput.addEventListener('input', (e) => syncFeltColor(e.target.value));
    }
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
