// ==================== GESTION DU PANIER ====================

class Cart {
  constructor() {
    this.storageKey = 'kecolor_cart';
    this.cart = this.loadCart();
  }

  loadCart() {
    const saved = localStorage.getItem(this.storageKey);
    return saved ? JSON.parse(saved) : [];
  }

  saveCart() {
    localStorage.setItem(this.storageKey, JSON.stringify(this.cart));
  }

  addItem(item) {
    const { product, size, type, quantity, color, price } = item;
    const key = `${product}_${size || ''}_${type || ''}_${color}`;
    
    const existing = this.cart.find(i => 
      i.product === product && 
      (i.size === size || i.size === undefined) &&
      (i.type === type || i.type === undefined) &&
      i.color === color
    );

    if (existing) {
      existing.quantity += parseInt(quantity);
    } else {
      this.cart.push({
        product,
        size,
        type,
        quantity: parseInt(quantity),
        color,
        price: parseFloat(price)
      });
    }

    this.saveCart();
    return this.cart;
  }

  removeItem(index) {
    this.cart.splice(index, 1);
    this.saveCart();
  }

  updateQuantity(index, quantity) {
    if (quantity <= 0) {
      this.removeItem(index);
    } else {
      this.cart[index].quantity = parseInt(quantity);
      this.saveCart();
    }
  }

  getCart() {
    return this.cart;
  }

  getTotal() {
    return this.cart.reduce((sum, item) => {
      return sum + (item.price * item.quantity);
    }, 0);
  }

  getItemCount() {
    return this.cart.reduce((sum, item) => sum + item.quantity, 0);
  }

  clear() {
    this.cart = [];
    this.saveCart();
  }

  isEmpty() {
    return this.cart.length === 0;
  }
}

// ==================== GESTION DES COULEURS ====================

class ColorManager {
  constructor() {
    this.colors = {
      paint: '#FF5733',
      felt: '#3357FF'
    };
    this.loadColors();
  }

  loadColors() {
    const saved = localStorage.getItem('kecolor_colors');
    if (saved) {
      this.colors = JSON.parse(saved);
    }
  }

  saveColors() {
    localStorage.setItem('kecolor_colors', JSON.stringify(this.colors));
  }

  setColor(type, hex) {
    this.colors[type] = hex;
    this.saveColors();
  }

  getColor(type) {
    return this.colors[type] || '#000000';
  }

  initPreviewSync() {
    // Synchroniser paintColor avec sa preview
    const paintInput = document.getElementById('paintColor');
    if (paintInput) {
      const paintSection = paintInput.closest('.color-selector');
      const paintPreview = paintSection?.querySelector('.color-preview');
      if (paintPreview) {
        paintInput.addEventListener('input', (e) => {
          paintPreview.style.backgroundColor = e.target.value;
          paintPreview.innerHTML = `Aperçu<br>${e.target.value.toUpperCase()}`;
          this.setColor('paint', e.target.value);
        });
      }
    }

    // Synchroniser feltColor avec sa preview
    const feltInput = document.getElementById('feltColor');
    if (feltInput) {
      const feltSection = feltInput.closest('.color-selector');
      const feltPreview = feltSection?.querySelector('.color-preview');
      if (feltPreview) {
        feltInput.addEventListener('input', (e) => {
          feltPreview.style.backgroundColor = e.target.value;
          feltPreview.innerHTML = `Aperçu<br>${e.target.value.toUpperCase()}`;
          this.setColor('felt', e.target.value);
        });
      }
    }
  }
}

// ==================== INITIALISATION GLOBALE ====================

const cart = new Cart();
const colorManager = new ColorManager();

// Afficher le nombre d'articles dans le panier (header)
function updateCartBadge() {
  const badge = document.getElementById('cart-count');
  if (badge) {
    const count = cart.getItemCount();
    badge.textContent = count;
    badge.style.display = count > 0 ? 'inline-block' : 'none';
  }
}

// Fonction pour ajouter un article au panier
function addToCart(event) {
  event.preventDefault();

  const form = event.target;
  const formData = new FormData(form);

  const item = {
    product: formData.get('product'),
    size: formData.get('size') || undefined,
    type: formData.get('type') || undefined,
    quantity: parseInt(formData.get('quantity')) || 1,
    color: formData.get('color') || '#000000',
    price: getPriceFromForm(form)
  };

  if (item.price === 0) {
    alert('⚠ Veuillez sélectionner toutes les options requises');
    return;
  }

  cart.addItem(item);
  updateCartBadge();

  // Feedback utilisateur
  alert(`✓ ${item.product} (${item.quantity}x) ajouté au panier!`);
  form.reset();
}

// Extraire le prix du formulaire basé sur les sélections
function getPriceFromForm(form) {
  const product = form.querySelector('[name="product"]')?.value;
  const size = form.querySelector('[name="size"]')?.value;
  const type = form.querySelector('[name="type"]')?.value;

  // Mapper les prix
  const prices = {
    'Peinture Acrylique': {
      '250': 15,
      '500': 25,
      '1000': 40,
      '5000': 150
    },
    'Feutre Professionnel': {
      'fine': 3,
      'medium': 4,
      'large': 5,
      'brush': 6
    },
    'Kit Débutant': 49,
    'Kit Artiste': 129,
    'Kit Studio Pro': 299
  };

  if (!product) return 0;

  const productPrices = prices[product];
  if (!productPrices) return 0;

  // Pour les kits
  if (typeof productPrices === 'number') {
    return productPrices;
  }

  // Pour les produits avec variantes
  if (size && productPrices[size]) {
    return productPrices[size];
  }
  if (type && productPrices[type]) {
    return productPrices[type];
  }

  return 0;
}

// Initialiser le panier au chargement
document.addEventListener('DOMContentLoaded', () => {
  updateCartBadge();
  colorManager.initPreviewSync();

  // Ajouter les listeners aux formulaires de produits
  const productForms = document.querySelectorAll('.product-form');
  productForms.forEach(form => {
    form.addEventListener('submit', addToCart);
  });
});
