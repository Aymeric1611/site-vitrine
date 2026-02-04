# Site Vitrine Kécolor - BTS SIO (HTML/CSS Pur)

## 📋 Informations Projet

**Établissement:** BTS Systèmes Informatiques et Organisés (SIO)  
**Niveau:** HTML5 + CSS3  
**Date:** Février 2026  
**Durée d'apprentissage recommandée:** 20-30 heures

## ✨ Caractéristiques

Ce projet est conçu **exclusivement en HTML et CSS pur** sans aucune dépendance JavaScript.

### Technologies Utilisées
- ✅ **HTML5** (sémantique, formulaires)
- ✅ **CSS3** (responsive, flexbox, grid)
- ✅ **Aucun JavaScript**
- ✅ **Aucune dépendance externe**

## 📁 Structure du Projet

```
site_vitrine/
├── index.html              # Page d'accueil
├── histoire.html           # Historique et valeurs de l'entreprise
├── produits.html           # Catalogue de produits
├── recrutement.html        # Offres d'emploi
├── equipe.html             # Organisationnel et équipe
├── contact.html            # Formulaire de contact
├── panier.html             # Formulaire de commande
├── style.css               # Feuille de styles (900+ lignes)
├── image/                  # Dossier des images
└── README_BTS_SIO.md       # Ce fichier
```

## 🎯 Pages Principales

### 1. **index.html** - Accueil
- Section héros avec gradient CSS
- 4 cartes d'avantages en grille
- 3 produits vedettes
- Navigation principale

**Concepts CSS utilisés:**
- Flexbox pour la mise en page
- Dégradés (gradients)
- Media queries pour responsive
- Pseudo-classes (:hover)

### 2. **histoire.html** - Notre Histoire
- Timeline chronologique (6 étapes)
- 4 cartes de valeurs
- Mission statement
- Design avec transitions CSS

**Concepts CSS utilisés:**
- Positionnement absolu
- Transitions et animations
- Bordures stylisées
- Variables CSS

### 3. **produits.html** - Catalogue
- Galerie statique de couleurs
- Sélection de peintures avec formulaire
- Sélection de feutres avec formulaire
- 3 kits produits

**Concepts HTML utilisés:**
- Formulaires `<form>` avec `<select>` et `<input>`
- Checkboxes et radio buttons
- Fieldsets et legends

**Concepts CSS utilisés:**
- Grid layout pour galerie
- Card design avec hover
- Mise en forme des formulaires

### 4. **recrutement.html** - Offres d'Emploi
- 6 cartes de postes détaillées
- Informations complètes par poste
- Section avantages
- Design responsive

**Concepts CSS utilisés:**
- Cards avec box-shadow
- Border-radius
- Flexbox pour disposition
- Hover effects

### 5. **equipe.html** - Équipe et Organigramme
- Organigramme en 3 niveaux (13 personnes)
- Structure hiérarchique visible
- Section culture d'entreprise
- Fiches détaillées par département

**Concepts CSS utilisés:**
- Nested flexbox
- Positionnement relatif
- Underline stylisé
- Animation fade-in

### 6. **contact.html** - Formulaire de Contact
- Formulaire complet (nom, email, message)
- Information de contact
- FAQ section (6 questions/réponses)
- Design accessible

**Concepts HTML utilisés:**
- Formulaires sémantiques
- Labels associés
- Textarea pour messages
- Inputs variés (text, email, tel)

### 7. **panier.html** - Commande
- Formulaire de sélection d'articles
- Checkboxes pour choix multiples
- Options de livraison (radio buttons)
- Adresse de livraison (fieldset)
- Tableau de tarifs en HTML pur

**Concepts HTML utilisés:**
- Formulaires multisections
- Checkboxes et radio buttons
- Select dropdowns
- Tableau `<table>`

## 🎨 Style CSS - style.css (900+ lignes)

### Variables CSS
```css
--primary-color: #6d2ebf;    /* Violet principal */
--secondary-color: #2ebfae;  /* Turquoise */
--accent-color: #bf2e2e;     /* Rouge accent */
```

### Responsive Design (3 breakpoints)
- **Desktop:** 1200px et plus
- **Tablet:** 768px à 1199px
- **Mobile:** moins de 480px

### Techniques CSS Avancées
- ✅ CSS Grid
- ✅ Flexbox
- ✅ Gradients linéaires
- ✅ Transitions et transforms
- ✅ Media queries
- ✅ Variables CSS (`--` custom properties)
- ✅ Pseudo-classes (`:hover`, `:focus`)
- ✅ Box-shadow et border-radius

## 📚 Concepts Clés à Apprendre

### HTML5
1. **Structure sémantique** - `<header>`, `<nav>`, `<main>`, `<footer>`
2. **Formulaires** - `<form>`, `<input>`, `<select>`, `<textarea>`
3. **Accessibility** - `<label>`, `<fieldset>`, `<legend>`
4. **Tableaux** - `<table>`, `<thead>`, `<tbody>`, `<th>`, `<td>`

### CSS3
1. **Flexbox** - Disposition fluide et réactive
2. **Grid** - Mise en page avancée
3. **Responsive** - Media queries, viewport
4. **Styling** - Couleurs, typographie, espacement
5. **Animations** - Transitions, transforms
6. **Variables** - Custom properties pour maintenabilité

## 🚀 Démarrage Rapide

### 1. Ouvrir le site
```bash
# Ouvrir index.html dans un navigateur
```

### 2. Naviguer
- Cliquez sur les liens du menu principal
- Les pages sont entièrement fonctionnelles en HTML/CSS

### 3. Remplir un formulaire
- Page "Panier": Complétez le formulaire de commande
- Page "Contact": Envoyez un message (simula validation HTML5)

### 4. Tester le responsive
- F12 pour ouvrir DevTools
- Ctrl+Shift+M pour responsive design mode
- Testez sur différentes résolutions

## ⚙️ Fonctionnalités HTML/CSS Pur

### Formulaires (Sans JavaScript)
- ✅ Validation HTML5 native (required, pattern, email)
- ✅ Placeholders et hints
- ✅ Groupes d'options (fieldsets)
- ✅ Radio buttons pour choix exclusifs
- ✅ Checkboxes pour choix multiples
- ✅ Selects avec options

### Design Responsive
- ✅ Mobile-first approach
- ✅ Flexible layouts (Flexbox + Grid)
- ✅ Responsive images
- ✅ Readable typography scales

### Accessibilité
- ✅ Labels pour tous les inputs
- ✅ Heading hierarchy
- ✅ Semantic HTML
- ✅ Alt text pour images

## 🎓 Exercices Suggérés pour les Étudiants

### Niveau 1 - Modification Simple
1. Changer les couleurs primaires dans `style.css`
2. Modifier le texte des sections
3. Ajouter une nouvelle page (ex: FAQ)
4. Modifier le logo

### Niveau 2 - Mise en Page
1. Adapter le layout pour un mobile
2. Changer la disposition des cartes
3. Modifier la taille des polices
4. Ajouter un nouveau formulaire

### Niveau 3 - CSS Avancé
1. Ajouter des animations CSS
2. Implémenter un thème dark/light
3. Créer une galerie avec CSS Grid
4. Styliser des formulaires personnalisés

### Niveau 4 - Projet Complet
1. Créer un nouveau site pour une autre entreprise
2. Ajouter 5 pages supplémentaires
3. Implémenter un design système cohérent
4. Assurer la responsive sur tous les appareils

## 📖 Ressources d'Apprentissage

### HTML5
- [MDN - HTML Reference](https://developer.mozilla.org/en-US/docs/Web/HTML)
- [W3Schools - HTML Tutorial](https://www.w3schools.com/html/)

### CSS3
- [MDN - CSS Reference](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [CSS Tricks - Complete Guide to Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)
- [CSS Tricks - Complete Guide to Grid](https://css-tricks.com/snippets/css/complete-guide-grid/)

### Responsive Design
- [MDN - Responsive Web Design](https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design)
- [Mobile First Approach](https://www.w3schools.com/css/css_rwd_intro.asp)

## ✅ Validation et Tests

### Checklist HTML
- ✅ Doctype correct
- ✅ Meta charset UTF-8
- ✅ Viewport configuré
- ✅ Tous les liens fonctionnent
- ✅ Tous les formulaires ont des labels
- ✅ Images ont alt text

### Checklist CSS
- ✅ Pas de !important (sauf cas exceptionnel)
- ✅ Responsive design validé
- ✅ Pas de scroll horizontal
- ✅ Lisibilité assurée
- ✅ Contraste suffisant pour accessibilité

### Checklist Responsive
- ✅ Testé sur mobile (< 480px)
- ✅ Testé sur tablet (768-1024px)
- ✅ Testé sur desktop (> 1200px)
- ✅ Pas de débordements
- ✅ Texte lisible

## 🔧 Maintenance et Modification

### Ajouter une Couleur
```css
/* Dans style.css */
--my-new-color: #XXXXXX;
```

### Ajouter une Page
```html
<!-- Dans chaque page, dupliquer la navigation -->
<a href="nouvelle-page.html">Nouvelle Page</a>
```

### Modifier les Tarifs
```html
<!-- Dans panier.html, section tariff-table -->
<tr>
    <td>Produit</td>
    <td>Format</td>
    <td>Nouveau Prix</td>
</tr>
```

## 📊 Statistiques du Projet

| Métrique | Valeur |
|----------|--------|
| Pages HTML | 7 |
| Lignes CSS | 900+ |
| Fichiers | 10+ |
| Images utilisées | 1+ |
| Formulaires | 3+ |
| Breakpoints responsive | 3 |

## ✨ Points Clés d'Excellence

1. **Code Propre** - Bien structuré et lisible
2. **Sémantique HTML** - Utilisation correcte des balises
3. **Responsive Design** - Fonctionne sur tous les appareils
4. **Accessibilité** - WCAG ready
5. **Maintenabilité** - Facile à modifier et étendre
6. **Performance** - Aucune dépendance externe

## 📞 Support

Pour toute question sur le code:
- Consultez les commentaires dans les fichiers
- Vérifiez la documentation HTML5/CSS3 officielle
- Posez des questions à votre instructeur BTS

---

**Projet créé pour l'enseignement du BTS SIO - Février 2026**
