<?php
$pageTitle = "Mon Panier - Kécolor";
include __DIR__ . '/includes/header.php';
?>

<main class="content container">
    <h1>🛒 Mon Panier</h1>
    <div id="cart-content"><!-- Contenu généré par JavaScript --></div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>
// ==================== AFFICHAGE ET GESTION DYNAMIQUE DU PANIER ====================

function renderCart() {
  const cartContent = document.getElementById('cart-content');
  const cartItems = cart.getCart();

  if (cartItems.length === 0) {
    cartContent.innerHTML = `
      <div style="text-align: center; padding: 60px 20px; background: linear-gradient(135deg, rgba(109, 46, 191, 0.05), rgba(46, 191, 174, 0.05)); border-radius: 8px; margin: 40px 0;">
        <p style="font-size: 1.2rem; color: #999; margin-bottom: 20px;">Votre panier est vide</p>
        <a href="produits.php" class="btn btn-primary">← Retour aux produits</a>
      </div>
    `;
    return;
  }

  let html = `
    <style>
      .cart-table { width: 100%; border-collapse: collapse; margin: 20px 0; background: white; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-radius: 8px; overflow: hidden; }
      .cart-table thead { background: linear-gradient(135deg, #6d2ebf, #2ebfae); color: white; }
      .cart-table th, .cart-table td { padding: 15px; text-align: left; }
      .cart-table tbody tr:hover { background: #f9f9f9; }
      .color-swatch { display: inline-block; width: 40px; height: 40px; border-radius: 50%; border: 2px solid #ddd; margin-right: 10px; vertical-align: middle; }
      .quantity-control { display: flex; align-items: center; gap: 5px; }
      .quantity-control input { width: 50px; padding: 5px; border: 1px solid #ddd; border-radius: 4px; }
      .quantity-control button { padding: 5px 10px; background: #6d2ebf; color: white; border: none; border-radius: 4px; cursor: pointer; }
      .quantity-control button:hover { background: #2ebfae; }
      .remove-btn { background: #ff4757; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer; transition: all 0.3s; }
      .remove-btn:hover { background: #ff3838; transform: scale(1.05); }
      .cart-summary-section { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); max-width: 400px; margin: 30px 0 30px auto; }
      .summary-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #e0e0e0; }
      .summary-row.total { font-size: 1.4rem; font-weight: 700; color: #6d2ebf; border-top: 2px solid #2ebfae; border-bottom: 2px solid #2ebfae; margin-top: 15px; padding: 15px 0; }
      .checkout-section { text-align: center; margin: 30px 0; }
      .checkout-section .btn { margin: 0 10px; }
    </style>
    <table class="cart-table">
      <thead>
        <tr>
          <th>Article</th>
          <th>Couleur</th>
          <th>Caractéristiques</th>
          <th>Prix unitaire</th>
          <th>Quantité</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
  `;

  cartItems.forEach((item, index) => {
    const total = (item.price * item.quantity).toFixed(2);
    const details = [];
    if (item.size) details.push('Taille: ' + item.size + 'ml');
    if (item.type) details.push('Type: ' + item.type);

    html += `
      <tr>
        <td><strong>${item.product}</strong></td>
        <td><span class="color-swatch" style="background-color: ${item.color};" title="${item.color}"></span></td>
        <td>${details.join(' • ') || 'Standard'}</td>
        <td>${item.price.toFixed(2)}€</td>
        <td>
          <div class="quantity-control">
            <button type="button" onclick="updateQty(${index}, ${item.quantity - 1})">−</button>
            <input type="number" value="${item.quantity}" min="1" max="100" onchange="updateQty(${index}, this.value)">
            <button type="button" onclick="updateQty(${index}, ${item.quantity + 1})">+</button>
          </div>
        </td>
        <td><strong>${total}€</strong></td>
        <td><button type="button" class="remove-btn" onclick="removeItem(${index})">Supprimer</button></td>
      </tr>
    `;
  });

  html += `</tbody></table>`;

  // Résumé
  const total = cart.getTotal().toFixed(2);
  html += `
    <div class="cart-summary-section">
      <div class="summary-row">
        <span>Sous-total:</span>
        <span>${total}€</span>
      </div>
      <div class="summary-row">
        <span>Livraison:</span>
        <span>5€</span>
      </div>
      <div class="summary-row total">
        <span>Total:</span>
        <span>${(parseFloat(total) + 5).toFixed(2)}€</span>
      </div>
    </div>
    <div class="checkout-section">
      <a href="produits.php" class="btn btn-secondary">← Continuer les achats</a>
      <button type="button" class="btn btn-primary" onclick="proceedToCheckout()">Procéder au paiement →</button>
    </div>
  `;

  cartContent.innerHTML = html;
}

function updateQty(index, newQty) {
  cart.updateQuantity(index, newQty);
  renderCart();
  updateCartBadge();
}

function removeItem(index) {
  if (confirm('Êtes-vous sûr de vouloir supprimer cet article?')) {
    cart.removeItem(index);
    renderCart();
    updateCartBadge();
  }
}

function proceedToCheckout() {
  alert('Paiement en cours de développement - Redirection vers formulaire de confirmation');
  window.location.href = 'confirmation.php';
}

// Initialiser l'affichage au chargement
document.addEventListener('DOMContentLoaded', () => {
  renderCart();
  updateCartBadge();
});
</script>

</body>
</html>
