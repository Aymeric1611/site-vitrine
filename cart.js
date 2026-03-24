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

  let product = formData.get('product');
  let size = formData.get('size') || undefined;

  // Pour les « autres produits », utiliser le choix de l'utilisateur comme nom de produit
  if (product === 'autres produits') {
    const selected = formData.get('size');
    if (selected) {
      product = selected;
      size = undefined;
    }
  }

  const item = {
    product,
    size,
    type: formData.get('type') || undefined,
    quantity: parseInt(formData.get('quantity')) || 1,
    color: formData.get('color') || undefined,
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
  let product = form.querySelector('[name="product"]')?.value;
  let size = form.querySelector('[name="size"]')?.value;
  const type = form.querySelector('[name="type"]')?.value;

  // Pour les « autres produits », utiliser le choix comme nom et ne pas l'enregistrer en tant que "taille"
  if (product === 'autres produits' && size) {
    product = size;
    size = undefined;
  }

  // Mapper les prix
  const prices = {
    'Peinture Acrylique': {
      '250': 3.5,
      '500': 6,
      '1000': 11,
      '5000': 52.5
    },
    'Feutre Professionnel': {
      'fine': 2.5,
      'medium': 3.5,
      'large': 4.5,
    },

    'Pinceau Professionnel': {
      'fine': 2.5,
      'medium': 3.5,
      'large': 4.5,
    },


    'Toile': {
      '25x25': 8,
      '50x50': 15,
      '100x100': 30,
    },

    'Palette mélange': 10
  };

  if (!product) return 0;

  const productPrices = prices[product];
  if (!productPrices) return 0;

  // Pour les kits
  if (typeof productPrices === 'number') {
    return productPrices;
  }

  // Pour les produits avec variantes
  const basePrice = size && productPrices[size]
    ? productPrices[size]
    : type && productPrices[type]
      ? productPrices[type]
      : 0;

  if (!basePrice) return 0;

  // Appliquer les réductions en fonction de la quantité (produits avec ristourne)
  const qty = parseInt(form.querySelector('[name="quantity"]')?.value) || 1;

  if (product === 'Feutre Professionnel') {
    if (qty >= 24) return basePrice * 0.85;
    if (qty >= 12) return basePrice * 0.9;
    if (qty >= 6) return basePrice * 0.95;
    return basePrice;
  }

  if (product === 'Pinceau Professionnel') {
    if (qty >= 24) return basePrice * 0.85;
    if (qty >= 12) return basePrice * 0.9;
    if (qty >= 6) return basePrice * 0.95;
    return basePrice;
  }

  return basePrice;
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

  // Menu mobile / tablette
  const navToggle = document.querySelector('.nav-toggle');
  const header = document.querySelector('.site-header');
  if (navToggle && header) {
    navToggle.addEventListener('click', () => {
      const expanded = navToggle.getAttribute('aria-expanded') === 'true';
      navToggle.setAttribute('aria-expanded', String(!expanded));
      header.classList.toggle('menu-open');
    });
  }
});
