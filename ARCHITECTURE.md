# 🛠️ Architecture et Bonnes Pratiques - Site Kécolor

## 📊 Structure du Projet

```
site_vitrine/
├── 📄 Fichiers HTML (7 pages)
│   ├── index.html              ← Point d'entrée
│   ├── histoire.html           ← Timeline et valeurs
│   ├── produits.html           ← Sélecteurs de couleur
│   ├── recrutement.html        ← Fiches de postes (6)
│   ├── equipe.html             ← Organigramme
│   ├── contact.html            ← Formulaire + FAQ
│   └── panier.html             ← Panier + paiement
│
├── 🎨 Styles et Scripts
│   ├── style.css               ← 900+ lignes CSS3
│   └── script.js               ← Logique interactive
│
├── 📋 Configuration
│   ├── data.json               ← Données produits/équipe
│   └── README.md               ← Documentation
│
├── 📖 Guides
│   └── GUIDE_UTILISATION.md    ← Guide utilisateur
│
└── 🖼️ Assets
    └── image/
        └── Logo Kecolor avec nom entreprise.png
```

---

## 🎯 Architecture de Conception

### Pattern Model-View-Controller

```
DATA (data.json)
    ↓
VIEW (HTML pages)
    ↓
CONTROLLER (script.js)
    ↓
STORAGE (localStorage)
```

### Flux de Données

```
Utilisateur → HTML Form → JavaScript → localStorage → Display
```

---

## 💾 Gestion de l'État

### LocalStorage
- **Clé** : `kecolor_cart`
- **Format** : JSON Array
- **Contenu** : Articles du panier

```javascript
// Structure d'un article
{
  id: timestamp,
  name: "Peinture Acrylique",
  quantity: "500",
  color: "#FF5733",
  price: 25,
  totalPrice: 25
}
```

### Persistence
- Les données persisten entre sessions
- Automatiquement synchronisées
- Nettoyage possible via navigation

---

## 🎨 Système de Couleurs CSS

### Variables Root

```css
:root {
  --primary-color: #6d2ebf;        /* Violet profond */
  --secondary-color: #2ebfae;      /* Turquoise */
  --accent-color: #bf2e2e;         /* Rouge */
  --light-bg: #f7f9fc;             /* Fond clair */
  --dark-text: #222;               /* Texte sombre */
  --border-radius: 8px;            /* Coins arrondis */
  --shadow: 0 2px 8px rgba(...);   /* Ombre légère */
  --transition: all 0.3s ease;     /* Transitions */
}
```

### Utilisation
```css
.button {
  background: linear-gradient(135deg, var(--primary-color), #9b59b6);
  color: white;
  border-radius: var(--border-radius);
  transition: var(--transition);
}
```

---

## 📱 Système de Grille Responsive

### Breakpoints

| Breakpoint | Largeur | Colonne |
|-----------|---------|---------|
| Desktop | 1200px+ | 3 colonnes |
| Tablet | 768px-1199px | 2 colonnes |
| Mobile | < 480px | 1 colonne |

### Grilles CSS

```css
.cards-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}
```

---

## 🔧 Fonctionnalités JavaScript

### 1. Gestion du Panier

```javascript
// Ajouter au panier
addToCart(productName)
  → Récupère les données
  → Crée un objet item
  → Stocke dans localStorage
  → Met à jour l'affichage

// Retirer du panier
removeFromCart(id)
  → Filtre le panier
  → Sauvegarde
  → Rafraîchit l'affichage

// Afficher le panier
updateCartDisplay()
  → Récupère du localStorage
  → Affiche les articles
  → Calcule les totaux
```

### 2. Sélecteur de Couleur

```javascript
// Synchronisation bidirectionnelle
colorPicker.addEventListener('input', () => {
  colorDisplay.style.backgroundColor = colorPicker.value;
  colorHex.value = colorPicker.value.substring(1);
});

colorHex.addEventListener('change', () => {
  colorPicker.value = '#' + colorHex.value;
  colorDisplay.style.backgroundColor = colorPicker.value;
});
```

### 3. Validation de Formulaires

```javascript
// Formatage carte bancaire
cardNumber.addEventListener('input', (e) => {
  let value = e.target.value.replace(/\s/g, '');
  let formatted = value.replace(/(\d{4})/g, '$1 ').trim();
  e.target.value = formatted.substring(0, 19);
});

// Formatage date expiration
cardExpiry.addEventListener('input', (e) => {
  let value = e.target.value.replace(/\D/g, '');
  if (value.length >= 2) {
    value = value.substring(0, 2) + '/' + value.substring(2, 4);
  }
  e.target.value = value;
});
```

### 4. Calcul des Prix

```javascript
function getProductPrice(quantity, productName) {
  const prices = {
    'Peinture Acrylique': { 
      '250': 15, '500': 25, '1000': 40, '5000': 150 
    },
    'Feutre Professionnel': { 
      '1': 3, '6': 2.4, '12': 2.1, '24': 1.8 
    },
    'Kit Débutant': 49,
    'Kit Artiste': 129,
    'Kit Studio Pro': 299
  };
  
  return prices[productName]?.[quantity] || 0;
}
```

---

## 🔐 Sécurité

### Mesures Implémentées

✅ **Validation côté client**
- Vérification des champs obligatoires
- Format email validé
- Longueur des données vérifiée

✅ **Sanitization**
- Pas de eval()
- Pas d'injection HTML
- Texte échappé correctement

✅ **Protection des données**
- localStorage pour données non-sensibles
- Pas de tokens stockés localement
- Pas de mots de passe en client

### À Améliorer en Production

⚠️ **HTTPS obligatoire**
- Chiffrement de tous les échanges

⚠️ **Validation serveur**
- Valider toutes les entrées côté serveur
- Ne jamais faire confiance au client

⚠️ **Backend sécurisé**
- Authentification robuste
- Gestion des sessions
- Protection CSRF/XSS

⚠️ **API sécurisée**
- Rate limiting
- Tokens JWT
- Logs d'audit

---

## 🚀 Performance

### Optimisations CSS

```css
/* Transitions fluides */
transition: var(--transition);

/* Utilisation de transform pour animer */
.card:hover {
  transform: translateY(-8px);  /* Meilleur que top */
}

/* Shadows légères */
box-shadow: var(--shadow);      /* Réutilisable */
```

### Optimisations JavaScript

```javascript
// Mise en cache des sélecteurs
const colorPicker = document.getElementById('colorPicker');
const colorDisplay = document.getElementById('colorDisplay');

// Écouteurs d'événements une seule fois
document.addEventListener('DOMContentLoaded', () => {
  // Code d'initialisation
});

// Délégation d'événements
document.addEventListener('click', (e) => {
  if (e.target.matches('.remove-btn')) {
    removeFromCart(e.target.dataset.id);
  }
});
```

---

## ♿ Accessibilité

### Sémantique HTML

```html
<!-- ✅ Bon -->
<main>
  <section>
    <h2>Titre</h2>
    <button>Action</button>
  </section>
</main>

<!-- ❌ Mauvais -->
<div>
  <span>Titre</span>
  <div onclick="action()">Cliquer</div>
</div>
```

### Attributs ARIA

```html
<nav role="navigation" aria-label="Menu principal">
  <a href="..." aria-current="page">Accueil</a>
</nav>

<button aria-label="Ajouter au panier">Add</button>
```

### Labels et Formulaires

```html
<!-- ✅ Lié correctement -->
<label for="email">Email :</label>
<input type="email" id="email" name="email">

<!-- ✅ Couleurs + texte -->
<button class="btn btn-primary">Primary</button>
<!-- Pas uniquement couleur -->
```

---

## 📋 Checklist de Qualité

### HTML
- [x] Doctype correct
- [x] Métacharset UTF-8
- [x] Viewport configuré
- [x] Sémantique appropriée
- [x] Images avec alt text
- [x] Formulaires avec labels

### CSS
- [x] CSS Valide
- [x] Variables CSS utilisées
- [x] Mobile-first
- [x] Flexbox/Grid moderne
- [x] Pas de !important abusifs
- [x] Performance optimale

### JavaScript
- [x] Pas d'erreurs console
- [x] localStorage fonctionnel
- [x] Gestion d'erreurs
- [x] Pas de variables globales
- [x] Scoping correct
- [x] DRY principle

### UX/Design
- [x] Navigation intuitive
- [x] Feedback utilisateur
- [x] Responsive design
- [x] Accessibilité
- [x] Cohérence visuelle
- [x] Loading smooth

---

## 🔄 Workflow de Développement

### Développement Local

```bash
# 1. Ouvrir le projet
cd site_vitrine/

# 2. Serveur local (optionnel)
python -m http.server 8000

# 3. Naviguer
http://localhost:8000

# 4. Ouvrir index.html directement
file:///path/to/index.html
```

### Tests

```javascript
// Console tests
cart = JSON.parse(localStorage.getItem('kecolor_cart'));
addToCart('Peinture Acrylique');
updateCartDisplay();
removeFromCart(cartId);
```

### Débuggage

```javascript
// Logs utiles
console.log('Cart:', cart);
console.log('Color:', colorPicker.value);
console.log('Total:', total);

// DevTools
F12 → Application → LocalStorage → kecolor_cart
```

---

## 📈 Améliorations Futures

### Phase 1 (Court terme)
- [ ] Intégrer API paiement Stripe
- [ ] Authentification utilisateur
- [ ] Base de données Firebase
- [ ] Images produits optimisées

### Phase 2 (Moyen terme)
- [ ] Backend Node.js/Express
- [ ] Dashboard admin
- [ ] Gestion des stocks
- [ ] Système de notation

### Phase 3 (Long terme)
- [ ] Recommandations IA
- [ ] Réalité augmentée
- [ ] Marketplace B2B
- [ ] Mobilité application

---

## 📚 Ressources

### Documentation
- [MDN - HTML](https://developer.mozilla.org/en-US/docs/Web/HTML)
- [MDN - CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [MDN - JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

### Outils
- [Google Chrome DevTools](https://developer.chrome.com/docs/devtools/)
- [W3C Validator](https://validator.w3.org/)
- [WebAIM Accessibility](https://webaim.org/)

---

## 📞 Support & Contact

**Questions sur le code ?**
- Consultez les commentaires du code source
- Lisez la documentation README.md
- Vérifiez le GUIDE_UTILISATION.md

**Signaler un bug ?**
- Décrivez le problème en détail
- Incluez les étapes pour reproduire
- Partagez des screenshots si possible

---

**Document version** : 1.0  
**Dernière mise à jour** : Février 2026  
**Auteur** : Aymeric Joblin
